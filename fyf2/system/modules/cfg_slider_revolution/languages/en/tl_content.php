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
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution']                   = ['Slider', 'Please choose the slider.'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_ww']                = ['Image width (px)', 'Defines the Width of the image. (can distort and scale the image if dimensions are different than original dimensions).'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_hh']                = ['Image height (px)', 'Defines the Height of the image. (can distort and scale the image if dimensions are different than original dimensions).'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_start']             = ['Show after (ms)', 'Here you can the start delay before layer is shown in ms.'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_end']               = ['Hide after (ms)', 'Here you can the end delay before layer is hidden in ms.'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_style']             = ['Style', 'Here you can choose one of the predefined caption styles.'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_class']             = ['CSS class', 'These are Styling classes created in the settings.css  You can add unlimited amount of Styles in your own css file, to style your captions at the top level already.'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_x']                 = ['Position X', 'The Horizontal Layer position within the Layer Grid Container (horizontal align). In case base align=”slide” is set, the layer will be aligned based on the Slide container and not the Layer Grid Container.'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_y']                 = ['Position Y', 'The Vertical Layer position within the Layer Grid Container (vertical align). In case base align=”slide” is set, the layer will be aligned based on the Slide container and not the Layer Grid Container.'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_hoffset']           = ['Horizontal offset (px)', 'Defines the Offset horizontally from the Layer position set via the position X.'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_voffset']           = ['Vertical offset (px)', 'Defines the Offset vertically from the Layer position set via the position Y.'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_width']             = ['Width', 'The Width of the layer. Set to “none” or “auto” to auto calculate the layer width. Setting the layer width to a predefined value i.e. “175px” will set the layer basic width to this value and calculate all further responsive behavior based on this value. (i.e. auto Line break can be set if width is defined).'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_height']            = ['Height', 'The Height of the layer. Set to “none” or “auto” to auto calculate the layer height. Setting the layer height to a predefined value i.e. “175px” will set the layer basic height to this value and calculate all further responsive behavior based on this value.'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_whitespace']        = ['Whitespace', 'Defines the way how the line should break based on the width and height settings of the Layer.'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_lineheight']        = ['Line height', 'Set this only use if you wish to have different Line Heights on different Devices.'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_fontsize']          = ['Font size', 'Set this only if you wish to have different Font Sizes on different Devices.'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_fontweight']        = ['Font weight', 'Set this only if you wish to have different Font Weight on different Devices.'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_color']             = ['Color', 'Set this only if you wish to have different Colors on different Devices.'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_basealign']         = ['Base align', 'Defines if the Layer should be aligned to the Layer Grid container, or to the Slide.'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_customStyle']       = ['Custom CSS style', 'Here you can enter the custom CSS style.'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_responsive_offset'] = ['Responsive offset', 'Defines how offset values (horizontal offset, vertical offset) should act on responsivity.'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_actions']           = ['Layer actions', 'Here you can enter custom layer actions.'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_idle']    = ['Idle transformation', '“Idle” Transformations are the transformations which are active on the Layer once the layer finished its “in” or “mouseleave” Animation, and before the layer starts it “out” or “hover” animation.'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_hover']   = ['Hover transformation', '“Hover” Transformations are the transformations which shown on Mouse Enter event over the layer.  This value is combined with the data_style_hover attribute where further styling properties can be defined.'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_style_hover']       = ['Hover style', 'This setting works only in combination with the hover transformation setting.'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_in']      = ['In transformation', 'The layer will be animated from the “in” Transformations set transformations into the “idle” set Transformations.'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_out']     = ['Out transformation', 'The layer will be animated from the “idle” Transformations into the “out” Transformations.'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_loop_type']         = ['Animation loop type', 'Here you can choose the animation loop type.'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_loop_easing']       = ['Animation easing', 'The Ease of the Loop Animation.'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_loop_startdeg']     = ['Start degree', 'The start Rotation Degree for the effect.'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_loop_enddeg']       = ['End degree', 'The end Rotation Degree for the effect.'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_loop_speed']        = ['Animation speed (s)', 'The Animation Speed in  sec.'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_loop_origin']       = ['Animation origin', 'The origin of the effect. Must be declared with two percentage i.e. “50% 50%” which is the center center of the element.'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_loop_xs']           = ['Start offset horizontal (px)', 'The start offset horizontal in px.'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_loop_ys']           = ['Start offset vertical (px)', 'The start offset vertical in px.'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_loop_xe']           = ['End offset horizontal (px)', 'The end offset horizontal in px.'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_loop_ye']           = ['End offset vertical (px)', 'The end offset vertical in px.'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_loop_angle']        = ['Start angle', 'The start Angle of the Wave Rotation.'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_loop_radius']       = ['Size of wave (px)', 'The Size of the Wave (Amplitude).'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_loop_zoomstart']    = ['Zoom start', 'The Scale/Zoom factor at start of Loop.'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_loop_zoomend']      = ['Zoom end', 'The Scale/Zoom factor at end of Loop.'];

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_legend']                     = 'Slider Revolution settings';
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_basic_animations_legend']    = 'Slider Revolution basic animations';
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_advanced_animations_legend'] = 'Slider Revolution advanced animations';
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_loops_legend']               = 'Slider Revolution loops';
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_style_legend']               = 'Slider Revolution style';
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_video_legend']               = 'Slider Revolution video';

/**
 * Reference
 */
// Base align
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_basealign']['slide'] = ['Slide', 'If the Slider is in FullWidth or FullSceen mode, and position X=”left” position Y=”top” set, the Layer will be in the very top left corner positioned in the Slider, independent of the Layer Grid Size.'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_basealign']['grid']  = ['Grid', 'If the Slider is in FullWidth or FullSceen mode, and position X=”left” position Y=”top” set, the Layer will be positioned within the Layer Grid Size, which is centered within the Slider.'];

