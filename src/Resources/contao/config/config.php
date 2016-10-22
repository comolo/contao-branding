<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @package   Branding
 * @author    Hendrik Obermayer, Comolo GmbH
 * @license   proprietary
 * @copyright Comolo GmbH 2016
 */


if (TL_MODE == 'BE') {
	$GLOBALS['TL_CSS'][] = '/bundles/comolocontaobranding/css/backend.css';
}

$GLOBALS['TL_HOOKS']['parseBackendTemplate'][] = array('\Comolo\Contao\BrandingBundle\Module\BrandingManager', 'parseBackendTemplate');
