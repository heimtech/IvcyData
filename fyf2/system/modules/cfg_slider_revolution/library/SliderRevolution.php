<?php

/**
 * cfg_slider_revolution extension for Contao Open Source CMS
 *
 * Copyright (C) 2011-2015 Codefog
 *
 * @package cfg_slider_revolution
 * @author  Codefog <http://codefog.pl>
 * @author  Kamil Kuzminski <kamil.kuzminski@codefog.pl>
 * @license Commercial
 */

namespace Codefog\SliderRevolution;

use Codefog\SliderRevolution\Model\SlideModel;
use Codefog\SliderRevolution\Model\SliderModel;

/**
 * Class SliderRevolution
 *
 * Provide methods to handle slider revolution.
 */
class SliderRevolution
{

    /**
     * Generate the slider
     *
     * @param SliderModel $sliderModel
     * @param string      $template
     *
     * @return string
     */
    public function generate(SliderModel $sliderModel, $template = 'cfg_slider_revolution')
    {
        $slideModels = $sliderModel->getSlides();

        if ($slideModels === null) {
            return '';
        }

        $template = new \FrontendTemplate($template);

        $template->id       = $sliderModel->id;
        $template->slides   = $this->generateSlides($slideModels);
        $template->config   = $this->generateSliderConfig($sliderModel);
        $template->maxWidth = $sliderModel->maxWidth;

        // Add assets
        $this->addAssets($sliderModel);

        return $template->parse();
    }

    /**
     * Generate the slides
     *
     * @param \Model\Collection $slideModels
     *
     * @return array
     */
    protected function generateSlides(\Model\Collection $slideModels)
    {
        $slides = [];

        // Generate slides
        /** @var SlideModel $slideModel */
        foreach ($slideModels as $slideModel) {
            $layers = [];

            $slides[$slideModel->id]                = $slideModel->row();
            $slides[$slideModel->id]['config']      = $this->generateSlideConfig($slideModel);
            $slides[$slideModel->id]['imageConfig'] = $this->generateSlideImageConfig($slideModel, $layers);

            // Generate the layers
            if (($elementModels = $slideModel->getElements()) !== null) {
                $layers = array_merge($layers, $this->generateLayers($elementModels));
            }

            $slides[$slideModel->id]['layers'] = $layers;
        }

        return $slides;
    }

    /**
     * Generate the layers
     *
     * @param \Model\Collection $layerModels
     *
     * @return array
     */
    protected function generateLayers(\Model\Collection $layerModels)
    {
        $layers = [];
        $zIndex = 5;

        /** @var \ContentModel $layerModel */
        foreach ($layerModels as $layerModel) {
            $classes = ['tp-caption', 'tp-resizeme', $layerModel->cfg_slider_revolution_style, $layerModel->cfg_slider_revolution_class];

            $layers[$layerModel->id]             = $layerModel->row();
            $layers[$layerModel->id]['_content'] = \Controller::getContentElement($layerModel->id);
            $layers[$layerModel->id]['_config']  = $this->generateLayerConfig($layerModel, $classes);
            $layers[$layerModel->id]['_class']   = implode(' ', array_filter($classes));
            $layers[$layerModel->id]['_style']   = sprintf('z-index:%s;', $zIndex++) . implode('', trimsplit("\n", $layerModel->cfg_slider_revolution_customStyle));

            // Actions
            if ($layerModel->cfg_slider_revolution_actions) {
                $layers[$layerModel->id]['_actions'] = '[' . implode('', trimsplit("\n", $layerModel->cfg_slider_revolution_actions)) . ']';
            }

            // Animation
            if ($layerModel->cfg_slider_revolution_loop_type) {
                $config = [];

                switch ($layerModel->cfg_slider_revolution_loop_type) {
                    case 'pendulum':
                    case 'rotate':
                        $config['easing']   = $layerModel->cfg_slider_revolution_loop_easing;
                        $config['startdeg'] = intval($layerModel->cfg_slider_revolution_loop_startdeg);
                        $config['enddeg']   = intval($layerModel->cfg_slider_revolution_loop_enddeg);
                        $config['speed']    = intval($layerModel->cfg_slider_revolution_loop_speed);
                        $config['origin']   = $layerModel->cfg_slider_revolution_loop_origin;
                        break;

                    case 'slideloop':
                        $config['easing'] = $layerModel->cfg_slider_revolution_loop_easing;
                        $config['xs']     = intval($layerModel->cfg_slider_revolution_loop_xs);
                        $config['ys']     = intval($layerModel->cfg_slider_revolution_loop_ys);
                        $config['xe']     = intval($layerModel->cfg_slider_revolution_loop_xe);
                        $config['ye']     = intval($layerModel->cfg_slider_revolution_loop_ye);
                        $config['speed']  = intval($layerModel->cfg_slider_revolution_loop_speed);
                        break;

                    case 'wave':
                        $config['easing'] = $layerModel->cfg_slider_revolution_loop_easing;
                        $config['angle']  = intval($layerModel->cfg_slider_revolution_loop_angle);
                        $config['radius'] = intval($layerModel->cfg_slider_revolution_loop_radius);
                        $config['origin'] = $layerModel->cfg_slider_revolution_loop_origin;
                        $config['speed']  = intval($layerModel->cfg_slider_revolution_loop_speed);
                        break;

                    case 'pulse':
                        $config['easing']    = $layerModel->cfg_slider_revolution_loop_easing;
                        $config['zoomstart'] = floatval($layerModel->cfg_slider_revolution_loop_zoomstart);
                        $config['zoomend']   = floatval($layerModel->cfg_slider_revolution_loop_zoomend);
                        $config['speed']     = intval($layerModel->cfg_slider_revolution_loop_speed);
                        break;
                }

                $layers[$layerModel->id]['_loop'] = [
                    'class'  => 'rs-looped rs-' . $layerModel->cfg_slider_revolution_loop_type,
                    'config' => $config,
                ];
            }
        }

        return $layers;
    }

