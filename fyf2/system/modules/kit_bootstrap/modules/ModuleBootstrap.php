<?php 

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2013 Leo Feyer
 *
 * @package     km_bootstrap
 * @copyright   Kuehl Media 2014
 * @author      Matthias Kuehl <http://www.kuehl-media.de>
 * @link        http://www.kuehl-media.de
 * @license     http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Run in a custom namespace, so the class can be replaced
 */
namespace KuehlMedia\Bootstrap;


/**
 * Class ModuleBootstrap
 *
 * @copyright   Matthias Kuehl 2014
 * @author      Matthias Kuehl <http://www.matthias-kuehl.com>
 * @package     km_bootstrap
 */
class ModuleBootstrap extends \Frontend { 
    /**
     * Bootstrap Version
     * @var string
     * @since v.1.0.0
     */
    protected $version = '3.3.4';
       
    
    /**
     * Adds Bootstrap to your page
     * @since v.1.0.0
     */
    public function addBootstrap($objPage, $objLayout, $objPageRegular) {
        $blnXhtml = ($objPage->outputFormat == 'xhtml');
        $protocol = \Environment::get('ssl') ? 'https://' : 'http://'; 
        $baseurl = trim($objPage->staticFiles, "/");
        if ($baseurl == '') {
            $baseurl = trim($this->Environment->base, "/");
        }
        
        if ($objLayout->addBootstrap) {      
            //include js 
            if ($objLayout->bootstrap_source_js != 'none') {               
                if ($objLayout->bootstrap_source_js == 'local') {
 		    $source = $baseurl . '/system/modules/km_bootstrap/assets/js/bootstrap.min.js';
                } else {               
                    $source = $protocol.'netdna.bootstrapcdn.com/bootstrap/'.$this->version.'/js/bootstrap.min.js'; 
                }
                $objPageRegular->Template->mooScripts .= '<script' . ($blnXhtml ? ' type="text/javascript"' : '') . ' src="'.$source.'"></script>' . "\n";

                if ($objLayout->bootstrap_source_js == 'fb') {
                    if ($blnXhtml) {
                        $objPageRegular->Template->mooScripts .= '<script type="text/javascript">' . "\n/* <![CDATA[ */\n" . '$.fn.modal || document.write(\'<script src="'.$baseurl.'/system/modules/km_bootstrap/assets/js/bootstrap.min.js">\x3C/script>\')' . "\n/* ]]> */\n" . '</script>' . "\n";
                    } else {
                        $objPageRegular->Template->mooScripts .= '<script>$.fn.modal || document.write(\'<script src="'.$baseurl.'/system/modules/km_bootstrap/assets/js/bootstrap.min.js">\x3C/script>\')</script>' . "\n";
                    }
                } 
            }

            //include css
            if ($objLayout->bootstrap_source_css != 'none') {
                if ($objLayout->bootstrap_source_css == 'local') {
                    $source = $baseurl.'/system/modules/km_bootstrap/assets/css/bootstrap.min.css'; 
                } else {
                   $source = $protocol.'netdna.bootstrapcdn.com/bootstrap/'.$this->version.'/css/bootstrap.min.css'; 
                }   
                $objPageRegular->Template->framework = '<link' . ($blnXhtml ? ' type="text/css"' : '') .' rel="stylesheet" href="'.$source.'">' . "\n".$objPageRegular->Template->framework;
            }
        }
    }
}