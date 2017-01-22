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
 * Explanations
 */
$GLOBALS['TL_LANG']['XPL']['cfg_slider_revolution.bgPosition'] = '
<div style="padding:20px;">
Specifies the Image Align within the slide. It works exactly how the Background Image Position works. The first value is the horizontal position and the second value is the vertical. The top left corner is 0% 0%. The right bottom corner is 100% 100%.<br><br>
First value can be: left,center,right, % value<br>
Second value can be: top,center,bottom, % value<br><br>
Both Value must be defined with a space between the two values, like: “top center”
</div>';

$GLOBALS['TL_LANG']['XPL']['cfg_slider_revolution.bgFit'] = [
    ['length', 'Sets the width and height of the background image. The first value sets the width, the second value sets the height. If only one value is given, the second is set to “auto”.'],
    ['cover', 'Scale the background image to be as large as possible so that the background area is completely covered by the background image. Some parts of the background image may not be in view within the background positioning area.'],
    ['contain', 'Scale the image to the largest size such that both its width and its height can fit inside the content area.'],
];

$GLOBALS['TL_LANG']['XPL']['cfg_slider_revolution.bgRepeat'] = [
    ['repeat', 'The background image will be repeated both vertically and horizontally. This is default.'],
    ['repeat-x', 'The background image will be repeated only horizontally.'],
    ['repeat-y', 'The background image will be repeated only vertically.'],
    ['no-repeat', 'The background-image will not be repeated.'],
];

$GLOBALS['TL_LANG']['XPL']['cfg_slider_revolution.video_videoattributes'] = [
    ['YouTube Video Arguments', 'version=3&enablejsapi=1&html5=1& hd=1&wmode=opaque& showinfo=0&ref=0;;origin=http://server.local;'],
    ['Vimeo Video Arguments', 'title=0&byline=0&portrait=0&api=1'],
];

$GLOBALS['TL_LANG']['XPL']['cfg_slider_revolution.layer_x'] = '
<div style="padding:20px;">
The Horizontal Layer position within the Layer Grid Container (horizontal align). In case base align=”slide” is set, the layer will be aligned based on the Slide container and not the Layer Grid Container.<br><br>
In case you set a direct Number like position X=”200″ the element will be left aligned and the distance will be automatically 200px away from the left side of the LGC / Slide.<br><br>
Use Array for Advanced Responsive Levels to set different values on Desktop,Notebook,Tablet and Mobile Devices. i.e.:<br><br>
“left,left,center,right” to set the layer left on desktop and notebook, center on Tablet devices, and right positioned on Mobile.<br><br>
Note!! Array is only works if responsivelevels and gridwidth/gridheight is defined as arrays in the Slider Settings !
</div>';

$GLOBALS['TL_LANG']['XPL']['cfg_slider_revolution.layer_y'] = '
<div style="padding:20px;">
The Vertical Layer position within the Layer Grid Container (vertical align). In case base align=”slide” is set, the layer will be aligned based on the Slide container and not the Layer Grid Container.<br><br>
In case you set a direct Number like position Y=”200″ the element will be top aligned and the distance will be automatically 200px away from the top side of the LGC / Slide.<br><br>
Use Array for Advanced Responsive Levels to set different values on Desktop,Notebook,Tablet and Mobile Devices. i.e.:<br><br>
“top,top,center,bottom” to set layer top aligned on desktop and notebook, center on Tablet devices, bottom on Mobile.<br><br>
Note!! Array is only works if responsivelevels and gridwidth/gridheight is defined as arrays in the Slider Settings !
</div>';

$GLOBALS['TL_LANG']['XPL']['cfg_slider_revolution.layer_hoffset'] = '
<div style="padding:20px;">
Defines the Offset horizontally from the Layer position set via the position X.<br><br>
i.e. position X=”center” horizontal offset=”50″ will put the Layer center + 50px within the Layer Grid Container / Slide (based on the base align setting).<br><br>
Use Array for Advanced Responsive Levels to set different values on Desktop,Notebook,Tablet and Mobile Devices. i.e.:<br><br>
“50,50,30,10” to set layer 50px away from the Layer position defined in position X on desktop and notebook, and 30px and 10px on Tablet and mobile devices.<br><br>
Note!! Array is only works if responsivelevels and gridwidth/gridheight is defined as arrays in the Slider Settings !
</div>';