    /**
     * Add assets to the page
     *
     * @param SliderModel $sliderModel
     */
    protected function addAssets(SliderModel $sliderModel)
    {
        $GLOBALS['TL_CSS']['cfg_slider_revolution']            = 'system/modules/cfg_slider_revolution/assets/revolution/css/settings.css';
        $GLOBALS['TL_CSS']['cfg_slider_revolution_layers']     = 'system/modules/cfg_slider_revolution/assets/revolution/css/layers.css';
        $GLOBALS['TL_CSS']['cfg_slider_revolution_navigation'] = 'system/modules/cfg_slider_revolution/assets/revolution/css/navigation.css';

        // Load source assets in debug mode
        if ($sliderModel->debug) {
            $GLOBALS['TL_JAVASCRIPT']['cfg_slider_revolution_log']   = 'system/modules/cfg_slider_revolution/assets/revolution/js/jquery.themepunch.enablelog.js';
            $GLOBALS['TL_JAVASCRIPT']['cfg_slider_revolution_tools'] = 'system/modules/cfg_slider_revolution/assets/revolution/js/source/jquery.themepunch.tools.min.js';
            $GLOBALS['TL_JAVASCRIPT']['cfg_slider_revolution']       = 'system/modules/cfg_slider_revolution/assets/revolution/js/source/jquery.themepunch.revolution.js';
        } else {
            $GLOBALS['TL_JAVASCRIPT']['cfg_slider_revolution_tools'] = 'system/modules/cfg_slider_revolution/assets/revolution/js/jquery.themepunch.tools.min.js';
            $GLOBALS['TL_JAVASCRIPT']['cfg_slider_revolution']       = 'system/modules/cfg_slider_revolution/assets/revolution/js/jquery.themepunch.revolution.min.js';
        }
    }

