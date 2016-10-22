<?php
/**
 * This file is part of the ComoloContaoBrandingBundle extension by Comolo.
 *
 * Copyright (C) 2016 Hendrik Obermayer
 *
 * @author    Hendrik Obermayer - Comolo GmbH
 * @copyright 2016 - Hendrik Obermayer - Comolo GmbH
 * @license   LGPL
 */
namespace Comolo\Contao\BrandingBundle\Module;

class BrandingManager
{
	public function parseBackendTemplate($strContent, $strTemplate)
	{
		if ($strTemplate == 'be_login')
        {
			$searchString = '</head>';
            $cssLink = PHP_EOL . '<link rel="stylesheet" href="/bundles/comolocontaobranding/css/login.css">' . PHP_EOL;
            $strContent = str_replace($searchString, $cssLink.$searchString, $strContent);
		}

		return $strContent;
	}
}
