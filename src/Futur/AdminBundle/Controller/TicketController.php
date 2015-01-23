<?php

namespace Futur\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Futur\TicketBundle\Entity\ticket;
use Futur\TicketBundle;

class TicketController extends Controller
{
		public function ticketAction($id)
	{
		$em = $this->getDoctrine()->getManager();

		$repository = $this->getDoctrine()
						 	->getManager()
						 	->getRepository('FuturTicketBundle:Ticket');

		$ticket = $repository->findAll();
		$elem = $repository->find($id);


			foreach ($ticket as $prob)
		{
			if (strcmp($prob->getReponse(), '') == true)
			{
				$prob->setRepondu(true);
			}
			else
			{
				$prob->setRepondu(false);
			}
		}


		if (is_object($elem) == true)
		{
			$elem->setVu(true);
			$em->persist($elem);
			$em->flush();
			$assignation = $elem->getAssignation();
			$reponse = $elem->getReponse();


			$form = $this->createFormBuilder($elem)
					     ->add('assignation', 'text', array('required' => false, 'data' => $assignation))
					     ->add('reponse', 'textarea', array('required' => false, 'data' => $reponse))
					     ->getForm();

			$request = $this->getRequest('request');
		 	 if ($request->getMethod() == 'POST')
			{
				$form->bind($request);
				$elem->setVuuser(false);
				if ($form->isValid())
				{
					$em->persist($elem);
					$em->flush();
				}
			}

						if ($elem != NULL)
			{
				$idauteur = $elem->getIdauteur();
				$qb = $em->createQueryBuilder('a');
				$qb->select('u.username')
				   ->from('FuturUserBundle:User', 'u')
				   ->where("u.id = '$idauteur'");

				$result = $qb->getQuery()
				 			 ->getOneOrNullResult();
				$auteur = $result['username'];
				return $this->render('FuturAdminBundle:Admin:ticket/ticket.html.twig',array('ticket' => $ticket,
																							'id' => $id,
																					      'form' => $form->createView(),
																					      'auteur' => $auteur
																					  	 	));
			}


			return $this->render('FuturAdminBundle:Admin:ticket/ticket.html.twig',array('ticket' => $ticket,
																							'id' => $id,
																					      'form' => $form->createView()
																					   ));
		}
		return $this->render('FuturAdminBundle:Admin:ticket/ticket.html.twig',array('ticket' => $ticket,
																				  		'id' => $id,
																				   ));
	}
}