    /**
     * Generate the slider config
     *
     * @param SliderModel $model
     *
     * @return array
     */
    protected function generateSliderConfig(SliderModel $model)
    {
        $config = [
            'extensions' => 'extensions/',
        ];

        // Adjust the extensions in the debug mode
        if ($model->debug) {
            $config['extensions']        = 'system/modules/cfg_slider_revolution/assets/revolution/js/extensions/source/';
            $config['extensions_suffix'] = '.js';
        }

        // Layout and size
        $config['sliderType']                = $model->sliderType;
        $config['sliderLayout']              = $model->sliderLayout;
        $config['responsiveLevels']          = $this->generateValuesArray($model->responsiveLevels, true);
        $config['gridwidth']                 = $this->generateValuesArray($model->gridwidth, true);
        $config['gridheight']                = $this->generateValuesArray($model->gridheight, true);
        $config['autoHeight']                = $model->autoHeight ? 'on' : 'off';
        $config['minHeight']                 = intval($model->minHeight);
        $config['fullScreenOffsetContainer'] = $model->fullScreenOffsetContainer;
        $config['fullScreenOffset']          = $model->fullScreenOffset ?: '0';

        // Progressing
        $config['delay']              = intval($model->delay);
        $config['disableProgressBar'] = $model->disableProgressBar ? 'on' : 'off';
        $config['startDelay']         = intval($model->startDelay);
        $config['stopAfterLoops']     = intval($model->stopAfterLoops);
        $config['stopAtSlide']        = intval($model->stopAtSlide);

        // Progressing - viewport
        if ($model->viewport) {
            $config['viewport'] = [
                'enable'       => true,
                'outof'        => $model->outof,
                'visible_area' => $model->visible_area,
            ];
        }

        // Lazy loading
        $config['lazyType'] = $model->lazyType;

        // Appearance and visibility
        $config['dottedOverlay'] = $model->dottedOverlay;
        $config['shadow']        = intval($model->shadow);
        $config['spinner']       = $model->spinner;

        // General settings
        $config['debugMode'] = $model->debug ? true : false;

        // General settings - fallbacks
        if ($model->fallbacks) {
            $config['fallbacks'] = [
                'panZoomDisableOnMobile' => $model->panZoomDisableOnMobile ? 'on' : 'off',
                'nextSlideOnWindowFocus' => $model->nextSlideOnWindowFocus ? 'on' : 'off',
                'disableFocusListener'   => $model->disableFocusListener ? true : false,
            ];
        }

        // Parallax settings
        if ($model->parallax) {
            $config['parallax'] = [
                'type'             => $model->parallax_type,
                'levels'           => array_map('intval', trimsplit(',', $model->parallax_levels)),
                'orgio'            => $model->parallax_origo,
                'speed'            => intval($model->parallax_speed),
                'bgparallax'       => $model->parallax_bgparallax ? 'on' : 'off',
                'disable_onmobile' => $model->parallax_disable_onmobile ? 'on' : 'off',
            ];
        }

        // Carousel settings
        if ($model->carousel) {
            $config['carousel'] = [
                'horizontal_align' => $model->carousel_horizontal_align,
                'vertical_align'   => $model->carousel_vertical_align,
                'infinity'         => $model->carousel_infinity ? 'on' : 'off',
                'space'            => intval($model->carousel_space),
                'maxVisibleItems'  => intval($model->carousel_maxVisibleItems),
                'stretch'          => $model->carousel_stretch ? 'on' : 'off',
                'fadeout'          => $model->carousel_fadeout ? 'on' : 'off',
                'maxRotation'      => intval($model->carousel_maxRotation),
                'minScale'         => intval($model->carousel_minScale),
                'vary_fade'        => $model->carousel_vary_fade ? 'on' : 'off',
                'vary_rotation'    => $model->carousel_vary_rotation ? 'on' : 'off',
                'vary_scale'       => $model->carousel_vary_scale ? 'on' : 'off',
                'border_radius'    => intval($model->carousel_border_radius) . 'px',
                'padding_top'      => intval($model->carousel_padding_top),
                'padding_bottom'   => intval($model->carousel_padding_bottom),
            ];
        }

        // Navigation
        $config['navigation'] = [
            'keyboardNavigation'    => $model->navigation_keyboardNavigation ? 'on' : 'off',
            'keyboard_direction'    => $model->navigation_keyboard_direction,
            'mouseScrollNavigation' => $model->navigation_mouseScrollNavigation ? 'on' : 'off',
            'onHoverStop'           => $model->navigation_onHoverStop ? 'on' : 'off',

            // Touch
            'touch'                 => [
                'touchenabled'        => $model->navigation_touch_touchenabled ? 'on' : 'off',
                'swipe_treshold'      => intval($model->navigation_touch_swipe_treshold),
                'swipe_min_touches'   => intval($model->navigation_touch_swipe_min_touches),
                'drag_block_vertical' => $model->navigation_touch_drag_block_vertical ? true : false,
                'swipe_direction'     => $model->navigation_touch_swipe_direction,
            ],

            // Arrows
            'arrows'                => [
                'style'             => $model->navigation_arrows_style,
                'enable'            => $model->navigation_arrows_enable ? true : false,
                'hide_onmobile'     => $model->navigation_arrows_hide_onmobile ? true : false,
                'hide_onleave'      => $model->navigation_arrows_hide_onleave ? true : false,
                'hide_delay'        => intval($model->navigation_arrows_hide_delay),
                'hide_delay_mobile' => intval($model->navigation_arrows_hide_delay_mobile),
                'hide_under'        => intval($model->navigation_arrows_hide_under),
                'hide_over'         => intval($model->navigation_arrows_hide_over),
                'tmp'               => $model->navigation_arrows_tmp,

                'left'              => [
                    'h_align'  => $model->navigation_arrows_left_h_align,
                    'v_align'  => $model->navigation_arrows_left_v_align,
                    'h_offset' => intval($model->navigation_arrows_left_h_offset),
                    'v_offset' => intval($model->navigation_arrows_left_v_offset),
                ],

                'right'             => [
                    'h_align'  => $model->navigation_arrows_right_h_align,
                    'v_align'  => $model->navigation_arrows_right_v_align,
                    'h_offset' => intval($model->navigation_arrows_right_h_offset),
                    'v_offset' => intval($model->navigation_arrows_right_v_offset),
                ],
            ],

            // Bullets
            'bullets'               => [
                'style'             => $model->navigation_bullets_style,
                'enable'            => $model->navigation_bullets_enable ? true : false,
                'hide_onmobile'     => $model->navigation_bullets_hide_onmobile ? true : false,
                'hide_onleave'      => $model->navigation_bullets_hide_onleave ? true : false,
                'hide_delay'        => intval($model->navigation_bullets_hide_delay),
                'hide_delay_mobile' => intval($model->navigation_bullets_hide_delay_mobile),
                'hide_under'        => intval($model->navigation_bullets_hide_under),
                'hide_over'         => intval($model->navigation_bullets_hide_over),
                'tmp'               => $model->navigation_bullets_tmp,
                'direction'         => $model->navigation_bullets_direction,
                'space'             => intval($model->navigation_bullets_space),
                'h_align'           => $model->navigation_bullets_h_align,
                'v_align'           => $model->navigation_bullets_v_align,
                'h_offset'          => intval($model->navigation_bullets_h_offset),
                'v_offset'          => intval($model->navigation_bullets_v_offset),
            ],

            // Thumbnails
            'thumbnails'            => [
                'style'             => $model->navigation_thumbnails_style,
                'enable'            => $model->navigation_thumbnails_enable ? true : false,
                'width'             => intval($model->navigation_thumbnails_width),
                'height'            => intval($model->navigation_thumbnails_height),
                'wrapper_padding'   => intval($model->navigation_thumbnails_wrapper_padding),
                'wrapper_color'     => $this->generateColor($model->navigation_thumbnails_wrapper_color),
                'wrapper_opacity'   => intval($model->navigation_thumbnails_wrapper_opacity),
                'visibleAmount'     => intval($model->navigation_thumbnails_visibleAmount),
                'hide_onmobile'     => $model->navigation_thumbnails_hide_onmobile ? true : false,
                'hide_onleave'      => $model->navigation_thumbnails_hide_onleave ? true : false,
                'hide_delay'        => intval($model->navigation_thumbnails_hide_delay),
                'hide_delay_mobile' => intval($model->navigation_thumbnails_hide_delay_mobile),
                'hide_under'        => intval($model->navigation_thumbnails_hide_under),
                'hide_over'         => intval($model->navigation_thumbnails_hide_over),
                'tmp'               => $model->navigation_thumbnails_tmp,
                'direction'         => $model->navigation_thumbnails_direction,
                'span'              => $model->navigation_thumbnails_span ? true : false,
                'position'          => $model->navigation_thumbnails_position,
                'space'             => intval($model->navigation_thumbnails_span),
                'h_align'           => $model->navigation_thumbnails_h_align,
                'v_align'           => $model->navigation_thumbnails_v_align,
                'h_offset'          => intval($model->navigation_thumbnails_h_offset),
                'v_offset'          => intval($model->navigation_thumbnails_v_offset),
            ],

            // Tabs
            'tabs'                  => [
                'style'             => $model->navigation_tabs_style,
                'enable'            => $model->navigation_tabs_enable ? true : false,
                'width'             => intval($model->navigation_tabs_width),
                'height'            => intval($model->navigation_tabs_height),
                'wrapper_padding'   => intval($model->navigation_tabs_wrapper_padding),
                'wrapper_color'     => $this->generateColor($model->navigation_tabs_wrapper_color),
                'wrapper_opacity'   => intval($model->navigation_tabs_wrapper_opacity),
                'visibleAmount'     => intval($model->navigation_tabs_visibleAmount),
                'hide_onmobile'     => $model->navigation_tabs_hide_onmobile ? true : false,
                'hide_onleave'      => $model->navigation_tabs_hide_onleave ? true : false,
                'hide_delay'        => intval($model->navigation_tabs_hide_delay),
                'hide_delay_mobile' => intval($model->navigation_tabs_hide_delay_mobile),
                'hide_under'        => intval($model->navigation_tabs_hide_under),
                'hide_over'         => intval($model->navigation_tabs_hide_over),
                'tmp'               => $model->navigation_tabs_tmp,
                'direction'         => $model->navigation_tabs_direction,
                'span'              => $model->navigation_tabs_span ? true : false,
                'position'          => $model->navigation_tabs_position,
                'space'             => intval($model->navigation_tabs_span),
                'h_align'           => $model->navigation_tabs_h_align,
                'v_align'           => $model->navigation_tabs_v_align,
                'h_offset'          => intval($model->navigation_tabs_h_offset),
                'v_offset'          => intval($model->navigation_tabs_v_offset),
            ],
        ];

        return $config;
    }

