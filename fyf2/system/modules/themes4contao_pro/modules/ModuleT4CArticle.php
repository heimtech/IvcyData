<?php

/**
 * themes4contao extension for Contao Open Source CMS
 *
 * Copyright (C) 2014 themes4contao
 *
 * @package themes4contao
 * @author  Kamil Kuzminski <kamil.kuzminski@codefog.pl>
 * @license Commercial
 */

namespace themes4contao;

/**
 * Class ModuleT4CTemplate
 *
 * Front end module "themes4contao template".
 */
class ModuleT4CArticle extends Contao\ModuleArticle
{
	public function compile()
    {
        // Execute the original method
        $buffer = parent::compile();
 
        if (empty($buffer))
        {
            $buffer = 'There are no subpages';
        }
 kjlj
        return 'hh';
    }
}