<?php
/**
 * t4c_elements extension for Contao Open Source CMS
 *
 * Copyright (C) 2015 themes4contao
 *
 * @package t4c_elements
 * @author  Themes4Contao <support@themes4contao.com>
 * @license Commercial
 */


/**
 * Content elements
 */
$GLOBALS['TL_CTE']['t4c_elements']['t4c_adipoli_image']		 	= 'themes4contao\ContentAdipoliImage';
$GLOBALS['TL_CTE']['t4c_elements']['t4c_adipoli_gallery']		= 'themes4contao\ContentAdipoliGallery';
$GLOBALS['TL_CTE']['t4c_elements']['t4c_advanced_banner']		= 'themes4contao\ContentAdvancedBanner';
$GLOBALS['TL_CTE']['t4c_elements']['t4c_alert_box']		 		= 'themes4contao\ContentAlertBox';
$GLOBALS['TL_CTE']['t4c_elements']['t4c_blockquote'] 			= 'themes4contao\ContentBlockquote';
$GLOBALS['TL_CTE']['t4c_elements']['t4c_box_wrapper_start']		= 'themes4contao\ContentBoxWrapperStart';
$GLOBALS['TL_CTE']['t4c_elements']['t4c_box_wrapper_stop']		= 'themes4contao\ContentBoxWrapperStop';
$GLOBALS['TL_CTE']['t4c_elements']['t4c_button']		 		= 'themes4contao\ContentButton';
$GLOBALS['TL_CTE']['t4c_elements']['t4c_circle_progress'] 		= 'themes4contao\ContentCircleProgress';
$GLOBALS['TL_CTE']['t4c_elements']['t4c_circular_countdowns']	= 'themes4contao\ContentCircularCountdowns';
$GLOBALS['TL_CTE']['t4c_elements']['t4c_contactinfo']		 	= 'themes4contao\ContentContactInfo';
$GLOBALS['TL_CTE']['t4c_elements']['t4c_counters'] 				= 'themes4contao\ContentCounters';
$GLOBALS['TL_CTE']['t4c_elements']['t4c_custom_list']		 	= 'themes4contao\ContentCustomList';
$GLOBALS['TL_CTE']['t4c_elements']['t4c_dividers']		 		= 'themes4contao\ContentDividers';
$GLOBALS['TL_CTE']['t4c_elements']['t4c_flip_box']		 		= 'themes4contao\ContentFlipBox';
$GLOBALS['TL_CTE']['t4c_elements']['t4c_flip_clock']		 	= 'themes4contao\ContentFlipClock';
$GLOBALS['TL_CTE']['t4c_elements']['t4c_google_trends']		 	= 'themes4contao\ContentGoogleTrends';
$GLOBALS['TL_CTE']['t4c_elements']['t4c_icon']		 			= 'themes4contao\ContentIcon';
$GLOBALS['TL_CTE']['t4c_elements']['t4c_icon_box'] 				= 'themes4contao\ContentIconBox';
$GLOBALS['TL_CTE']['t4c_elements']['t4c_icons_list']		 	= 'themes4contao\ContentIconsList';
$GLOBALS['TL_CTE']['t4c_elements']['t4c_intense_images']		= 'themes4contao\ContentIntenseImages';
$GLOBALS['TL_CTE']['t4c_elements']['t4c_light_gallery'] 		= 'themes4contao\ContentLightGallery';
$GLOBALS['TL_CTE']['t4c_elements']['t4c_notification']		 	= 'themes4contao\ContentNotification';
$GLOBALS['TL_CTE']['t4c_elements']['t4c_promo_box']		 		= 'themes4contao\ContentPromoBox';
$GLOBALS['TL_CTE']['t4c_elements']['t4c_quick_facts']		 	= 'themes4contao\ContentQuickFacts';
$GLOBALS['TL_CTE']['t4c_elements']['t4c_team']					= 'themes4contao\ContentTeam';
$GLOBALS['TL_CTE']['t4c_elements']['t4c_social_icons']		 	= 'themes4contao\ContentSocialIcons';



/**
 * Wrapper elements
 */
$GLOBALS['TL_WRAPPERS']['start'][] 								= 't4c_box_wrapper_start';
$GLOBALS['TL_WRAPPERS']['stop'][] 								= 't4c_box_wrapper_stop';

/**
 * CSS
 */
if (TL_MODE == 'BE'){
	$GLOBALS['BE_MOD']['content']['article']['stylesheet'][]  = 'system/modules/t4c_elements/assets/css/elements.css';
}
