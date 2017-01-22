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


/**
 * Load tl_content data container
 */
$this->loadDataContainer('tl_content');
\System::loadLanguageFile('tl_content');

/**
 * Add the global callbacks
 */
$GLOBALS['TL_DCA']['tl_form_field']['config']['onsubmit_callback'][] 		= array('tl_form_field_t4c_columns', 'createColumnElements');
$GLOBALS['TL_DCA']['tl_form_field']['config']['onsubmit_callback'][] 		= array('tl_form_field_t4c_columns', 'setSortingValue');
$GLOBALS['TL_DCA']['tl_form_field']['config']['ondelete_callback'][]		= array('tl_form_field_t4c_columns', 'deleteColumnElements');


/**
 * Add palettes to tl_form_field
 */
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['t4c_column_wrapper_start'] = '{type_legend},type;{template_legend},t4c_column_config, t4c_column_no_padding;{expert_legend:hide},class';
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['t4c_column_wrapper_stop']  = '{type_legend},type;';
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['t4c_column_start']         = '{type_legend},type,t4c_column_width;{t4c_large_legend:hide},t4c_column_large_width,t4c_column_large_offset,t4c_column_large_hide;{t4c_medium_legend:hide},t4c_column_medium_width,t4c_column_medium_offset,t4c_column_medium_hide;{t4c_small_legend:hide},t4c_column_small_offset,t4c_column_small_hide;{t4c_xsmall_legend:hide},t4c_column_xsmall_width,t4c_column_xsmall_offset,t4c_column_xsmall_hide;{design_options_legend:hide},t4c_column_font_color,t4c_column_background_color,t4c_column_background_image,t4c_column_background_image_settings,t4c_column_background_image_position,t4c_column_margin,t4c_column_padding,t4c_column_border,t4c_column_border_color,t4c_column_border_style;{expert_legend:hide},class';
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['t4c_column_stop']          = '{type_legend},type;';

/**
 * Add fields to tl_form_field
 */

