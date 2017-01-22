<?php

/**
 * t4c_columns extension for Contao Open Source CMS
 *
 * Copyright (C) 2014 themes4contao
 *
 * @package t4c_columns
 * @author  Themes4Contao <support@themes4contao.com>
 * @license Commercial
 */

namespace themes4contao;

/**
 * Class ContentColumnStart
 *
 * Front end content element "column" (start).
 */
class ContentColumnStart extends \ContentElement
{

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'ce_t4c_column_start';


    /**
     * Generate the content element
     */
    protected function compile()
    {
        $intCurrent = $GLOBALS['T4C_COLUMN_WRAPPER']['CTE']['current'];
        $intCurrent = isset($GLOBALS['T4C_COLUMN_WRAPPER']['CTE']['columns'][$intCurrent]) ? $intCurrent : null;

        if (TL_MODE == 'BE')
        {
            $this->strTemplate = 'be_wildcard';
            $this->Template = new \BackendTemplate($this->strTemplate);
			$this->Template->title = '<span class="invisible t4c_column_start"></span><span style="opacity: 0.6;">Large width: ' . $this->t4c_column_large_width . ' | Medium width: ' . $this->t4c_column_medium_width . ' |</span> Small width: ' . $this->t4c_column_width ;
			if ($this->t4c_column_xsmall_width){
				$this->Template->title .=  '<span style="opacity: 0.6;">| Extra small width: ' . $this->t4c_column_xsmall_width . '</span>';
			}
		
        }
		
		//Column width
		$columnWidth = '';
		
		if ($this->t4c_column_xsmall_width){
			$columnWidth .= 'col-xs-'.$this->t4c_column_xsmall_width;
		}
		
		$columnWidth .= ' col-sm-'.$this->t4c_column_width;
		
		if ($this->t4c_column_medium_width && $this->t4c_column_medium_width != 'inherit'){
			$columnWidth .= ' col-md-'.$this->t4c_column_medium_width;
		}
		
		if ($this->t4c_column_large_width && $this->t4c_column_large_width != 'inherit'){
			$columnWidth .= ' col-lg-'.$this->t4c_column_large_width;
		}
		
		$this->Template->columnWidth = $columnWidth;
		
		//Column offset
		$columnOffset = '';
		if ($this->t4c_column_xsmall_offset && $this->t4c_column_xsmall_offset != 'no' && $this->t4c_column_xsmall_offset != 'inherit'){
			$columnOffset .= 'col-xs-offset-'.$this->t4c_column_xsmall_offset;
		}
		
		if ($this->t4c_column_small_offset && $this->t4c_column_small_offset != 'no' && $this->t4c_column_small_offset != 'inherit'){
			$columnOffset .= ' col-sm-offset-'.$this->t4c_column_small_offset;
		}
		
		if ($this->t4c_column_medium_offset && $this->t4c_column_medium_offset != 'no' && $this->t4c_column_medium_offset != 'inherit'){
			$columnOffset .= ' col-md-offset-'.$this->t4c_column_medium_offset;
		}
		
		if ($this->t4c_column_large_offset && $this->t4c_column_large_offset != 'no' && $this->t4c_column_large_offset != 'inherit'){
			$columnOffset .= ' col-lg-offset-'.$this->t4c_column_large_offset;
		}
		
		$this->Template->columnOffset = $columnOffset;
		
		//Hidden
		$columnHidden = '';
		if ($this->t4c_column_xsmall_hide){
			$columnHidden .= 'hidden-xs';
		}
		
		if ($this->t4c_column_small_hide){
			$columnHidden .= ' hidden-sm';
		}
		
		if ($this->t4c_column_medium_hide){
			$columnHidden .= ' hidden-md';
		}
		
		if ($this->t4c_column_large_hide){
			$columnHidden .= ' hidden-lg';
		}
		
		//Design options
		$columnStyle = '';
		
		if ($textColor = \themes4contao\themes4contao::compileColor( $this->t4c_column_font_color )){
			$columnStyle .= 'color:' . $textColor . ';';
		}
		
		if ($bgColor = \themes4contao\themes4contao::compileColor( $this->t4c_column_background_color )){
			$columnStyle .= 'background-color:' . $bgColor . ';';
		}
		
		if ($borderColor = \themes4contao\themes4contao::compileColor( $this->t4c_column_border_color )){
			$columnStyle .= 'border-color:' . $borderColor . ';';
		}
		
		if ($this->t4c_column_background_image){
			$image = \FilesModel::findByPk( $this->t4c_column_background_image );
			$columnStyle .= 'background-image: url(' . $image->path.');';	
		}
		
		if ($margin =  $this->compileTRBL($this->t4c_column_margin, 'margin')){
			$columnStyle .= $margin;	
		}
		
		if ($padding = $this->compileTRBL($this->t4c_column_padding, 'padding')){
			$columnStyle .= $padding;	
		}
		
		if ($border = $this->compileTRBL($this->t4c_column_border, 'border')){
			$columnStyle .= $border;						
		}
		
		if ($this->t4c_column_border_style){
			$columnStyle .= 'border-style:' . $this->t4c_column_border_style . ';';
		}
		
		if ($this->t4c_column_background_image_position){
			$columnStyle .= 'background-position:' . $this->t4c_column_background_image_position . ';';
		}
		
		if ($this->t4c_column_background_image_settings){
			
			if ($this->t4c_column_background_image_settings == 'contain' || $this->t4c_column_background_image_settings == 'cover'){
				$columnStyle .= 'background-size:' . $this->t4c_column_background_image_settings . '; background-repeat: no-repeat;';
			} else {
				$columnStyle .= 'background-repeat:' . $this->t4c_column_background_image_settings . ';';
			}
		}
		
		if ($columnStyle){
			$GLOBALS['T4C_CSS'][] = '#t4c_column_' . $this->id . '{' . $columnStyle . '}';
			
			if ($textColor){
				$GLOBALS['T4C_CSS'][] = '#t4c_column_' . $this->id . ' h1,#t4c_column_' . $this->id . ' h2,#t4c_column_' . $this->id . ' h3,#t4c_column_' . $this->id . ' h4,#t4c_column_' . $this->id . ' h5,#t4c_column_' . $this->id . ' h6,#t4c_column_' . $this->id . ' strong{color:' . $textColor . ';}';
			}
		}
		
		$this->Template->columnHidden = $columnHidden;

    }
	
	protected function compileTRBL($trbl,$type){
		$value = '';
		$trbl = deserialize($trbl);		
		
		if (is_array($trbl))
		{
			foreach ($trbl as $k=>$v)
			{
				if ($v != '' && $k != 'unit')
				{
					if ($type == 'border'){
						$value .= $type . '-' . $k . '-width:' . $v . (($v == 'auto' || $v === '0') ? '' : $trbl['unit']) . ';';
					} else {
						$value .= $type . '-' . $k . ':' . $v . (($v == 'auto' || $v === '0') ? '' : $trbl['unit']) . ';';
					}
					
				}
			}
		}
		return  $value;
	}
}
