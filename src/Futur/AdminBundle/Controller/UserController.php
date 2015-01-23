<?php

namespace Futur\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Futur\UserBundle\Entity\token;

class UserController extends Controller
{
		public function userAction($id)
	{
		$em = $this->getDoctrine()->getManager();

		$repository = $this->getDoctrine()
						 	->getManager()
						 	->getRepository('FuturUserBundle:User');

		$user = $repository->findAll();
		$elem = $repository->find($id);
		return $this->render('FuturAdminBundle:Admin:user/user.html.twig',array('user' => $user,
																			 	  'id' => $id,
																		 	   ));
	}


		public function delAction($id)
	{
		$em = $this->getDoctrine()->getManager();
		$user = $em->getRepository('FuturUserBundle:User');

		$elem = $user->find($id);
		if (is_object($elem) != NULL)
		{
			$em->remove($elem);
			$em->flush();
		}
		return $this->redirect($this->generateUrl('admin_user', array('user' => $user)));
	}

		public function tokenAction($id)
		{
			$em = $this->getDoctrine()->getManager();
			$user = $em->getRepository('FuturUserBundle:User');
			$elem = $user->find($id);
			if (is_object($elem) != NULL)
			{
				$token = new token();
				$elem->setToken($token);
				$em->persist($elem);
				$em->flush();
			}

			return $this->redirect($this->generateUrl('admin_user', array('user' => $user,
																		   'id'  => $id
																		  )));
		}
}