    /**
     * Generate the slide config
     *
     * @param SlideModel $slide
     *
     * @return array
     */
    protected function generateSlideConfig(SlideModel $slide)
    {
        $config = [
            'transition'  => $slide->transition,
            'slotamount'  => intval($slide->slotamount),
            'easein'      => $slide->easein,
            'easeout'     => $slide->easeout,
            'masterspeed' => is_numeric($slide->masterspeed) ? intval($slide->masterspeed) : $slide->masterspeed,
            'rotate'      => intval($slide->rotate),
            'title'       => $slide->title,
            'description' => $slide->description,
        ];

        // Add slide index
        if ($slide->slideIndex) {
            $config['index'] = $slide->slideIndex;
        }

        // Add slide link
        if ($slide->link) {
            $config['link']        = $slide->link;
            $config['target']      = $slide->newWindow ? '_blank' : '_self';
            $config['linktoslide'] = $slide->linktoslide;
        }

        // First transition transition settings
        if ($slide->fstransition) {
            $config['fstransition'] = $slide->fstransition;
        }
        if ($slide->fsmasterspeed) {
            $config['fsmasterspeed'] = is_numeric($slide->fsmasterspeed) ? intval($slide->fsmasterspeed) : $slide->fsmasterspeed;
        }
        if ($slide->fsslotamount) {
            $config['fsslotamount'] = intval($slide->fsslotamount);
        }

        // Thumbnail
        if (($thumb = \FilesModel::findByUuid($slide->thumb)) !== null && is_file(TL_ROOT . '/' . $thumb->path)) {
            $config['thumb'] = $thumb->path;
        }

        return $config;
    }

