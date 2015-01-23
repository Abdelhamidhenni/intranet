<?php

namespace Futur\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ModuleController extends Controller
{
	public function moduleAction($id)
	{
		$em = $this->getDoctrine()->getManager();
		$module = $em->getRepository('FuturModuleBundle:module')->findAll();

		return $this->render('FuturAdminBundle:Admin:module/module.html.twig', array('module' => $module));
	}
}
