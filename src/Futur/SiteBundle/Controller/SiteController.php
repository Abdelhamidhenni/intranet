<?php

namespace Futur\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Futur\ModuleBundle\Entity\Module;

class SiteController extends Controller
{
    public function indexAction()
    {
        $activites = $this->getDoctrine()
                         ->getManager()
                         ->getRepository('FuturSujetBundle:Activite')
                         ->findAll();
    	return $this->render('FuturSiteBundle:Site:index.html.twig', array(
          'activites' => $activites,
        ));
    }

    public function traductionAction($langue)
    {
    	if ((strcmp($langue,"fr_FR") == 0) || (strcmp($langue, "en_US") == 0))
        {
            $this->container->get('session')->setLocale($langue);
        }
        $url = $this->container->get('request')->headers->get('referer');
    	return $this->render('FuturSiteBundle:Site:index.html.twig');
    }
}
