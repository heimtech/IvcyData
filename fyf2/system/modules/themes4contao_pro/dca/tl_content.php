<?php

/**
 * themes4contao extension for Contao Open Source CMS
 *
 * Copyright (C) 2014 themes4contao
 *
 * @package themes4contao
 * @author Lukas Manka <support@themes4contao.com>
 * @license Commercial
 */
 
$excludedElements = array('__selector__','default');
 
foreach ($GLOBALS['TL_DCA']['tl_content']['palettes'] as $k => $v) {
	if( !in_array($k, $excludedElements) ){
    	$GLOBALS['TL_DCA']['tl_content']['palettes'][$k] = $v . ';{animation_legend},t4c_elements_animation,t4c_elements_animation_delay,t4c_elements_animation_duration';
	}
}
$GLOBALS['TL_DCA']['tl_content']['fields']['t4c_elements_animation'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['t4c_elements_animation'],
	'default'                 => '',
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'       		  => array(
								'Attention Seekers' => array('bounce','flash','pulse','rubberBand','shake','swing','tada','wobble','jello'),
								'Bouncing Entrances' => array('bounceIn','bounceInDown','bounceInLeft','bounceInRight','bounceInUp'),
								'Bouncing Exits' => array('bounceOut','bounceOutDown','bounceOutLeft','bounceOutRight','bounceOutUp'),
								'Fading Entrances' => array('fadeIn','fadeInDown','fadeInDownBig','fadeInLeft','fadeInLeftBig','fadeInRight','fadeInRightBig','fadeInUp','fadeInUpBig'),
								'Fading Exits' => array('fadeOut','fadeOutDown','fadeOutDownBig','fadeOutLeft','fadeOutLeftBig','fadeOutRight','fadeOutRightBig','fadeOutUp','fadeOutUpBig'),
								'Flippers' => array('flip','flipInX','flipInY','flipOutX','flipOutY'),
								'Lightspeed' => array('lightSpeedIn','lightSpeedOut'),
								'Rotating Entrances' => array('rotateIn','rotateInDownLeft','rotateInDownRight','rotateInUpLeft','rotateInUpRight'),
								'Rotating Exits' => array('rotateOut','rotateOutDownLeft','rotateOutDownRight','rotateOutUpLeft','rotateOutUpRight'),
								'Sliding Entrances' => array('slideInUp','slideInDown','slideInLeft','slideInRight'),
								'Sliding Exits' => array('slideOutUp','slideOutDown','slideOutLeft','slideOutRight'),
								'Zoom Entrances' => array('zoomIn','zoomInDown','zoomInLeft','zoomInRight','zoomInUp'),
								'Zoom Exits' => array('zoomOut','zoomOutDown','zoomOutLeft','zoomOutRight','zoomOutUp'),
								'Specials' => array('hinge','rollIn','rollOut'),
								),
	'eval'                    => array('includeBlankOption' => true, 'chosen' => true),
	'sql'                     => "varchar(24) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['t4c_elements_animation_delay'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['t4c_elements_animation_delay'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'default'				  => '',
	'eval'                    => array('rgxp'=>'digit', 'tl_class'=>'w50'),
    'sql'                     => "smallint(6) unsigned NOT NULL default '0'"
);
 
$GLOBALS['TL_DCA']['tl_content']['fields']['t4c_elements_animation_duration'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['t4c_elements_animation_duration'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'default'				  => '',
	'eval'                    => array('rgxp'=>'digit', 'tl_class'=>'w50'),
    'sql'                     => "smallint(6) unsigned NOT NULL default '0'"
);

$excludedElements = array('__selector__','default');
foreach ($GLOBALS['TL_DCA']['tl_content']['palettes'] as $k => $v) {
	if( !in_array($k, $excludedElements) ){
    	$GLOBALS['TL_DCA']['tl_content']['palettes'][$k] = str_replace('headline','headline,headline_style', $v);
	}
}

$GLOBALS['TL_DCA']['tl_content']['fields']['headline_style'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['headline_style'],
	'default'                 => 'default',
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'       		  => array('t4c_headline_1','t4c_headline_2','t4c_headline_3','t4c_headline_4','t4c_headline_5','t4c_headline_6','t4c_headline_7','t4c_headline_8','t4c_headline_9'),
	'reference'               => &$GLOBALS['TL_LANG']['tl_article']['ref_t4c_headline_style'],
	'eval'                    => array('includeBlankOption' => true, 'tl_class'=>'w50', 'helpwizard'=>true,),
	'sql'                     => "varchar(24) NOT NULL default ''"
);
 
?>