$GLOBALS['TL_LANG']['XPL']['cfg_slider_revolution.layer_voffset'] = '
<div style="padding:20px;">
Defines the Offset vertically from the Layer position set via the position Y.<br><br>
i.e. position Y=”center” vertical offset=”-50″ will put the Layer center – 50px within the Layer Grid Container / Slide (based on the base align setting).<br><br>
Use Array for Advanced Responsive Levels to set different values on Desktop,Notebook,Tablet and Mobile Devices. i.e.:<br><br>
“50,50,30,10” to set layer 50px away from the Layer position defined in position Y on desktop and notebook, and 30px and 10px on Tablet and mobile devices.<br><br>
Note!! Array is only works if responsivelevels and gridwidth/gridheight is defined as arrays in the Slider Settings !
</div>';

$GLOBALS['TL_LANG']['XPL']['cfg_slider_revolution.layer_width'] = '
<div style="padding:20px;">
The Width of the layer. Set to “none” or “auto” to auto calculate the layer width. Setting the layer width to a predefined value i.e. “175px” will set the layer basic width to this value and calculate all further responsive behavior based on this value. (i.e. auto Line break can be set if width is defined).<br><br>
“full” – will make the layer full width due the whole Layer Grid or Slider (based on the basealign settings).<br><br>
This will not set the width of the Included Images. They need to be set independent from this value !<br><br>
Use Array for Advanced Responsive Levels to set different values on Desktop,Notebook,Tablet and Mobile Devices. i.e.:<br><br>
“none,none,150px,100px” which will i.e. use on Desktop and Notebook auto Width, and on Tablet and Mobile predefined widths.<br><br>
Note!! Array is only works if responsivelevels and gridwidth/gridheight is defined as arrays in the Slider Settings !
</div>';

$GLOBALS['TL_LANG']['XPL']['cfg_slider_revolution.layer_height'] = '
<div style="padding:20px;">
The Height of the layer. Set to “none” or “auto” to auto calculate the layer height. Setting the layer height to a predefined value i.e. “175px” will set the layer basic height to this value and calculate all further responsive behavior based on this value.<br><br>
“full” – will make the layer full height due the whole Layer Grid or Slider (based on the basealign settings).<br><br>
This will not set the height of the Included Images. They need to be set independent from this value !<br><br>
Use Array for Advanced Responsive Levels to set different values on Desktop,Notebook,Tablet and Mobile Devices. i.e.:<br><br>
“none,none,150px,100px” which will i.e. use on Desktop and Notebook auto Height, and on Tablet and Mobile predefined heights.<br><br>
Note!! Array is only works if responsivelevels and gridwidth/gridheight is defined as arrays in the Slider Settings !
</div>';

$GLOBALS['TL_LANG']['XPL']['cfg_slider_revolution.layer_whitespace'] = '
<div style="padding:20px;">
Defines the way how the line should break based on the width and height settings of the Layer.<br><br>
nowrap – will not auto break the line. Text will overflow the container if it has set smaller (not auto or none).<br>
normal – content will auto line break based on the layer width<br><br>
Use Array for Advanced Responsive Levels to set different values on Desktop,Notebook,Tablet and Mobile Devices. i.e.:<br><br>
“nowrap,normal,normal,normal” to not autobreak on Desktop, but auto break on Notebook, Tablet and Mobile.<br><br>
Note!! Array is only works if responsivelevels and gridwidth/gridheight is defined as arrays in the Slider Settings !
</div>';

$GLOBALS['TL_LANG']['XPL']['cfg_slider_revolution.layer_lineheight'] = '
<div style="padding:20px;">
Set this only use if you wish to have different Line Heights on different Devices.<br><br>
Must be defined as an Array for Advanced Responsive Levels to set different values on Desktop,Notebook,Tablet and Mobile Devices.<br><br>
“40,30,30,25” to set Line Height of the Layer to 40px on Desktop, 30px on Notebook and Tablet, and 25px on Mobile.<br><br>
Note!! Only works if responsivelevels and gridwidth/gridheight is defined as arrays in the Slider Settings !
</div>';

$GLOBALS['TL_LANG']['XPL']['cfg_slider_revolution.layer_fontsize'] = '
<div style="padding:20px;">
Set this only if you wish to have different Font Sizes on different Devices.<br><br>
Must be defined as an Array for Advanced Responsive Levels to set different values on Desktop,Notebook,Tablet and Mobile Devices.<br><br>
“40,30,30,25” to set the Font Size of the Layer to 40px on Desktop, 30px on Notebook and Tablet, and 25px on Mobile.<br><br>
Note!! Only works if responsivelevels and gridwidth/gridheight is defined as arrays in the Slider Settings !
</div>';

$GLOBALS['TL_LANG']['XPL']['cfg_slider_revolution.layer_fontweight'] = '
<div style="padding:20px;">
Set this only if you wish to have different Font Weight on different Devices.<br><br>
Must be defined as an Array for Advanced Responsive Levels to set different values on Desktop,Notebook,Tablet and Mobile Devices.<br><br>
“400,500,600,300” to set the Font Weight of the Layer to 400 on Desktop, 500 on Notebook, 600 on Tablet, and 300 on Mobile.<br><br>
Note!! Only works if responsivelevels and gridwidth/gridheight is defined as arrays in the Slider Settings !
</div>';