    /**
     * Generate the slide image config
     *
     * @param SlideModel $slide
     * @param array      &$layers
     *
     * @return array
     */
    protected function generateSlideImageConfig(SlideModel $slide, array &$layers)
    {
        $config           = [];
        $transparentImage = 'system/modules/cfg_slider_revolution/assets/images/transparent.png';

        switch ($slide->background) {
            case 'color':
                $config['src']   = $transparentImage;
                $config['style'] = 'background-color:' . $this->generateColor($slide->bgColor) . ';';
                break;

            case 'image';
            default:
                $image = $transparentImage;

                // Background image
                if (($imageModel = \FilesModel::findByUuid($slide->bgImage)) !== null && is_file(TL_ROOT . '/' . $imageModel->path)) {
                    $image = $imageModel->path;
                }

                $config['src'] = $image;

                // Lazy load
                if ($slide->lazyLoad) {
                    $config['src']           = $transparentImage;
                    $config['data-lazyload'] = $image;
                }

                $config['data-bgposition'] = $slide->bgPosition;
                $config['data-bgfit']      = $slide->bgFit;
                $config['data-bgrepeat']   = $slide->bgRepeat;
                break;

            case 'transparent':
                $config['src'] = $transparentImage;
                break;

            case 'video':
                $image = $transparentImage;

                // Background image
                if (($imageModel = \FilesModel::findByUuid($slide->bgImage)) !== null && is_file(TL_ROOT . '/' . $imageModel->path)) {
                    $image = $imageModel->path;
                }

                $config['src']             = $image;
                $config['data-bgposition'] = $slide->bgPosition;
                $config['data-bgfit']      = $slide->bgFit;
                $config['data-bgrepeat']   = $slide->bgRepeat;

                $layer = [
                    '_class'   => 'rs-background-video-layer',
                    '_config'  => '',
                    '_content' => '',
                ];

                $layer['_config']['forcewind']             = $slide->video_forcerewind ? 'on' : 'off';
                $layer['_config']['volume']                = is_numeric($slide->video_volume) ? intval($slide->video_volume) : $slide->video_volume;
                $layer['_config']['videorate']             = floatval($slide->videorate);
                $layer['_config']['videowidth']            = '100%';
                $layer['_config']['videoheight']           = '100%';
                $layer['_config']['videostartat']          = $slide->video_videostartat;
                $layer['_config']['videoendat']            = $slide->video_videoendat;
                $layer['_config']['videoloop']             = $slide->video_videoloop;
                $layer['_config']['forceCover']            = $slide->video_forceCover ? 1 : 0;
                $layer['_config']['aspectratio']           = $slide->video_aspectratio;
                $layer['_config']['autoplay']              = true;
                $layer['_config']['autoplayonlyfirsttime'] = false;
                $layer['_config']['nextslideatend']        = $slide->video_nextslideatend ? true : false;

                // YouTube ID
                if ($slide->video_ytid) {
                    $layer['_config']['ytid']            = $slide->video_ytid;
                    $layer['_config']['videoattributes'] = $slide->video_videoattributes;
                }

                // Vimeo ID
                if ($slide->video_vimeoid) {
                    $layer['_config']['vimeoid']         = $slide->video_vimeoid;
                    $layer['_config']['videoattributes'] = $slide->video_videoattributes;
                }

                // Video files
                if (($fileModels = $slide->getVideoFiles()) !== null) {
                    /** @var \FilesModel $fileModel */
                    foreach ($fileModels as $fileModel) {
                        if (!is_file(TL_ROOT . '/' . $fileModel->path)) {
                            continue;
                        }

                        $extension = strtolower(pathinfo($fileModel->path, PATHINFO_EXTENSION));

                        $layer['_config']['video' . $extension] = $fileModel->path;
                    }
                }

                $layers[] = $layer;
                break;
        }

        // Parallax effect
        if ($slide->parallax) {
            $config['data-bgparallax'] = 1;
        }

        // Ken Burns effect
        if ($slide->kenburns) {
            $config['data-kenburns']    = 'on';
            $config['data-duration']    = intval($slide->kenburns_duration);
            $config['data-ease']        = $slide->kenburns_ease;
            $config['data-scalestart']  = intval($slide->kenburns_scalestart);
            $config['data-scaleend']    = intval($slide->kenburns_scaleend);
            $config['data-offsetstart'] = $slide->kenburns_offsetstart;
            $config['data-offsetend']   = $slide->kenburns_offsetend;
            $config['data-rotatestart'] = intval($slide->kenburns_rotatestart);
            $config['data-rotateend']   = intval($slide->kenburns_rotateend);
        }

        return $config;
    }

