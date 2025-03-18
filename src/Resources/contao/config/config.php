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
$container = $GLOBALS['kernel']?->getContainer();
$request = $container?->get('request_stack')?->getCurrentRequest();
$isBackend = $request?->get('_scope') === 'backend';

if ($container && $request && $isBackend) {
    $GLOBALS['TL_CSS'][] = '/bundles/comolocontaobranding/css/backend.css';
}
