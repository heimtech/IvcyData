<?php

/**
 * t4c_circle_progress extension for Contao Open Source CMS
 *
 * Copyright (C) 2015 themes4contao
 *
 * @package t4c_circle_progress
 * @author  Themes4Contao <support@themes4contao.com>
 * @license Commercial
 */

namespace themes4contao;

/**
 * Class ContentCircleProgress
 *
 * Front end content element "Circle Progress".
 */
class ContentCircleProgress extends \ContentElement
{

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'ce_t4c_circle_progress';


    /**
     * Generate the content element
     */
    protected function compile()
    {
		
		if (TL_MODE == 'BE')
        {
		   	$GLOBALS['TL_JAVASCRIPT']['t4c_jquery'] = 'assets/jquery/core/' . $GLOBALS['TL_ASSETS']['JQUERY'] . '/jquery.min.js';
			$GLOBALS['TL_JAVASCRIPT']['t4c_jquery_con_confilct'] = 'system/modules/t4c_elements/assets/js/jquery.noconflict.js';
			$GLOBALS['TL_JAVASCRIPT']['t4c_waypoints'] = 'system/modules/t4c_elements/assets/js/jquery.waypoints.min.js';
        }
		
		$GLOBALS['TL_JAVASCRIPT']['t4c_cirlce_progress'] = 'system/modules/t4c_elements/assets/js/circle-progress.js';
		$GLOBALS['TL_JAVASCRIPT']['t4c_cirlce_progress_js'] = 'system/modules/t4c_elements/assets/js/t4c_circle_progress.js';

		if ($empty_fill = \themes4contao\themes4contao::compileColor( $this->t4c_cp_empty_fill )){
			$this->Template->t4c_cp_empty_fill = $empty_fill;
		}
		
		if ($color = \themes4contao\themes4contao::compileColor( $this->t4c_cp_color )){
			$this->Template->t4c_cp_color = $color;
		}
		
		if ($gradient1 = \themes4contao\themes4contao::compileColor( $this->t4c_cp_gradient_1 )){
			$this->Template->t4c_cp_gradient_1 = $gradient1;
		}
		
		if ($gradient2 = \themes4contao\themes4contao::compileColor( $this->t4c_cp_gradient_2 )){
			$this->Template->t4c_cp_gradient_2 = $gradient2;
		}
		
		if ($gradient3 = \themes4contao\themes4contao::compileColor( $this->t4c_cp_gradient_3 )){
			$this->Template->t4c_cp_gradient_3 = $gradient3;
		}
		
		if($this->t4c_cp_image && $this->t4c_cp_fill == 'file'){
			$image = \FilesModel::findById( deserialize($this->t4c_cp_image) );
			$this->Template->t4c_cp_image = $image->path;
		}
		
		if($this->t4c_cp_reverse == 1){
			$this->Template->t4c_cp_reverse = 'true';
		} else {
			$this->Template->t4c_cp_reverse = 'false';
		}
    }
}