$GLOBALS['TL_DCA']['tl_form_field']['fields']['t4c_column_width'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['t4c_column_width'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('1','2','3','4','5','6','7','8','9','10','11','12'),
	'reference'               => &$GLOBALS['TL_LANG']['tl_form_field']['ref_t4c_column_width'],
	'save_callback' 	  	  => array(array('tl_form_field_t4c_columns', 'setNewWidth')),
    'eval'                    => array('tl_class'=>'w50',),
    'sql'                     => "varchar(16) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['t4c_column_no_padding'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['t4c_column_no_padding'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50 clr'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['t4c_column_large_offset'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['t4c_column_large_offset'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('inherit','no','1','2','3','4','5','6','7','8','9','10','11','12'),
	'reference'               => &$GLOBALS['TL_LANG']['tl_form_field']['ref_t4c_column_width'],
    'eval'                    => array('tl_class'=>'w50',),
    'sql'                     => "varchar(16) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['t4c_column_large_width'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['t4c_column_large_width'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('inherit','1','2','3','4','5','6','7','8','9','10','11','12'),
	'reference'               => &$GLOBALS['TL_LANG']['tl_form_field']['ref_t4c_column_width'],
    'eval'                    => array('tl_class'=>'w50',),
    'sql'                     => "varchar(16) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['t4c_column_large_hide'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['t4c_column_large_hide'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50 clr'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['t4c_column_medium_offset'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['t4c_column_medium_offset'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('inherit','no','1','2','3','4','5','6','7','8','9','10','11','12'),
	'reference'               => &$GLOBALS['TL_LANG']['tl_form_field']['ref_t4c_column_width'],
    'eval'                    => array('tl_class'=>'w50',),
    'sql'                     => "varchar(16) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['t4c_column_medium_width'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['t4c_column_medium_width'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('inherit','1','2','3','4','5','6','7','8','9','10','11','12'),
	'reference'               => &$GLOBALS['TL_LANG']['tl_form_field']['ref_t4c_column_width'],
    'eval'                    => array('tl_class'=>'w50',),
    'sql'                     => "varchar(16) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['t4c_column_medium_hide'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['t4c_column_medium_hide'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50 clr'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['t4c_column_small_offset'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['t4c_column_small_offset'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('inherit','no','1','2','3','4','5','6','7','8','9','10','11','12'),
	'reference'               => &$GLOBALS['TL_LANG']['tl_form_field']['ref_t4c_column_width'],
    'eval'                    => array('tl_class'=>'w50',),
    'sql'                     => "varchar(16) NOT NULL default ''"
);


$GLOBALS['TL_DCA']['tl_form_field']['fields']['t4c_column_small_hide'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['t4c_column_small_hide'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50 clr'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['t4c_column_config'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['t4c_column_config'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('mandatory'=>true, 'maxlength'=>32, 'tl_class'=>'clr'),
    'sql'                     => "varchar(32) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['t4c_column_xsmall_offset'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['t4c_column_xsmall_offset'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('no','1','2','3','4','5','6','7','8','9','10','11','12'),
	'reference'               => &$GLOBALS['TL_LANG']['tl_form_field']['ref_t4c_column_width'],
    'eval'                    => array('tl_class'=>'w50',),
    'sql'                     => "varchar(16) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['t4c_column_xsmall_width'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['t4c_column_xsmall_width'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('1','2','3','4','5','6','7','8','9','10','11','12'),
	'reference'               => &$GLOBALS['TL_LANG']['tl_form_field']['ref_t4c_column_width'],
    'eval'                    => array('tl_class'=>'w50', 'includeBlankOption'=>true),
    'sql'                     => "varchar(16) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['t4c_column_xsmall_hide'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['t4c_column_xsmall_hide'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50 clr'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['t4c_column_font_color'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['t4c_column_font_color'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['t4c_column_background_color'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['t4c_column_background_color'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['t4c_column_border_color'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['t4c_column_border_color'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['t4c_column_background_image'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['t4c_column_background_image'],
    'exclude'                 => true,
    'inputType'               => 'fileTree',
    'eval'                    => array('filesOnly'=>true, 'fieldType'=>'radio', 'extensions'=>$GLOBALS['TL_CONFIG']['validImageTypes'], 'tl_class'=>'clr'),
    'sql'                     => "binary(16) NULL"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['t4c_column_background_image_settings'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['t4c_column_background_image_settings'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('', 'cover', 'contain', 'repeat', 'repeat-x', 'repeat-y', 'no-repeat'),
    'reference'               => &$GLOBALS['TL_LANG']['tl_form_field']['ref_t4c_column_background_image_settings'],
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "varchar(10) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['t4c_column_background_image_position'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['t4c_column_background_image_position'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('', 'Center Center', 'Left Top', 'Right Top', 'Left Bottom', 'Right Bottom', 'Left Center', 'Right Center', 'Center Top', 'Center Bottom'),
    'reference'               => &$GLOBALS['TL_LANG']['tl_form_field']['ref_t4c_column_background_image_position'],
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "varchar(16) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['t4c_column_margin'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['t4c_column_margin'],
	'exclude'                 => true,
   'inputType'               => 'trbl',
    'options'                 => $GLOBALS['TL_CSS_UNITS'],
    'eval'                    => array('includeBlankOption'=>true, 'rgxp'=>'digit_auto_inherit', 'tl_class'=>'w50'),
    'sql'                     => "varchar(128) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['t4c_column_padding'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['t4c_column_padding'],
	'exclude'                 => true,
   'inputType'               => 'trbl',
    'options'                 => $GLOBALS['TL_CSS_UNITS'],
    'eval'                    => array('includeBlankOption'=>true, 'rgxp'=>'digit_auto_inherit', 'tl_class'=>'w50'),
    'sql'                     => "varchar(128) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['t4c_column_border'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['t4c_column_border'],
	'exclude'                 => true,
   'inputType'               => 'trbl',
    'options'                 => $GLOBALS['TL_CSS_UNITS'],
    'eval'                    => array('includeBlankOption'=>true, 'rgxp'=>'digit_auto_inherit', 'tl_class'=>'w50'),
    'sql'                     => "varchar(128) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['t4c_column_border_style'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['t4c_column_border_style'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('solid','dotted','dashed','double','groove','ridge'),
    'eval'                    => array('tl_class'=>'w50', 'includeBlankOption'=>true),
    'sql'                     => "varchar(6) NOT NULL default ''"
);


/**
 * Class tl_form_field_t4c_columns
 *
 * Provide miscellaneous methods that are used by the data configuration array.
 */
class tl_form_field_t4c_columns extends Backend {

	/**
	 * Find the row that contains this column
	 * @param array
	 * @param string
	 */	
	public function findRow($a, $search_key) {
		foreach ($a as $key => $value) {
			if($value['columns'][$search_key]){
				return $key; 
			}
		}
		return;
	}

	/**
     * Set a new width of columns
	 * @param $varValue
     * @param DataContainer
     */
	public function setNewWidth($varValue, DataContainer $dc){
		$grid = $this->getGridStructure($dc);
		$row = $this->findRow($grid,$dc->activeRecord->id);		
		
		$this->Database->prepare("UPDATE tl_form_field SET t4c_column_width=? WHERE id=?")
					   ->execute($varValue,$dc->activeRecord->id);
		
		$arrIDs = array();
		foreach ($grid[$row]['columns'] as $item){
			$arrIDs[] = $item['start_id'];
		}
		
		$objColumns = $this->Database->prepare("SELECT * FROM tl_form_field WHERE id IN(" . implode(',', array_map('intval', $arrIDs)) . ")")
									 ->execute();
		
		$arrColumns = array();
		while($objColumns->next()){
			$arrColumns[] = $objColumns->t4c_column_width;
		}
				
		$columnConfig = implode("-", $arrColumns);
		$this->Database->prepare("UPDATE tl_form_field SET t4c_column_config=? WHERE id=?")
					   ->execute($columnConfig, $row);

		return $varValue;		  		
	}
	
	/**
     * Remove the row and columns
     * @param DataContainer
     */
	public function deleteColumnElements(DataContainer $dc){
		$grid = $this->getGridStructure($dc);
		$arrIDs[] = $dc->activeRecord->id;
		$arrIDs[] = $grid[$dc->activeRecord->id]['end_id'];
		
		foreach($grid[$dc->activeRecord->id]['columns'] as $item){
			$arrIDs[] = $item['start_id'];
			$arrIDs[] = $item['end_id'];
		}
		
		$this->Database->prepare("DELETE FROM tl_form_field WHERE id IN(" . implode(',', array_map('intval', $arrIDs)) . ")")
					   ->execute();
	}	
	
    /**
     * Create the structure of rows and columns
     * @param DataContainer
     */
    public function getGridStructure(DataContainer $dc){
		// Grid array
		$objElements = $this->Database->prepare("SELECT * FROM tl_form_field WHERE pid=? ORDER BY sorting")
                                      ->execute($dc->activeRecord->pid);
		$grid = array();
		$rowList = array();
		$columnList = array();
		$lastElementType = '';
		$lastElementID = '';
		
		while ($objElements->next()){
		
			switch ($objElements->type){
				case 't4c_column_wrapper_start':
					if( $objElements->t4c_column_config){
						$grid[$objElements->id] = array(
							'start_id' => $objElements->id,
							'start_sorting' => $objElements->sorting
						);
						$rowList[] = $objElements->id;
					}
					$lastElementType = $objElements->type;
					$lastElementID =  $objElements->id;
				break;
				
				case 't4c_column_start':
					$lastRow = end($rowList);
					$grid[$lastRow]['columns'][$objElements->id] =  array(
						'parent_id' => $lastRow,
						'start_id' =>  $objElements->id,
						'start_sorting' =>  $objElements->sorting
					);
					$columnList[] = $objElements->id;
					$lastElementType = $objElements->type;
					$lastElementID =  $objElements->id;
				break;
				
				case 't4c_column_stop':
					if ($lastElementType == 't4c_column_wrapper_start'){
						array_pop($rowList);
					} else {
						$lastRow = end($rowList);
						$closeColumn = end($columnList);
					
						$grid[$lastRow]['columns'][$closeColumn]['end_id'] = $objElements->id;
						$grid[$lastRow]['columns'][$closeColumn]['end_sorting'] = $objElements->sorting;
						array_pop($columnList);
					}
					$lastElementType = $objElements->type;
					$lastElementID =  $objElements->id;
				break;
				
				case 't4c_column_wrapper_stop':
					$closeRow = end($rowList);
					$grid[$closeRow]['end_id'] = $objElements->id;
					$grid[$closeRow]['end_sorting'] = $objElements->sorting;
					array_pop($rowList);
					$lastElementType = $objElements->type;
					$lastElementID =  $objElements->id;
				break;
			}
		
		}
		
		return $grid;
	}
    
	
	/**
     * Auto create column elements if there are none
     * @param DataContainer
     */
    public function createColumnElements(DataContainer $dc)
    {
        if ($dc->activeRecord->type != 't4c_column_wrapper_start')
        {
            return;
        }
		
		$arrColumns = \Columns::convertStringToArray($dc->activeRecord->t4c_column_config);

        if (empty($arrColumns))
        {
            return;
        }
		
		$arrColumns = \Columns::convertStringToArray($dc->activeRecord->t4c_column_config);

        if (empty($arrColumns))
        {
            return;
        }
		
		// Grid Structure
		$grid = $this->getGridStructure($dc);
						
		$objElements = $this->Database->prepare("SELECT * FROM tl_form_field WHERE pid=? AND sorting>?")
                                      ->execute($dc->activeRecord->pid, $dc->activeRecord->sorting);
		
        $arrSet = array
        (
            'tstamp' => time(),
            'pid' => $dc->activeRecord->pid,
            'sorting' => $dc->activeRecord->sorting
        );
		
		
		// Check if column already exist
		$ColumnsCount = count($grid[$dc->activeRecord->id]['columns']);
		
		if ($ColumnsCount > 0){
			if ($ColumnsCount == count($arrColumns)){
				$i=0;
				foreach ($grid[$dc->activeRecord->id]['columns'] as $column){
					$this->Database->prepare("UPDATE tl_form_field SET t4c_column_width=? WHERE id=?")
								   ->execute($arrColumns[$i],$column['start_id']);
					$i++;
				}
			} elseif ($ColumnsCount < count($arrColumns)){
				
				// Find last column
				$lastColumn = end($grid[$dc->activeRecord->id]['columns']);
				$arrSet['sorting'] = $lastColumn['end_sorting'];
				$objElements = $this->Database->prepare("SELECT * FROM tl_form_field WHERE pid=? AND sorting>?")
                                      		  ->execute($dc->activeRecord->pid, $lastColumn['end_sorting']);				
				
				$newColCount = '';
				$col = array_values($grid[$dc->activeRecord->id]['columns']);
				foreach ($arrColumns as $i => $intColumn)
        		{
					if ($i < $ColumnsCount){
						//Updating the width of the existing columns
						$this->Database->prepare("UPDATE tl_form_field SET t4c_column_width=? WHERE id=?")
						 			   ->execute($arrColumns[$i],$col[$i]['start_id']);						
					} else {
						// Create column start
						$arrSet['type'] = 't4c_column_start';
						$arrSet['sorting'] = $arrSet['sorting'] + 128;
						$arrSet['t4c_column_width'] = $intColumn;
						$this->Database->prepare("INSERT INTO tl_form_field %s")->set($arrSet)
									   ->execute();
									   			
						// Create column stop
						$arrSet['type'] = 't4c_column_stop';
						$arrSet['sorting'] = $arrSet['sorting'] + 128;
						$this->Database->prepare("INSERT INTO tl_form_field %s")->set($arrSet)
									   ->execute();						
						$newColCount ++;
					}
		        }
				
				if ($objElements->count()>0)
				{
					$sortingUpdate = ($newColCount*2) * 128;
					$newSorting = '';
					
					while ($objElements->next()){
						$newSorting = $objElements->sorting + $sortingUpdate;
						$this->Database->prepare("UPDATE tl_form_field SET sorting=? WHERE id=?")
									   ->execute($newSorting,$objElements->id);
					}
				}
				
			} elseif ($ColumnsCount > count($arrColumns)){
											
				$arrIDs = array();
				$i=0;
				foreach ($grid[$dc->activeRecord->id]['columns'] as $element){
					
					if ($i < count($arrColumns)){
						$this->Database->prepare("UPDATE tl_form_field SET t4c_column_width=? WHERE id=?")
									   ->execute($arrColumns[$i],$element['start_id']);
					} elseif ($i >= count($arrColumns)){
						$arrIDs[] = $element['start_id'];
						$arrIDs[] = $element['end_id'];						
					}
					if ($i == count($arrColumns)-1){
						$this->Database->prepare("UPDATE tl_form_field SET sorting=? WHERE id=?")
									   ->execute($grid[$dc->activeRecord->id]['end_sorting']-128,$element['end_id']);	
					}
					
					$i++;
				}
				$this->Database->prepare("DELETE FROM tl_form_field WHERE id IN(" . implode(',', array_map('intval', $arrIDs)) . ")")
							   ->execute();	
			}
		} else {
			
			// Create a new columns
			foreach ($arrColumns as $i => $intColumn)
			{
			
				// Create column start
				$arrSet['type'] = 't4c_column_start';
				$arrSet['sorting'] = $arrSet['sorting'] + 128;
				$arrSet['t4c_column_width'] = $intColumn;
				$this->Database->prepare("INSERT INTO tl_form_field %s")->set($arrSet)
							   ->execute();
	
				// Set the sorting of the new element so it will appear
				// after the first column and not the wrapper start
				if (isset($_POST['saveNcreate']) && $i == 0)
				{
					$_SESSION['T4C_COLUMNS_CE_SORTING'] = $arrSet['sorting'] + 128;
					$arrSet['sorting'] = $_SESSION['T4C_COLUMNS_CE_SORTING'];
				}
	
				// Create column stop
				$arrSet['type'] = 't4c_column_stop';
				$arrSet['sorting'] = $arrSet['sorting'] + 128;
				$this->Database->prepare("INSERT INTO tl_form_field %s")->set($arrSet)
							   ->execute();
			}
	
			$arrSet['type'] = 't4c_column_wrapper_stop';
			$arrSet['sorting'] = $arrSet['sorting'] + 128;
	
			// Create the wrapper stop element
			$this->Database->prepare("INSERT INTO tl_form_field %s")->set($arrSet)
						   ->execute();
			
			// Update sorting of items
			if ($objElements->count()>0)
			{
				$sortingUpdate = ((count($arrColumns)*2) + 2) * 128;
				$newSorting = '';
				
				while ($objElements->next()){
					$newSorting = $objElements->sorting + $sortingUpdate;
					$this->Database->prepare("UPDATE tl_form_field SET sorting=? WHERE id=?")
								   ->execute($newSorting,$objElements->id);
				}
			}		
		}		
    }


    /**
     * Set the correct sorting value if the new record is immediately created after wrapper save
     * @param \DataContainer
     */
    public function setSortingValue(\DataContainer $dc)
    {
        if (!$_SESSION['T4C_COLUMNS_CE_SORTING'] || $dc->activeRecord->type == 't4c_column_wrapper_start')
        {
            return;
        }

        $this->Database->prepare("UPDATE tl_form_field SET sorting=? WHERE id=?")
                       ->execute($_SESSION['T4C_COLUMNS_CE_SORTING'], $dc->id);

        // Unset the value
        unset($_SESSION['T4C_COLUMNS_CE_SORTING']);
    }

}