// Transform idle data
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_idle']['o']   = ['Opacity', '0-1 , floating Number ( 1 = 100% Visible, 0.5 = 50% Transparent)'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_idle']['sX']  = ['Scale X', '0-100 Floating Number. 1 = 100%'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_idle']['sY']  = ['Scale Y', '0-100 Floating Number. 1 = 100%'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_idle']['skX'] = ['Skew X', '0-1000 (px)'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_idle']['skY'] = ['Skew Y', '0-1000 (px)'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_idle']['rX']  = ['Rotation X', '(-)1200 – 1200 (Integer, Rotation Degree)'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_idle']['rY']  = ['Rotation Y', '(-)1200 – 1200 (Integer, Rotation Degree)'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_idle']['rZ']  = ['Rotation Z', '(-)1200 – 1200 (Integer, Rotation Degree)'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_idle']['z']   = ['Transform Z', '(px)'];

// Transform hover data
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_hover']['o']   = ['Opacity', '0-1 , floating Number ( 1 = 100% Visible, 0.5 = 50% Transparent)'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_hover']['sX']  = ['Scale X', '0-100 Floating Number. 1 = 100%'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_hover']['sY']  = ['Scale Y', '0-100 Floating Number. 1 = 100%'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_hover']['skX'] = ['Skew X', '0-1000 (px)'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_hover']['skY'] = ['Skew Y', '0-1000 (px)'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_hover']['rX']  = ['Rotation X', '(-)1200 – 1200 (Integer, Rotation Degree)'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_hover']['rY']  = ['Rotation Y', '(-)1200 – 1200 (Integer, Rotation Degree)'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_hover']['rZ']  = ['Rotation Z', '(-)1200 – 1200 (Integer, Rotation Degree)'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_hover']['z']   = ['Transform Z', '(px)'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_hover']['s']   = ['Duration of in animation', '(ms)'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_hover']['e']   = ['Easing of in animation', '(see help wizard)'];

// Transform in data
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_in']['o']          = ['Opacity', '0-1 , floating Number ( 1 = 100% Visible, 0.5 = 50% Transparent)'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_in']['sX']         = ['Scale X', '0-100 Floating Number. 1 = 100%'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_in']['sY']         = ['Scale Y', '0-100 Floating Number. 1 = 100%'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_in']['skX']        = ['Skew X', '0-1000 (px)'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_in']['skY']        = ['Skew Y', '0-1000 (px)'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_in']['rX']         = ['Rotation X', '(-)1200 – 1200 (Integer, Rotation Degree)'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_in']['rY']         = ['Rotation Y', '(-)1200 – 1200 (Integer, Rotation Degree)'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_in']['rZ']         = ['Rotation Z', '(-)1200 – 1200 (Integer, Rotation Degree)'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_in']['x']          = ['Transform X', '-2000-2000 (px) or Special Values: left,right, {min,max}, [-175%], (R)'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_in']['y']          = ['Transform Y', '-2000-2000 (px) or Special Values: left,right, {min,max}, [-175%], (R)'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_in']['z']          = ['Transform Z', '-2000-2000 (px)'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_in']['s']          = ['Duration of animation', '(ms)'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_in']['e']          = ['Easing of animation', '(see help wizard)'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_in']['mX']         = ['Mask transform X', '-2000-2000 (px). or Special Values: left,right, {min,max}, [-175%], (R)'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_in']['mY']         = ['Mask transform Y', '-2000-2000 (px). or Special Values: left,right, {min,max}, [-175%], (R)'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_in']['split']      = ['Split text animation', '(none, words, characters, lines)'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_in']['splitDelay'] = ['Split animation delay', '(ms)'];

// Transform out data
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_out']['o']          = ['Opacity', '0-1 , floating Number ( 1 = 100% Visible, 0.5 = 50% Transparent)'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_out']['sX']         = ['Scale X', '0-100 Floating Number. 1 = 100%'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_out']['sY']         = ['Scale Y', '0-100 Floating Number. 1 = 100%'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_out']['skX']        = ['Skew X', '0-1000 (px)'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_out']['skY']        = ['Skew Y', '0-1000 (px)'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_out']['rX']         = ['Rotation X', '(-)1200 – 1200 (Integer, Rotation Degree)'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_out']['rY']         = ['Rotation Y', '(-)1200 – 1200 (Integer, Rotation Degree)'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_out']['rZ']         = ['Rotation Z', '(-)1200 – 1200 (Integer, Rotation Degree)'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_out']['x']          = ['Transform X', '-2000-2000 (px) or Special Values: left,right, {min,max}, [-175%], (R)'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_out']['y']          = ['Transform Y', '-2000-2000 (px) or Special Values: left,right, {min,max}, [-175%], (R)'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_out']['z']          = ['Transform Z', '-2000-2000 (px)'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_out']['s']          = ['Duration of animation', '(ms)'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_out']['e']          = ['Easing of animation', '(see help wizard)'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_out']['mX']         = ['Mask transform X', '-2000-2000 (px). or Special Values: left,right, {min,max}, [-175%], (R)'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_out']['mY']         = ['Mask transform Y', '-2000-2000 (px). or Special Values: left,right, {min,max}, [-175%], (R)'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_out']['split']      = ['Split text animation', '(none, words, characters, lines)'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_out']['splitDelay'] = ['Split animation delay', '(s)'];

// Style data
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_style']['c']  = ['Text color', '(HEX or RGBA)'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_style']['td'] = ['Text decoration', '(underline, overline, none)'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_style']['bg'] = ['Background color', '(HEX or RGBA)'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_style']['bc'] = ['Border color', '(HEX or RGBA)'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_style']['bs'] = ['Border style', '(dashed, dotted, solid, double)'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_style']['bw'] = ['Border width', '(px)'];
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_style']['br'] = ['Border radius', '(px or % value – TopLeft, TopRight, BottomRight, BottomLeft)'];

// Loop type
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_loop_type']['pendulum']  = 'Pendulum';
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_loop_type']['rotate']    = 'Rotate';
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_loop_type']['slideloop'] = 'Slide loop';
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_loop_type']['pulse']     = 'Pulse';
$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_loop_type']['wave']      = 'Wave';