$GLOBALS['TL_LANG']['XPL']['cfg_slider_revolution.layer_color'] = '
<div style="padding:20px;">
Set this only if you wish to have different Colors on different Devices.<br><br>
Must be defined as an Array for Advanced Responsive Levels to set different values on Desktop,Notebook,Tablet and Mobile Devices.<br><br>
“rgba(255,255,255,0.1),#ff0000,rgb(100,100,100),#00ff00” to set the color of the Layer to Red with Opacity 0.1 on Desktop, red on Notebook, gray on Tablet, and green on Mobile.<br><br>
Note!! Only works if responsivelevels and gridwidth/gridheight is defined as arrays in the Slider Settings !
</div>';

$GLOBALS['TL_LANG']['XPL']['cfg_slider_revolution.layer_ww'] = '
<div style="padding:20px;">
Defines the Width of the image. (can distort and scale the image if dimensions are different than original dimensions).<br><br>
Use Array for Advanced Responsive Levels to set different values on Desktop,Notebook,Tablet and Mobile Devices. i.e.:<br><br>
"302,280,270,300" to set the image width 302px on Desktop, 280px on Notebook, 270px on Tablet and 300px on Mobile again.<br><br>
Note!! Array is only works if responsivelevels and gridwidth/gridheight is defined as arrays in the Slider Settings !
</div>';

$GLOBALS['TL_LANG']['XPL']['cfg_slider_revolution.layer_hh'] = '
<div style="padding:20px;">
Defines the Height of the image. (can distort and scale the image if dimensions are different than original dimensions).<br><br>
Use Array for Advanced Responsive Levels to set different values on Desktop,Notebook,Tablet and Mobile Devices. i.e.:<br><br>
"302,280,270,300" to set the image height 302px on Desktop, 280px on Notebook, 270px on Tablet and 300px on Mobile again.<br><br>
Note!! Array is only works if responsivelevels and gridwidth/gridheight is defined as arrays in the Slider Settings !
</div>';

$GLOBALS['TL_LANG']['XPL']['cfg_slider_revolution.layer_responsive_offset'] = [
    ['on', 'Offsets are responsive, positions and distances recalculated based on the other settings.'],
    ['off', 'Offsets are fixed on any window size. Used i.e. to add a layer 10px from top left corner, where 10px offset will stay on any window size.'],
];

$GLOBALS['TL_LANG']['XPL']['cfg_slider_revolution.layer_actions'] = '
<div style="padding:20px;">
Defines an Array of Action Objects. Each Action Object can define an exact layer action.  Actions are triggered in the order of the Action Object lists, or based on the Delay attributes.<br><br>
Example:<br><br>
<pre>
{
    "event": "click",
    "action": "simplelink",
    "target": "_blank",
    "url": "http:\/\/www.google.de"
},
{
    "event": "click",
    "action": "jumptoslide",
    "slide": "next",
    "delay": ""
}
</pre><br><br>
For more information please visit the <a href="http://www.themepunch.com/revsliderjquery-doc/layer-actions/" target="_blank" style="text-decoration: underline;">official documentation</a>.
</div>';

$GLOBALS['TL_LANG']['XPL']['cfg_slider_revolution.easing'] = '<div style="padding:20px;">
<strong>Available easings:</strong><br><br>
' . implode('<br>', \Codefog\SliderRevolution\SlideDca::getSliderOptions('easings')) . '
</div>';

$GLOBALS['TL_LANG']['XPL']['cfg_slider_revolution.transform_easing'] = '<div style="padding:20px;">
For some Key you can use special values, random values, % based values.<br><br>
The syntax of Special values:<br><br>
<strong>random</strong>: {min,max}  – it will generate on runtime a random value between min and max value<br><br>
<strong>relative</strong>: [+/- %]  it will calcualte a relative position from the IDLE position.  [-100%] will move -100% in a direction from the idleposition<br><br>
<strong>absolute</strong>: left,right,top,bottom<br><br>
value<strong>(R)</strong> – this is a suffix, and works only with the above defined values. The presetted value will be mirrored if Slide direction changes. Again, it Reverts the Animation when coming slide index is smaller then current slide index.  (R) comes behind the predefined value like  -50(R).   i.e. x:50(R) will  animate the layer from 50px right to the position if next slide comes, and it will animate from -50px (from the left) if previous slide comes.<br><br>
<strong>Available easings:</strong><br><br>
' . implode('<br>', \Codefog\SliderRevolution\SlideDca::getSliderOptions('easings')) . '
</div>';