    /**
     * Generate the layer config
     *
     * @param \ContentModel $content
     * @param array         &$classes
     *
     * @return array
     */
    protected function generateLayerConfig(\ContentModel $content, array &$classes)
    {
        $config = [];

        $config['x']                 = $this->generateValuesArray($content->cfg_slider_revolution_x);
        $config['y']                 = $this->generateValuesArray($content->cfg_slider_revolution_y);
        $config['basealign']         = $content->cfg_slider_revolution_basealign;
        $config['responsive_offset'] = $content->cfg_slider_revolution_responsive_offset ? 'on' : 'off';

        if ($content->cfg_slider_revolution_start) {
            $config['start'] = intval($content->cfg_slider_revolution_start);
        }

        if ($content->cfg_slider_revolution_end) {
            $config['end'] = intval($content->cfg_slider_revolution_end);
        }

        if ($content->cfg_slider_revolution_hoffset) {
            $config['hoffset'] = $this->generateValuesArray($content->cfg_slider_revolution_hoffset, true);
        }

        if ($content->cfg_slider_revolution_voffset) {
            $config['voffset'] = $this->generateValuesArray($content->cfg_slider_revolution_voffset, true);
        }

        if ($content->cfg_slider_revolution_width) {
            $config['width'] = $this->generateValuesArray($content->cfg_slider_revolution_width);
        }

        if ($content->cfg_slider_revolution_height) {
            $config['height'] = $this->generateValuesArray($content->cfg_slider_revolution_height);
        }

        if ($content->cfg_slider_revolution_whitespace) {
            $config['whitespace'] = $this->generateValuesArray($content->cfg_slider_revolution_whitespace);
        }

        if ($content->cfg_slider_revolution_lineheight) {
            $config['lineheight'] = $this->generateValuesArray($content->cfg_slider_revolution_lineheight, true);
        }

        if ($content->cfg_slider_revolution_fontsize) {
            $config['fontsize'] = $this->generateValuesArray($content->cfg_slider_revolution_fontsize, true);
        }

        if ($content->cfg_slider_revolution_fontweight) {
            $config['fontweight'] = $this->generateValuesArray($content->cfg_slider_revolution_fontweight, true);
        }

        if ($content->cfg_slider_revolution_color) {
            $config['color'] = $this->generateValuesArray($content->cfg_slider_revolution_color);
        }

        if ($transformIdle = $this->generateAnimationData($content->cfg_slider_revolution_transform_idle)) {
            $config['transform_idle'] = $transformIdle;
        }

        if ($transformHover = $this->generateAnimationData($content->cfg_slider_revolution_transform_hover)) {
            $config['transform_hover'] = $transformHover;
        }

        if ($styleHover = $this->generateAnimationData($content->cfg_slider_revolution_style_hover)) {
            $config['style_hover'] = $styleHover;
        }

        $transformInData = deserialize($content->cfg_slider_revolution_transform_in, true);

        if ($transformIn = $this->generateAnimationData($transformInData)) {
            $config['transform_in'] = $transformIn;
            $config['splitin']     = $transformInData['split'] ?: 'none';
            $config['elementdelay'] = intval($transformInData['splitDelay']) / 100;

            // Add mask settings
            if ($transformInData['mX'] || $transformInData['mY']) {
                $config['mask_in'] = sprintf('x:%spx;y:%spx;', intval($transformInData['mX']), intval($transformInData['mY']));
            }
        }

        $transformOutData = deserialize($content->cfg_slider_revolution_transform_out, true);

        if ($transformOut = $this->generateAnimationData($transformOutData)) {
            $config['transform_out']   = $transformOut;
            $config['splitout']       = $transformOutData['split'] ?: 'none';
            $config['endelementdelay'] = intval($transformOutData['splitDelay']) / 100;

            // Add mask settings
            if ($transformOutData['mX'] || $transformOutData['mY']) {
                $config['mask_out'] = sprintf('x:%spx;y:%spx;', intval($transformOutData['mX']), intval($transformOutData['mY']));
            }
        }

        // Video
        if ($content->type == 'cfg_slider_revolution_video') {
            $classes[] = 'tp-videolayer';

            $config['forcewind']        = $content->cfg_slider_revolution_video_forcerewind ? 'on' : 'off';
            $config['volume']           = is_numeric($content->cfg_slider_revolution_video_volume) ? intval($content->cfg_slider_revolution_video_volume) : $content->cfg_slider_revolution_video_volume;
            $config['videorate']        = floatval($content->cfg_slider_revolution_video_videorate);
            $config['videowidth']       = $content->cfg_slider_revolution_video_videowidth;
            $config['videoheight']      = $content->cfg_slider_revolution_video_videoheight;
            $config['videocontrols']    = $content->cfg_slider_revolution_video_videocontrols ? 'controls' : 'none';
            $config['videostartat']     = $content->cfg_slider_revolution_video_videostartat;
            $config['videoendat']       = $content->cfg_slider_revolution_video_videoendat;
            $config['videoloop']        = $content->cfg_slider_revolution_video_videoloop;
            $config['autoplay']         = $content->cfg_slider_revolution_video_autoplay;
            $config['forceCover']       = $content->cfg_slider_revolution_video_forceCover ? 1 : 0;
            $config['aspectratio']      = $content->cfg_slider_revolution_video_aspectratio;
            $config['nextslideatend']   = $content->cfg_slider_revolution_video_nextslideatend ? true : false;
            $config['posterOnMObile']   = $content->cfg_slider_revolution_video_posterOnMObile ? 'on' : 'off';
            $config['stopallvideos']    = $content->cfg_slider_revolution_video_stopallvideos ? true : false;
            $config['showcoveronpause'] = $content->cfg_slider_revolution_video_showcoveronpause ? 'on' : 'off';

            // YouTube ID
            if ($content->cfg_slider_revolution_video_ytid) {
                $config['ytid']            = $content->cfg_slider_revolution_video_ytid;
                $config['videoattributes'] = $content->cfg_slider_revolution_video_videoattributes;
            }

            // Vimeo ID
            if ($content->cfg_slider_revolution_video_vimeoid) {
                $config['vimeoid']         = $content->cfg_slider_revolution_video_vimeoid;
                $config['videoattributes'] = $content->cfg_slider_revolution_video_videoattributes;
            }

            // Video files
            if (($fileModels = \FilesModel::findMultipleByIds(deserialize($content->cfg_slider_revolution_video_files, true))) !== null) {
                /** @var \FilesModel $fileModel */
                foreach ($fileModels as $fileModel) {
                    if (!is_file(TL_ROOT . '/' . $fileModel->path)) {
                        continue;
                    }

                    $extension = strtolower(pathinfo($fileModel->path, PATHINFO_EXTENSION));

                    $config['video' . $extension] = $fileModel->path;
                }
            }
        }

        return $config;
    }

