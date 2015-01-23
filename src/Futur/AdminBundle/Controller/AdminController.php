<?php

namespace Futur\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class AdminController extends Controller
{
		public function ensembleAction()
	{
		return $this->render('FuturAdminBundle:Admin:vueensemble.html.twig');
	}
}
