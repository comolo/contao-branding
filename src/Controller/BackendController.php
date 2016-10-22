<?php
namespace Comolo\Contao\BrandingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BackendController extends Controller
{
	public function redirectToContaoAction()
	{
		return $this->redirectToRoute('contao_backend_redirect', [], 301);
	}
}
