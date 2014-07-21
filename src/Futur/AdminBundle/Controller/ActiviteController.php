<?php

namespace Futur\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ActiviteController extends Controller
{
		public function activiteAction($id)
	{
		$em = $this->getDoctrine()->getManager();
		$activite = $em->getRepository('FuturSujetBundle:activite')->findAll();

		return $this->render('FuturAdminBundle:Admin:activite/activite.html.twig', array('activite' => $activite));
	}
}
