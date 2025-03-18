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

// Add backend CSS only in backend context
if (isset($GLOBALS['objPage']) && $GLOBALS['objPage']->type === 'backend') {
    $GLOBALS['TL_CSS'][] = '/bundles/comolocontaobranding/css/backend.css';
}
