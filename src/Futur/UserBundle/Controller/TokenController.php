<?php

namespace Futur\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class TokenController extends Controller
{
	public function	tokenAction($token)
	{
		if ($token == NULL || $token === 0)
		{
			$activites = $this->getDoctrine()
                         	  ->getManager()
                              ->getRepository('FuturSujetBundle:Activite')
                              ->findAll();
    		return $this->render('FuturSiteBundle:Site:index.html.twig', array('activites' => $activites));
		}
		else
		{
			$em = $this->getDoctrine()->getManager();
			$users = $em->getRepository('FuturUserBundle:User')
                       	->findAll();

            foreach ($users as $elem)
            {
            	if ($elem->getToken() != NULL)
            	{
            		if ($elem->getToken()->getStr() === $token)
            		{
            			echo $elem->getUsername();
            			$elem->getToken()->setStr('');
            			$em->persist($elem);
            			$em->flush();
            		}
            	}
            }
		}
		return $this->render('::debut.html.twig');
	}
}
