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
if (class_exists('Contao\System')) {
    $container = \Contao\System::getContainer();
    if ($container && $container->has('request_stack')) {
        $request = $container->get('request_stack')->getCurrentRequest();
        if ($request && $request->get('_scope') === 'backend') {
            $GLOBALS['TL_CSS'][] = '/bundles/comolocontaobranding/css/backend.css';
        }
    }
}
