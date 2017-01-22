/**
 * iconpicker extension for Contao Open Source CMS
 *
 * Copyright (C) 2011-2015 Codefog
 *
 * @package iconpicker
 * @author  Codefog <http://codefog.pl>
 * @author  Kamil Kuzminski <kamil.kuzminski@codefog.pl>
 * @license LGPL
 */

var IconPicker = new Class({

    Implements: [Options],

    /**
     * Elements
     */
    elements: {
        container: null,
        preview: null,
        input: null,
        button: null
    },

    /**
     * Options
     */
    options: {
        width: 740,
        title: ''
    },

    /**
     * Initialize the object
     *
     * @param {object} el
     * @param {object} options
     */
    initialize: function (el, options) {
        var self = this;

        self.elements.container = el;
        self.elements.preview = el.getElement('.preview span');
        self.elements.input = el.getElement('input[type="text"]');
        self.elements.button = el.getElement('a');

        self.setOptions(options);

        self.elements.input.addEvent('keyup', function () {
            self.elements.preview.set('class', this.get('value'));
        });

        self.elements.button.addEvent('click', function (e) {
            e.preventDefault();

            Backend.getScrollOffset();

            self.openModal(self.elements.button.get('href'));
        });
    },

    /**
     * Open the modal window
     *
     * @param {string} url
     */
    openModal: function (url) {
        var self = this;
        var max = (window.getSize().y - 180).toInt();

        if (!self.options.height || self.options.height > max) self.options.height = max;

        var modal = new SimpleModal({
            'width': self.options.width,
            'hideFooter': true,
            'draggable': false,
            'overlayOpacity': .5,
            'onShow': function () {
                document.body.setStyle('overflow', 'hidden');
            },
            'onHide': function () {
                document.body.setStyle('overflow', 'auto');
            }
        });

        modal.show({
            'title': self.options.title,
            'model': 'modal-ajax',
            'param': {
                'url': url,
                'onRequestComplete': function() {
                    self.initModal(modal);
                }
            }
        });
    },

    /**
     * Initialize the modal window
     *
     * @param {object} modal
     */
    initModal: function (modal) {
        var self = this;
        var icons = $('iconpicker-popup-icons').getChildren();

        var filterIcons = function(text) {
            Array.each(icons, function(icon) {
                if (text.length == '' || icon.get('data-tags').indexOf(text) != -1) {
                    icon.setStyle('display', 'block');
                } else {
                    icon.setStyle('display', 'none');
                }
            });
        };

        Array.each(icons, function(icon) {
            icon.addEvent('click', function() {
                var value = this.get('data-value');

                self.elements.input.set('value', value);
                self.elements.preview.set('class', value);

                modal.hide();
            });
        });

        $('iconpicker-popup-keyword').addEvent('keyup', function() {
            filterIcons(this.get('value'));
        });
    }
});
