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
namespace Comolo\ContaoBrandingBundle\Module;

use Contao\CoreBundle\Framework\ContaoFramework;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Contao\CoreBundle\Event\BackendTemplateEvent;
use Symfony\Component\HttpKernel\KernelInterface;

class BrandingManager implements EventSubscriberInterface
{
	private ContaoFramework $framework;
	private KernelInterface $kernel;

	public function __construct(ContaoFramework $framework, KernelInterface $kernel)
	{
		$this->framework = $framework;
		$this->kernel = $kernel;
	}

	public static function getSubscribedEvents(): array
	{
		return ['contao.backend_template' => 'onBackendTemplate'];
	}

	public function onBackendTemplate(BackendTemplateEvent $event): void
	{
		$template = $event->getTemplate();
		
		if ($template->getName() === 'be_login') {
			$webDir = $this->kernel->getProjectDir() . '/public';
			$cssLink = PHP_EOL . '<link rel="stylesheet" href="/bundles/comolocontaobranding/css/login.css">' . PHP_EOL;
			
			$content = $event->getContent();
			$content = str_replace('</head>', $cssLink . '</head>', $content);
			$event->setContent($content);
		}
	}
}
