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

/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['tstamp']                    = ['Revision date'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['name']                      = ['Name', 'Please enter the slider name.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['debug']                     = ['Enable debug', 'Enable the extra script with debug information and load uncompressed files.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['sliderType']                = ['Slider type', 'Please choose the slider type.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['sliderLayout']              = ['Slider layout', 'Please choose the slider layout.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['responsiveLevels']          = ['Responsive levels (px)', 'Breakpoint(s) for Display Types. If only 1 Value is defined, breakpoint will be ignored, and all elements will linear resize within the slides. To get 4 different Layouts for the 4 Display Types (Desktop, notebook, table and mobile) define this value as an comma separated values i.e. 2048,1024,778,480. Every time Browser Size shrinks, the next best Layout type will picked and the Layer Grid and all Multi Level defined Elements will be redrawn with the next best layout. This allows you to create  a perfect Layout for the different Display types.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['gridwidth']                 = ['Grid width (px)', 'This value(s) define the Layer Grids Height. Layer Grid is the parent container of all layers within a Slide. This will define the max height of the Slider also, if options like minHeight or autoHeight not set, and sliderLayout is not set to fullscreen.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['gridheight']                = ['Grid height (px)', 'This value(s) define the Layer Grids Width. Layer Grid is the parent container of all layers within a Slide. This will not define the max width of the Slider, but the max width of the Layers container which is always horizontal centered within the slider.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['autoHeight']                = ['Auto height', 'If value set to “on”, Slider height will respect the gridwidth/gridheight defined Aspect Ratio, and will always set the Slider Sizes to keep the same aspect ratio at any browsersize. Layer Grid will be always vertically and horizontally centered.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['minHeight']                 = ['Minimum height (px)', 'Defines the minimum height of the Slider (global). If Layer Grid shrinks under this value, the Slider will keep this height and will center the Layer Grid vertically within the Slider.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['maxWidth']                  = ['Maximum width (px)', 'Here you can enter maximum width of the slider in pixels.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['fullScreenOffsetContainer'] = ['Full screen offset container', 'The Fullscreen Slider’s height will be reduced with the height of the containers which is defined in list form due this parameter. i.e. ‘.header, #logo, .menu.top’  The heights are calculated on demand, and in case they are dynamically changed, some revapi method revredraw() should be called to refresh the calculation of the Slider height.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['fullScreenOffset']          = ['Full screen offset (px or %)', 'The Fullscreen Slider’s height will be reduced/increased with the the value defined via this parameter.  Value can be px or % . i.e. “20%” will reduce the height of the fullscreen slider with the current browser height * 0.2;'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['delay']                     = ['Delay (ms)', 'Value is in milliseconds. Describes the default (global) length of the slides in ms.  Slides length can be individually set via the data-delay attributes. In case the slide has no individual length, it will pick this value.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['disableProgressBar']        = ['Disable progress bar', 'Disable the progress bar.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['startDelay']                = ['Start delay (ms)', 'Wait with starting the first animation after the slider has been loaded. 1000 will wait 1sec before the slider starts. Useful option for manipulate the DOM before the slider starts.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['stopAfterLoops']            = ['Stop after loops', 'Auto Play stop after the Slider has been looped  “x” time, which is defined via this parameter. -1 will ignore the option. First Loop is 0. To Stop the Slider in the First Loop at Slide 3 use stopAfterLoops:0, stopAtSlide:2.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['stopAtSlide']               = ['Stop at slide', 'Auto Play stop at Slide Nr. “x” which is defined via this parameter. -1 will ignore this parameter. First Index of Slide is 0. To Stop the Slider in the First Loop at Slide 3 use stopAfterLoops:0, stopAtSlide:2.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['viewPort']                  = ['Viewport', 'If disabled, the slider starts to play after it has been loaded and initialised. Independent  if the slider is within the Visible Area of the Document or not.  To stop this behavior, you can set the enable and choose between two handlings via the outof parameter.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['outof']                     = ['Outof', 'Here you can choose the outof parameter.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['visible_area']              = ['Visible area', 'To define how many percent  of the Slider must be visible before it starts, you can use the visible_area parameter. 100% means, the full slider must be in the visible area before it starts, and 20% will start the slider already after 20% of the slider becomes visible.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['lazyType']                  = ['Lazy loading type', 'The art to load the images within the slides and navigation containers.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['dottedOverlay']             = ['Dotted overlay', 'A Default overlay on slides. It will create a dotted transparent overlay under the layers, over the slides. We recommend to ignore this feature, and create fullscreen layers with background images instead of this to be able to self drive the z-index and position of overlays.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['shadow']                    = ['Shadow', 'Shadow type which will be drawn via jQuery and css on demand. We strongly recommend to set a colored background for the class rev_slider_wrapper to get a clean and smooth shadow effect below/behind your slider.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['spinner']                   = ['Spinner', 'Loader (“spinner”) Type.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['fallbacks']                 = ['Fallbacks', 'Enable the fallbacks.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['panZoomDisableOnMobile']    = ['Pan zoom disable on mobile', 'Set to on will disable the Pan Zoom effects on Mobile devices.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['nextSlideOnWindowFocus']    = ['Next slide on window focus', 'Allow to swap a slide on focusing the Browser Tab after once it was blurred.  It can be useful in case some time outs break due complex layer animations in the slide.  (Can have a very odd negative Effect on Firefox, where resize event also trigger Focus events)'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['disableFocusListener']      = ['Disable focus listener', 'Will disable any Focus/Blur events on Browsers and Browser Tabs.  Disabling this feature will ignore the Process to stop Ken Burns effect and Slider Timer by leaving the Browser Tab.'];

// Parallax
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['parallax']                  = ['Enable parallax', 'Enable the parallax effect.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['parallax_type']             = ['Parallax type', 'Defines the Event type of the Parallax sensibility.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['parallax_origo']            = ['Parallax origo', 'Defines the calculation base of the parallax direction and distances.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['parallax_levels']           = ['Parallax levels', 'Defines an array of distances. This is a reference Table, so you dont need to set up layer to layer the distance strengths.  This way you can globally change the parallax effect strengths.  Let say Layer “a” has the parallax level 5.  In our example it becomes a parallax strength of “25”.   Means the maximum distance of effect will be 25px in one direction.  All Layers and Slide Backgrounds can have different Parallax Level references to build a nice multi dimensional effect.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['parallax_speed']            = ['Parallax speed (ms)', 'The speed of the position transform of element. 400 will move the elements in 0.4s.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['parallax_bgparallax']       = ['Parallax bgparallax', 'Allows to general disable/enable Background Parallax effects.  Still, you will need to set the Parallax Effect per Slide Background.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['parallax_disable_onmobile'] = ['Parallax disable on mobile', 'Disable Parallax Effect on mobiles for better Performance and smoother effects.'];

// Carousel
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['carousel']                  = ['Enable carousel', 'Enable the carousel.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['carousel_horizontal_align'] = ['Carousel horizontal align', 'Defines the horizontal alignment of the carousel.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['carousel_vertical_align']   = ['Carousel vertical align', 'Defines the vertical alignment of the carousel.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['carousel_infinity']         = ['Carousel infinity', 'If it is set to “on”, the carousel is in Infinity mode, and it will loop through. If it is set to “off” the carousel will not allow to go to previous element if 1st item is active, and will not allow to go to next element if last item is active.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['carousel_space']            = ['Carousel space (px)', 'The space in px between the carousel elements.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['carousel_maxVisibleItems']  = ['Carousel max visible items', 'The max amount of visible items in the same time in a carousel. All other elements are hidden till they come into viewport / focus.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['carousel_stretch']          = ['Carousel stretch', 'Atretch the focused element to the full width of the wrapping container. use this if you wish to see only 1 Element in the same time in the carousel.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['carousel_fadeout']          = ['Carousel fadeout', 'Auto fades in/out the elements if they come/leave the visible range. Depends on the maxVisibleItems option. If vary_fade set to on, all not focused element will be faded where the fade strength is depending on the distance to the focused element.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['carousel_maxRotation']      = ['Carousel max rotation', 'A value in degree. If the value is different than 0, the not focused elements will be rotated depending on the distance to the focused element. If vary_rotation set to off, only the leaving/coming element will be rotated.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['carousel_minScale']         = ['Carousel min scale (%)', 'A value in perpercentage. If the value is different than 0, the not focused elements will be scaled depending on the distance to the focused element. If vary_scale set to off, only the leaving/coming element will be scaled.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['carousel_vary_fade']        = ['Carousel vary fade', 'The elements are transformed based on the distance to the focused element, other way only the leaving/coming element is transformed'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['carousel_vary_rotation']    = ['Carousel vary rotation', 'The elements are transformed based on the distance to the focused element, other way only the leaving/coming element is transformed'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['carousel_vary_scale']       = ['Carousel vary scale', 'The elements are transformed based on the distance to the focused element, other way only the leaving/coming element is transformed'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['carousel_border_radius']    = ['Carousel border radius (px)', 'The border radius of the elements. This should be a String like “0px” or “5px 5px 10px 10px”'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['carousel_padding_top']      = ['Carousel padding top (px)', 'Space above the carousel, to get space to navigation and wrapper.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['carousel_padding_bottom']   = ['Carousel padding bottom (px)', 'Space below the carousel, to get space to navigation and wrapper.'];

// Navigation
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_keyboardNavigation']    = ['Keyboard navigation', 'Allows to enable/disable the keyboard navigation.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_keyboard_direction']    = ['Keyboard direction', 'Use up/down or left/right arrows key for the navigation.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_mouseScrollNavigation'] = ['Mouse scroll navigation', 'Allows mouse scroll based slide navigation.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_onHoverStop']           = ['On hover stop', 'If set to on, slider progress is stopped when Slider is hovered.  Will not stop the Layer animations, only the Slider Progress Bar !'];

// Touch
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_touch_touchenabled']        = ['Enable touch navigation', 'Enable/Disable the Touch function for none Carousel Sliders.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_touch_swipe_treshold']      = ['Swipe treshold', 'The treshold for the Swipe before it gets recognised.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_touch_swipe_min_touches']   = ['Swipe min touches', 'The min amount of “touching” fingers which triggers the swipe function.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_touch_drag_block_vertical'] = ['Drag block vertical', 'Ignore swipes / drags vertical direction'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_touch_swipe_direction']     = ['Swipe direction', 'The direction of Swipe to trigger Slide change functions.'];

// Arrows
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_arrows_enable']            = ['Enable navigation arrows', 'Navigation arrows will be created for the Slider.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_arrows_style']             = ['Arrows style', 'The name of the class which is automatically added later to the generated markup of the arrows.  The Style must be loaded via the html document.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_arrows_hide_onmobile']     = ['Hide on mobile', 'The Navigation arrows are hidden on Mobile Devices.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_arrows_hide_onleave']      = ['Hide on mouse leave', 'The Navigation arrows are hidden on mouse leave.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_arrows_hide_delay']        = ['Hide delay (ms)', 'After how many “ms” the Navigation arrows fade out.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_arrows_hide_delay_mobile'] = ['Hide delay mobile (ms)', 'After how many “ms” the Navigation arrows fade out on mobile devices. This can be different to default hide_delay.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_arrows_hide_under']        = ['Hide under (px)', 'Under the defined “px” the Navigation Arrows will be hidden.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_arrows_hide_over']         = ['Hide over (px)', 'Over the defined “px” the Navigation Arrows will be hidden.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_arrows_tmp']               = ['Arrows HTML markup', 'The HTML Markup for the arrows. You can define any html based markup which will be used for the Arrows.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_arrows_left_h_align']      = ['Left horizontal align', 'The Horizontal Align of the left Arrow within the Slider.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_arrows_left_v_align']      = ['Left vertical align', 'The Vertical Align of the left Arrow within the Slider.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_arrows_left_h_offset']     = ['Left horizontal offset (px)', 'The Horizontal offset in px from the Aligned position. Negative Values on left aligned elements will move left, and negative values on right aligned elements will move right the element.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_arrows_left_v_offset']     = ['Left vertical offset (px)', 'The Vertical offset in px from the Aligned position. Negative Values on top aligned elements will move top, and negative values on bottom aligned elements will move bottom the element.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_arrows_right_h_align']     = ['Right horizontal align', 'The Horizontal Align of the right Arrow within the Slider.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_arrows_right_v_align']     = ['Right vertical align', 'The Vertical Align of the right Arrow within the Slider.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_arrows_right_h_offset']    = ['Right horizontal offset (px)', 'The Horizontal offset in px from the Aligned position. Negative Values on left aligned elements will move left, and negative values on right aligned elements will move right the element.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_arrows_right_v_offset']    = ['Right vertical offset (px)', 'The Vertical offset in px from the Aligned position. Negative Values on top aligned elements will move top, and negative values on bottom aligned elements will move bottom the element.'];

// Bullets
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_bullets_enable']            = ['Enable navigation bullets', 'Bullets will be added to the Slider.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_bullets_style']             = ['Bullets style', 'The name of the class which is automatically added later to the generated markup of the bullets.  The Style must be loaded via the html document.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_bullets_hide_onmobile']     = ['Hide on mobile', 'The Bullets are hidden on Mobile Devices.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_bullets_hide_onleave']      = ['Hide on mouse leave', 'The Navigation arrows are hidden on mouse leave.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_bullets_hide_delay']        = ['Hide delay (ms)', 'After how many “ms” the Bullets fade out.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_bullets_hide_delay_mobile'] = ['Hide delay mobile (ms)', 'After how many “ms” the Bullets fade out on mobile devices. This can be different to default hide_delay.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_bullets_hide_under']        = ['Hide under (px)', 'Under the defined “px” the Bullets will be hidden.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_bullets_hide_over']         = ['Hide over (px)', 'Over the defined “px” the Bullets will be hidden.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_bullets_tmp']               = ['Bullets HTML markup', 'The HTML Markup for the single Bullets. You can define any html based markup here.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_bullets_direction']         = ['Bullets direction', 'The Direction of the Bullets. Vertical or Horizontal.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_bullets_space']             = ['Space between bullets (px)', 'The space between single Bullet Points in px.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_bullets_h_align']           = ['Horizontal align', 'The Horizontal Align of the Bullets  within the Slider.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_bullets_v_align']           = ['Vertical align', 'The Vertical Align of the Bullets within the Slider.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_bullets_h_offset']          = ['Horizontal offset (px)', 'The Horizontal offset in px from the Aligned position. Negative Values on left aligned elements will move left, and negative values on right aligned elements will move right the element.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_bullets_v_offset']          = ['Vertical offset (px)', 'The Vertical offset in px from the Aligned position. Negative Values on top aligned elements will move top, and negative values on bottom aligned elements will move bottom the element.'];

// Thumbnails
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_thumbnails_enable']            = ['Enable navigation thumbnails', 'Navigation Thumbs will be added for the Slider.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_thumbnails_style']             = ['Thumbnails style', 'The name of the class which is automatically added later to the generated markup of the Thumbs.  The Style must be loaded via the html document.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_thumbnails_width']             = ['Thumbnail width (px)', 'The width of one single Thumbnail.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_thumbnails_height']            = ['Thumbnail height (px)', 'The height of one single Thumbnail.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_thumbnails_wrapper_padding']   = ['Wrapper padding (px)', 'The Thumbnails Wrapped Container Padding (px).'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_thumbnails_wrapper_opacity']   = ['Wrapper opacity', 'The opacity of the background of the Thumbnais Wrapper Container.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_thumbnails_wrapper_color']     = ['Wrapper background color', 'The background color of the Thumbnails Wrapper Container.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_thumbnails_visibleAmount']     = ['Visible amount', 'The maximum visible amount of Thumbs in the same time. If more thumbs exist, the Thumbs becomes Draggable and scrollable. If less, the amount of Thumbs will be equal to the amount of existing thumbs.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_thumbnails_hide_onmobile']     = ['Hide on mobile', 'The Thumbnails are hidden on Mobile Devices.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_thumbnails_hide_onleave']      = ['Hide on mouse leave', 'The Thumbnails arrows are hidden on mouse leave.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_thumbnails_hide_delay']        = ['Hide delay (ms)', 'After how many “ms” the Thumbnails fade out.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_thumbnails_hide_delay_mobile'] = ['Hide delay mobile (ms)', 'After how many “ms” the Thumbnails fade out on mobile devices. This can be different to default hide_delay.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_thumbnails_hide_under']        = ['Hide under (px)', 'Under the defined “px” the Thumbnails will be hidden.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_thumbnails_hide_over']         = ['Hide over (px)', 'Over the defined “px” the Thumbnails will be hidden.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_thumbnails_tmp']               = ['Bullets HTML markup', 'The HTML Markup for the single Thumbnails. You can define any html based markup here.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_thumbnails_direction']         = ['Bullets direction', 'The Direction of the Thumbnails. Vertical or Horizontal.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_thumbnails_span']              = ['Span thumbnails', 'Span the thumbnails.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_thumbnails_position']          = ['Position of thumbnails', 'Where the Thumbnails are drawn. Inner or Outer the Slider.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_thumbnails_space']             = ['Space between thumbnails (px)', 'The space between single Thumbnails in px.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_thumbnails_h_align']           = ['Horizontal align', 'The Horizontal Align of the Thumbnails  within the Slider.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_thumbnails_v_align']           = ['Vertical align', 'The Vertical Align of the Thumbnails within the Slider.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_thumbnails_h_offset']          = ['Horizontal offset (px)', 'The Horizontal offset in px from the Aligned position. Negative Values on left aligned elements will move left, and negative values on right aligned elements will move right the element.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_thumbnails_v_offset']          = ['Vertical offset (px)', 'The Vertical offset in px from the Aligned position. Negative Values on top aligned elements will move top, and negative values on bottom aligned elements will move bottom the element.'];

// Tabs
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_tabs_enable']            = ['Enable navigation tabs', 'Navigation Tabs will be added for the Slider.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_tabs_style']             = ['Tabs style', 'The name of the class which is automatically added later to the generated markup of the Tabs.  The Style must be loaded via the html document.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_tabs_width']             = ['Tabs width (px)', 'The width of one single Tabs.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_tabs_height']            = ['Tabs height (px)', 'The height of one single Tabs.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_tabs_wrapper_padding']   = ['Wrapper padding (px)', 'The Tabs Wrapped Container Padding (px).'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_tabs_wrapper_opacity']   = ['Wrapper opacity', 'The opacity of the background of the Tabs Wrapper Container.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_tabs_wrapper_color']     = ['Wrapper background color', 'The background color of the Tabs Wrapper Container.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_tabs_visibleAmount']     = ['Visible amount', 'The maximum visible amount of Tabs in the same time. If more Tabs exist, the Tabs becomes Draggable and scrollable. If less, the amount of Tabs will be equal to the amount of existing Tabs.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_tabs_hide_onmobile']     = ['Hide on mobile', 'The Tabs are hidden on Mobile Devices.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_tabs_hide_onleave']      = ['Hide on mouse leave', 'The Tabs arrows are hidden on mouse leave.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_tabs_hide_delay']        = ['Hide delay (ms)', 'After how many “ms” the Tabs fade out.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_tabs_hide_delay_mobile'] = ['Hide delay mobile (ms)', 'After how many “ms” the Tabs fade out on mobile devices. This can be different to default hide_delay.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_tabs_hide_under']        = ['Hide under (px)', 'Under the defined “px” the Tabs will be hidden.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_tabs_hide_over']         = ['Hide over (px)', 'Over the defined “px” the Tabs will be hidden.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_tabs_tmp']               = ['Bullets HTML markup', 'The HTML Markup for the single Tabs. You can define any html based markup here.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_tabs_direction']         = ['Bullets direction', 'The Direction of the Tabs. Vertical or Horizontal.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_tabs_span']              = ['Span tabs', 'Span the tabs.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_tabs_position']          = ['Position of tabs', 'Where the Tabs are drawn. Inner or Outer the Slider.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_tabs_space']             = ['Space between tabs (px)', 'The space between single Tabs in px.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_tabs_h_align']           = ['Horizontal align', 'The Horizontal Align of the Tabs  within the Slider.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_tabs_v_align']           = ['Vertical align', 'The Vertical Align of the Tabs within the Slider.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_tabs_h_offset']          = ['Horizontal offset (px)', 'The Horizontal offset in px from the Aligned position. Negative Values on left aligned elements will move left, and negative values on right aligned elements will move right the element.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_tabs_v_offset']          = ['Vertical offset (px)', 'The Vertical offset in px from the Aligned position. Negative Values on top aligned elements will move top, and negative values on bottom aligned elements will move bottom the element.'];

$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['xxx'] = ['xxx', 'xxx'];


/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['name_legend']                  = 'Slider name';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['layout_legend']                = 'Layout and size';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['progressing_legend']           = 'Progressing';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['lazy_loading_legend']          = 'Lazy loading';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['appearance_legend']            = 'Appearance and visibility';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['fallbacks_legend']             = 'Fallbacks settings';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['parallax_legend']              = 'Parallax settings';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['carousel_legend']              = 'Carousel settings';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_legend']            = 'Navigation settings';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_touch_legend']      = 'Navigation touch settings';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_arrows_legend']     = 'Navigation arrows settings';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_bullets_legend']    = 'Navigation bullets settings';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_thumbnails_legend'] = 'Navigation thumbnails settings';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_tabs_legend']       = 'Navigation tabs settings';

/**
 * Reference
 */
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['sliderType']['standard']              = ['Standard Slider', 'This is a Regular / Classic slider type. You can define 1+ Slides per slider, and they will be shown as slideshow one by one. In doing so you will only see 1 Slide in the same time. Each Slide can have an individual Delay time, elements and transition type. Slides can have Ken Burns effect, Parallax options etc.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['sliderType']['hero']                  = ['Hero Scene', 'Basically the same as a Regular Slider with only 1 Slide loaded. This will reduce the loading of jQuery Extensions to save time and performance for your page. Usually usage example for Hero Blocks. The Slider can have any effects just like in the Regular Slider like ken burns, parallax, video bg etc.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['sliderType']['carousel']              = ['Carousel Slider', 'You can define 1+ Slides in the slider. Depending on the Carousel settings you can see one or more slides in the same time, aligned to the left, center, right, zoomed, rotated etc. based on the settings. Each slide can have layers, just like in the Regular Slider, however only the focused Slide will show and animate the layers. Defocusing a slide (by drag and pull, or navigation) the layers will animate out. Slides can have any kind of effect, just like in the Regular slider, i.e. Ken Burns, Parallax, video BG etc..'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['sliderLayout']['auto']                = ['Auto Responsive', 'Auto fill the wrapping Containers Width, and calculate the Height based on predefined Grid Sizes.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['sliderLayout']['fullwidth']           = ['Full Width', 'Force the width of slider to always fill the full browser width. The height will still be auto calculated based on the Grid Sizes.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['sliderLayout']['fullscreen']          = ['Full Screen', 'The Slider will get the size of the Browser width and height (manipulating height is possible due options !)'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['outof']['wait']                       = ['Wait', 'Wait will only first time trigger the Slider. In case the Slider is not visible during / after the Document loaded, the slider will wait till the Slider becomes in Visible Position.  Once the Slider is triggered to play, it will not stop again, even if the slider is not in the viewport.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['outof']['pause']                      = ['Pause', 'Pause similar to the wait behavior, however the slider will stop every time the Slider is out of the visible area.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['lazyType']['all']                     = ['All', 'Load all image element in a sequence at the initialisation. This will boost up the loading of your page, and will preload all images to have a smooth and breakless run already in the first loop.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['lazyType']['smart']                   = ['Smart', 'It will load the page as quick as possible, and load only the current and neighbour slide elements. If slide is called which not loaded yet, will be loaded on demand with minimal delays.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['lazyType']['single']                  = ['Single', 'It will load only the the start slide. Any other slides will be loaded on demand.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['lazyType']['none']                    = ['None', 'Disabled the lazy loading feature.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['parallax_type']['off']                = ['Off', 'Turn off the event type.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['parallax_type']['mouse']              = ['Mouse', 'Elements will follow the mouse pointer movements over the sliders.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['parallax_type']['scroll']             = ['Scroll', 'Elements will follow the scroll positions.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['parallax_type']['mouse+scroll']       = ['Mouse + scroll', 'Elements will vertical follow the scroll positions, and horizontal follow the mouse positions.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['parallax_origo']['slidercenter']      = ['Slider center', 'Distance between mouse and slider center will be calculated. The outter side of slider is -100% / 100% and the center is 0%.  Elements will be transformed like “distance percent” * “responsive strength of element” in vertical and horizontal direction.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['parallax_origo']['enterpoint']        = ['Enter point', 'Distance between mouse enter point and current mouse point will be calculated.   Elements will be transformed like “distance percent” * “responsive strength of element” in vertical and horizontal direction.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['carousel_horizontal_align']['left']   = ['Left', 'Align Elements to the left. 1st Carousel Item will show on the left side.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['carousel_horizontal_align']['right']  = ['Right', 'Align Elements to the center. 1st Carousel Item will show on the middle. Left to it the Last element, Right to it the 3nd element.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['carousel_horizontal_align']['center'] = ['Center', 'Align Elements to the right. 1st Carousel Item will show on the right side.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['carousel_vertical_align']['top']      = ['Top'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['carousel_vertical_align']['bottom']   = ['Bottom'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['carousel_vertical_align']['center']   = ['Center'];

/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['new']        = ['New slider', 'Create a new slider'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['show']       = ['Slider details', 'Show the details of slider ID %s'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['edit']       = ['Edit slider', 'Edit slider ID %s'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['editheader'] = ['Edit slider settings', 'Edit the settings of slider ID %s'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['copy']       = ['Duplicate slider', 'Duplicate slider ID %s'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['delete']     = ['Delete slider', 'Delete slider ID %s'];
