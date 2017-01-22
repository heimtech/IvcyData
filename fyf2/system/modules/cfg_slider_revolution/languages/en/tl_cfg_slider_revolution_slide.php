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
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['tstamp']                 = ['Revision date'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['name']                   = ['Name', 'Please enter the slide name.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['slideIndex']             = ['Slide index', 'This index can be manually defined. If not defined, the Slider will create one Index on the run.  Used for Slide Internal links and actions as reference value. (Carousel, Navigation, Internal Slide Links relating on these value also).'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['published']              = ['Published', 'Make the slide publicly visible on the website.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['background']             = ['Background type', 'Please choose the background type.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['bgImage']                = ['Image', 'Please choose the background image (will be used as cover image for video).'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['lazyLoad']               = ['Lazy load', 'Lazy load the background image.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['bgPosition']             = ['Background position', 'Specifies the Image Align within the slide. It works exactly how the Background Image Position works.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['bgFit']                  = ['Background fit', 'The background-size property specifies the size of the background images.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['bgRepeat']               = ['Background repeat', 'The background-repeat property sets if/how a background image will be repeated. The background image is placed according to the background-position property.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['bgColor']                = ['Background color', 'Here you can enter a hexadecimal background color (e.g. ff0000 for red).'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']             = ['Transition', 'One or more Transitions from the list below.  A different Transition will be picked from the predefined Transitions per Loop if more than one Transition are defined here.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['easein']                 = ['Ease in', 'The In/out animation Easing.  If you dont know how you wish to ease the animation, simple dont define it, or use the value “default” which will pick the best ease per transition type.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['easeout']                = ['Ease out', 'The In/out animation Easing.  If you dont know how you wish to ease the animation, simple dont define it, or use the value “default” which will pick the best ease per transition type.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['slotamount']             = ['Slots amount', 'The number of slots or slices the Slide image is “split” to. Only available for Transitions with Slots and Slices.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['masterspeed']            = ['Master speed (ms)', 'This option defines the duration of the Transition in ms (milliseconds). The value “default” is also accepted which will pick the best Duration for the selected Transition.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['fstransition']           = ['First transition ', 'The very first transition for the first slide, to have a different transition i.e. after slide loading than in the slide loop. After the first loop the data-transition defined animation will be used.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['fsslotamount']           = ['First transition slots amount', 'The number of slots or slices the Slide image is “split” to in the first transition. Only available for Transitions with Slots and Slices, and only available if data-fstransition is set !'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['fsmasterspeed']          = ['First transition master speed (ms)', 'This option defines the duration of the First Transition in ms (milliseconds). The value “default” is also accepted which will pick the best Duration for the selected Transition. Only allowed if data-fstransition is set.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['rotate']                 = ['Rotate', 'The rotation of the Single Slots/Slices, or full image during the Transition. Some transition will ignore this value.  Negative and Positive values are allowed. (i.e. -360, or 180 etc..)'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['delay']                  = ['Delay (ms)', 'A new Delay value for the Slide. If no delay defined per slide, the dealy defined via Options will be used.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['link']                   = ['Link', 'This will allow to link the full Slider to an URL, to a Slide (next,previous, slide index) or let the page scroll under the slider.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['newWindow']              = ['Open in a new window', 'Open link in a new window.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['linktoslide']            = ['Link to slide', 'You can trigger the previous slide “prev” or the next slide “next” or a predefined slide “slide4” or simple scroll the page under the slider with “scroll_under” option. Please note, any of these option will only work if the data-link is set to “slide” !'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['thumb']                  = ['Thumbnail', 'The URL for the Thumb / Tab / Bullet / Arrow “preview” Image which will be individual per slide if it is defined.  If you dont define it manually, and the navigation need to pick some Thumb image for Preview, it will simple copy the original Background Image from the Slide!'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['title']                  = ['Title', 'The title of the slide. This can be also referenced via Navigation markups to show Slide title via Thumbnails, Bullets, Arrows, Tabs.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['description']            = ['Description', 'Some description about the Slide. This can be also referenced via Navigation markups to show Slide Description via Thumbnails, Bullets, Arrows, Tabs.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_forcerewind']      = ['Force rewind', 'It rewinds the video to the start position (which is set via the data-videostartat parameter).'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_volume']           = ['Video volume', 'Sets the Start Volume of the Video. It is advised to set Main Background Video volumes to “mute”.  100 is the max. Volume.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_videorate']        = ['Video rate', 'The Speed of the Video. Only available for YouTube Videos. 1 is Normal Speed, 2 half slow, 0.5 is double quick, etc..'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_videowidth']       = ['Video width', 'The video width in px or %.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_videoheight']      = ['Video height', 'The video width in px or %.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_videocontrols']    = ['Video controls', 'Enable / Disable the control panel of the Video. Will be ignored bei Vimeo, where Controls can not be disabled.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_videostartat']     = ['Video start at', 'At which sec. the video should start. (Also force rewind will rewind the video back to this position).  00:05 means start at the 5th sec.  An exact position is not always possible. The next best frame will be picked around the defined time position.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_videoendat']       = ['Video end at', 'At which sec. the video should stop. All defined events will be triggered once the video reached this position (like next slide on end, loop, rewind, etc..)  00:05 means end at the 5th sec.  An exact position is not always possible. The next best frame will be picked around the defined time position. Dont define this value in case you dont want a different end than the real length of the video.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_videoloop']        = ['Video loop', 'Defines if the Video should loop once the end has been reached (end can be defined also via data-videoendat). If not defined, the video will play only once, and the timer of slider will cont to count down again, and/or further events will be triggered.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_autoplay']         = ['Auto play', 'Defines if the Video should play at start.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_forceCover']       = ['Force cover', 'If enabled the video will always cover the slider dimensions. Means it will be zoomed to have a spaceless video covering the full slider aligned to the center center position.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_aspectratio']      = ['Aspect ratio', 'The aspect ratio of the Video. It helps to pre size the video before the Meta has been read.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_nextslideatend']   = ['Next slide at end', 'Auto call next slide when video reached the End time or in data-videoendat parameter defined time position.  It will ignore Slide Countdown process, and only works if Loop not set to Video.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_ytid']             = ['YouTube ID', 'Defines the YouTube Video ID.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_vimeoid']          = ['Vimeo ID', 'Defines the Vimeo Video ID.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_files']            = ['Video files', 'Please choose the video source files (mp4, webm, ogv).'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_videoattributes']  = ['Video attributes', 'Define for Vimeo or YouTube Videos further Arguments.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_videoposter']      = ['Video poster', 'The Url for the Cover Image of the Video. This image will be shown when Video is not in Play mode.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_posterOnMObile']   = ['Video poster on mobile', 'If value set to “on”, the video will be removed on Mobile Devices, and only the Cover Image will be shown.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_stopallvideos']    = ['Stop all videos', 'If value set to “true” it will Stop all playing videos within the slider when current video starts to play.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_showcoveronpause'] = ['Show cover on pause', 'If value set to “true” it will Stop all playing videos within the slider when current video starts to play.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['parallax']               = ['Enable parallax', 'Enable the parallax effect.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['kenburns']               = ['Ken Burns effect', 'Enable Ken Burns effect.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['kenburns_duration']      = ['Ken Burns duration (ms)', 'The duration length of the Ken Burns Effect. It should be same or longer then the length of Slide Duration defined per slide or default in slider settings.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['kenburns_ease']          = ['Ken Burns ease', 'The Ease effect of the Ken Burns Effect.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['kenburns_scalestart']    = ['Start zoom value', 'The start Zoom Value. If the image would not cover the container any more, it will be automatically corrected to the next possible value.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['kenburns_scaleend']      = ['End zoom value', 'The End Zoom Value of the Ken Burns Effect. If the image would not cover the container any more, it will be automatically corrected to the next possible value.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['kenburns_offsetstart']   = ['Offset start (px)', 'Two values, Horizontal and Vertical offsets for the Start position.  It will be related to the Scale and background position settings, and from that position it will move the full slide offsetting with the values set here. i.e -250 -100 will move the slide 250px to the right and 100 px to the bottom at start.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['kenburns_offsetend']     = ['Offset end (px)', 'Two values, Horizontal and Vertical offsets for the End position.  It will be related to the Scale and background position settings, and from that position it will move the full slide offsetting with the values set here. i.e 250 100 will move the slide 250px to the left and 100 px to the Top at the end of the ken burns effect.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['kenburns_rotatestart']   = ['Rotate start', 'Defines the rotation degree of the SlideMain image at the start of the Ken Burns Effect. Use small values (positive or negative).  i.e. “-5” for a smooth and clever effect.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['kenburns_rotateend']     = ['Rotate end', 'Defines the rotation degree of the Slide Main image at the end of the Ken Burns Effect. Use small values (positive or negative).  i.e. “-5” for a smooth and clever effect.'];

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['name_legend']         = 'Name and image';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['background_legend']   = 'Background settings';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition_legend']   = 'Transition settings';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['fstransition_legend'] = 'First transition settings';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['kenburns_legend']     = 'Ken Burns effect';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['parallax_legend']     = 'Parallax effect';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['link_legend']         = 'Link settings';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['thumbnail_legend']    = 'Thumbnail settings';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['title_legend']        = 'Title and description settings';

/**
 * Reference
 */
// Transition
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['basics']                  = 'Basics';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['notransition']            = 'No Transition';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['fade']                    = 'Fade';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['slide-simple']            = 'Slide simple';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['slideup']                 = 'Slide To Top';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['slidedown']               = 'Slide To Bottom';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['slideright']              = 'Slide To Right';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['slideleft']               = 'Slide To Left';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['slidehorizontal']         = 'Slide Horizontal (Next/Previous)';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['slidevertical']           = 'Slide Vertical (Next/Previous)';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['slide-over']              = 'Slide over';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['slideoverup']             = 'Slide Over To Top';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['slideoverdown']           = 'Slide Over To Bottom';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['slideoverright']          = 'Slide Over To Right';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['slideoverleft']           = 'Slide Over To Left';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['slideoverhorizontal']     = 'Slide Over Horizontal (Next/Previous)';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['slideoververtical']       = 'Slide Over Vertical (Next/Previous)';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['slide-remove']            = 'Slide remove';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['slideremoveup']           = 'Slide Remove To Top';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['slideremovedown']         = 'Slide Remove To Bottom';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['slideremoveright']        = 'Slide Remove To Right';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['slideremoveleft']         = 'Slide Remove To Left';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['slideremovehorizontal']   = 'Slide Remove Horizontal (Next/Previous)';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['slideremovevertical']     = 'Slide Remove Vertical (Next/Previous)';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['slots-and-boxes']         = 'Slots and boxes';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['boxslide']                = 'Slide Boxes';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['slotslide-horizontal']    = 'Slide Slots Horizontal';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['slotslide-vertical']      = 'Slide Slots Vertical';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['boxfade']                 = 'Fade Boxes';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['slotfade-horizontal']     = 'Fade Slots Horizontal';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['slotfade-vertical']       = 'Fade Slots Vertical';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['fade-slide']              = 'Fade & slide';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['fadefromright']           = 'Fade and Slide from Right';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['fadefromleft']            = 'Fade and Slide from Left';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['fadefromtop']             = 'Fade and Slide from Top';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['fadefrombottom']          = 'Fade and Slide from Bottom';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['fadetoleftfadefromright'] = 'To Left From Right';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['fadetorightfadefromleft'] = 'To Right From Left';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['fadetotopfadefrombottom'] = 'To Top From Bottom';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['fadetobottomfadefromtop'] = 'To Bottom From Top';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['parallax']                = 'Parallax';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['parallaxtoright']         = 'Parallax to Right';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['parallaxtoleft']          = 'Parallax to Left';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['parallaxtotop']           = 'Parallax to Top';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['parallaxtobottom']        = 'Parallax to Bottom';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['parallaxhorizontal']      = 'Parallax Horizontal';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['parallaxvertical']        = 'Parallax Vertical';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['zoom-transitions']        = 'Zoom transitions';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['scaledownfromright']      = 'Zoom Out and Fade From Right';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['scaledownfromleft']       = 'Zoom Out and Fade From Left';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['scaledownfromtop']        = 'Zoom Out and Fade From Top';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['scaledownfrombottom']     = 'Zoom Out and Fade From Bottom';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['zoomout']                 = 'ZoomOut';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['zoomin']                  = 'ZoomIn';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['slotzoom-horizontal']     = 'Zoom Slots Horizontal';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['slotzoom-vertical']       = 'Zoom Slots Vertical';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['curtain-transitions']     = 'Curtain transitions';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['curtain-1']               = 'Curtain from Left';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['curtain-2']               = 'Curtain from Right';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['curtain-3']               = 'Curtain from Middle';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['premium-transitions']     = 'Premium transitions';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['3dcurtain-horizontal']    = '3D Curtain Horizontal';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['3dcurtain-vertical']      = '3D Curtain Vertical';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['cube']                    = 'Cube Vertical';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['cube-horizontal']         = 'Cube Horizontal';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['incube']                  = 'In Cube Vertical';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['incube-horizontal']       = 'In Cube Horizontal';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['turnoff']                 = 'TurnOff Horizontal';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['turnoff-vertical']        = 'TurnOff Vertical';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['papercut']                = 'Paper Cut';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['flyin']                   = 'Fly In';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['random']                  = 'Random';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['random-selected']         = 'Random of Selected';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['random-static']           = 'Random Flat';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['random-premium']          = 'Random Premium';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition']['random']                  = 'Random Flat and Premium';

// Background
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['background']['image']       = 'Image slide';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['background']['video']       = 'Video slide';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['background']['color']       = 'Solid color background';
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['background']['transparent'] = 'Transparent background';

// Video autoplay
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_autoplay']['on']        = ['On', 'Video starts always when Slide becomes in Focus and Layer starts to animate in.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_autoplay']['off']       = ['Off', 'Video never start automatically.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_autoplay']['1sttime']   = ['1st time', 'Video starts automatically first time. After Slide animated out, video will never start play automatically.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_autoplay']['no1sttime'] = ['No 1st time', 'Video stay in pause when 1st time slide animates in. Every following loop, when Slide and Layer becomes in focus, the Video will start automatically.'];

// Video loop
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_videoloop']['loop']               = ['Loop', 'The video will loop and stop also the Slider Timer. Slide will stay in position, and will only go to next slide on user action.'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_videoloop']['loopandnoslidestop'] = ['Loop and no slide stop', 'The video will loop during the slide timer continues to count down.  If the video is shorter, (i.e. data-videostartat and video-endat defined a shorter range) the video will loop till the end of the slide has been reached.'];

/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['new']        = ['New slide', 'Create a new slide'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['show']       = ['Slide details', 'Show the details of slide ID %s'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['edit']       = ['Edit slide', 'Edit slide ID %s'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['editheader'] = ['Edit slide settings', 'Edit the settings of slide ID %s'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['copy']       = ['Duplicate slide', 'Duplicate slide ID %s'];
$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['delete']     = ['Delete slide', 'Delete slide ID %s'];