    /**
     * Generate the values array
     *
     * @param string $value
     * @param bool   $integer
     *
     * @return string
     */
    protected function generateValuesArray($value, $integer = false)
    {
        if (strpos($value, ',') !== false) {
            $value = trimsplit(',', $value);

            if ($integer) {
                $value = implode(',', array_map('intval', $value));
            } else {
                $value = "'" . implode("','", $value) . "'";
            }
        } elseif ($integer) {
            $value = intval($value);
        }

        return $value;
    }

    /**
     * Generate the animation data
     *
     * @param string $value
     *
     * @return string
     */
    protected function generateAnimationData($value)
    {
        $buffer = '';
        $skip   = ['m', 'mX', 'mY', 'split', 'splitDelay'];

        foreach (deserialize($value, true) as $k => $v) {
            if ($v !== '' && !in_array($k, $skip)) {
                $buffer .= $k . ':' . $v . ';';
            }
        }

        return $buffer;
    }

    /**
     * Compile a color value and return a hex or rgba color
     *
     * @param string $color
     *
     * @return string
     */
    protected function generateColor($color)
    {
        $color = deserialize($color);

        if (!is_array($color)) {
            return '#' . $this->shortenHexColor($color);
        } elseif (!isset($color[1]) || empty($color[1])) {
            return '#' . $this->shortenHexColor($color[0]);
        } else {
            return 'rgba(' . implode(',', $this->convertHexColor($color[0])) . ',' . ($color[1] / 100) . ')';
        }
    }

    /**
     * Try to shorten a hex color
     *
     * @param string $color
     *
     * @return string
     */
    protected function shortenHexColor($color)
    {
        if ($color[0] == $color[1] && $color[2] == $color[3] && $color[4] == $color[5]) {
            return $color[0] . $color[2] . $color[4];
        }

        return $color;
    }

    /**
     * Convert hex colors to rgb
     *
     * @param string $color
     *
     * @return array
     *
     * @see http://de3.php.net/manual/de/function.hexdec.php#99478
     */
    protected function convertHexColor($color)
    {
        $rgb = array();

        // Try to convert using bitwise operation
        if (strlen($color) == 6) {
            $dec          = hexdec($color);
            $rgb['red']   = 0xFF & ($dec >> 0x10);
            $rgb['green'] = 0xFF & ($dec >> 0x8);
            $rgb['blue']  = 0xFF & $dec;
        } elseif (strlen($color) == 3) {

            // Shorthand notation
            $rgb['red']   = hexdec(str_repeat(substr($color, 0, 1), 2));
            $rgb['green'] = hexdec(str_repeat(substr($color, 1, 1), 2));
            $rgb['blue']  = hexdec(str_repeat(substr($color, 2, 1), 2));
        }

        return $rgb;
    }
}
