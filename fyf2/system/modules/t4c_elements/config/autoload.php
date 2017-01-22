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
 * Register the namespace
 */
ClassLoader::addNamespace('themes4contao');


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
    // Content elements
    'themes4contao\ContentAlertBox' 			=> 'system/modules/t4c_elements/elements/ContentAlertBox.php',
	'themes4contao\ContentBlockquote' 			=> 'system/modules/t4c_elements/elements/ContentBlockquote.php',
	'themes4contao\ContentCircleProgress' 		=> 'system/modules/t4c_elements/elements/ContentCircleProgress.php',
	'themes4contao\ContentCounters' 			=> 'system/modules/t4c_elements/elements/ContentCounters.php',
    'themes4contao\ContentIconBox' 				=> 'system/modules/t4c_elements/elements/ContentIconBox.php',
    'themes4contao\ContentLightGallery' 		=> 'system/modules/t4c_elements/elements/ContentLightGallery.php',
	'themes4contao\ContentPromoBox' 			=> 'system/modules/t4c_elements/elements/ContentPromoBox.php',
	'themes4contao\ContentGoogleTrends' 		=> 'system/modules/t4c_elements/elements/ContentGoogleTrends.php',
	'themes4contao\ContentFlipClock' 			=> 'system/modules/t4c_elements/elements/ContentFlipClock.php',
	'themes4contao\ContentDividers' 			=> 'system/modules/t4c_elements/elements/ContentDividers.php',
	'themes4contao\ContentAdipoliImage' 		=> 'system/modules/t4c_elements/elements/ContentAdipoliImage.php',
	'themes4contao\ContentAdipoliGallery' 		=> 'system/modules/t4c_elements/elements/ContentAdipoliGallery.php',
	'themes4contao\ContentAdvancedBanner' 		=> 'system/modules/t4c_elements/elements/ContentAdvancedBanner.php',
	'themes4contao\ContentCircularCountdowns' 	=> 'system/modules/t4c_elements/elements/ContentCircularCountdowns.php',
	'themes4contao\ContentCustomList' 			=> 'system/modules/t4c_elements/elements/ContentCustomList.php',
	'themes4contao\ContentFlipBox' 				=> 'system/modules/t4c_elements/elements/ContentFlipBox.php',
	'themes4contao\ContentIntenseImages' 		=> 'system/modules/t4c_elements/elements/ContentIntenseImages.php',
	'themes4contao\ContentQuickFacts' 			=> 'system/modules/t4c_elements/elements/ContentQuickFacts.php',
	'themes4contao\ContentIconsList' 			=> 'system/modules/t4c_elements/elements/ContentIconsList.php',
	'themes4contao\ContentContactInfo' 			=> 'system/modules/t4c_elements/elements/ContentContactInfo.php',
	'themes4contao\ContentNotification' 		=> 'system/modules/t4c_elements/elements/ContentNotification.php',
	'themes4contao\ContentIcon' 				=> 'system/modules/t4c_elements/elements/ContentIcon.php',
	'themes4contao\ContentButton' 				=> 'system/modules/t4c_elements/elements/ContentButton.php',
	'themes4contao\ContentTeam'					=> 'system/modules/t4c_elements/elements/ContentTeam.php',
	'themes4contao\ContentSocialIcons' 				=> 'system/modules/t4c_elements/elements/ContentSocialIcons.php',
	'themes4contao\ContentBoxWrapperStart'		=> 'system/modules/t4c_elements/elements/ContentBoxWrapperStart.php',
	'themes4contao\ContentBoxWrapperStop'		=> 'system/modules/t4c_elements/elements/ContentBoxWrapperStop.php',

));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
    // Content elements
    'ce_t4c_alert_box'		   					=> 'system/modules/t4c_elements/templates/elements',
	'ce_t4c_blockquote'   						=> 'system/modules/t4c_elements/templates/elements',
	'ce_t4c_circle_progress'   					=> 'system/modules/t4c_elements/templates/elements',
	'ce_t4c_counters'   						=> 'system/modules/t4c_elements/templates/elements',
    'ce_t4c_icon_box'   						=> 'system/modules/t4c_elements/templates/elements',
    'gallery_t4c_lightGallery'   				=> 'system/modules/t4c_elements/templates/elements',
	'gallery_t4c_adipoliGallery'   				=> 'system/modules/t4c_elements/templates/elements',
	'ce_t4c_promo_box'		   					=> 'system/modules/t4c_elements/templates/elements',
	'ce_t4c_google_trends'		   				=> 'system/modules/t4c_elements/templates/elements',
	'ce_t4c_flip_clock'		   					=> 'system/modules/t4c_elements/templates/elements',
	'ce_t4c_dividers'		   					=> 'system/modules/t4c_elements/templates/elements',
	'ce_t4c_adipoli_image'		   				=> 'system/modules/t4c_elements/templates/elements',
	'ce_t4c_advanced_banner'		   			=> 'system/modules/t4c_elements/templates/elements',
	'ce_t4c_circular_countdowns'		   		=> 'system/modules/t4c_elements/templates/elements',
	'ce_t4c_custom_list'		   				=> 'system/modules/t4c_elements/templates/elements',
	'ce_t4c_flip_box'		   					=> 'system/modules/t4c_elements/templates/elements',
	'ce_t4c_intense_images'		   				=> 'system/modules/t4c_elements/templates/elements',
	'ce_t4c_quick_facts'		   				=> 'system/modules/t4c_elements/templates/elements',
	'ce_t4c_icons_list'		   					=> 'system/modules/t4c_elements/templates/elements',
	'ce_t4c_contact_info'	   					=> 'system/modules/t4c_elements/templates/elements',
	'ce_t4c_notification'	   					=> 'system/modules/t4c_elements/templates/elements',
	'ce_t4c_icon'	   							=> 'system/modules/t4c_elements/templates/elements',
	'ce_t4c_button'	   							=> 'system/modules/t4c_elements/templates/elements',
	'ce_t4c_team'				   				=> 'system/modules/t4c_elements/templates/elements',
	'ce_t4c_social_icons'						=> 'system/modules/t4c_elements/templates/elements',
	'ce_t4c_box_wrapper_start'	   				=> 'system/modules/t4c_elements/templates/elements',
	'ce_t4c_box_wrapper_stop'	   				=> 'system/modules/t4c_elements/templates/elements',
));
