<?php

namespace Futur\TicketBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Futur\TicketBundle\Entity\Ticket;
use Futur\TicketBundle\Form\TicketType;

class TicketController extends Controller
{
       public function indexAction($id)
    {
        $em = $this->getDoctrine()->getManager();
    	$repository = $this->getDoctrine()
    					   ->getManager()
    					   ->getRepository('FuturTicketBundle:Ticket');
    	$ticket = $repository->findAll();
        $ticket_elem = $repository->find($id);

        if (false === $this->get('security.context')->isGranted('ROLE_USER'))
        {
            return $this->redirect($this->generateUrl('fos_user_security_login'));
        }

        $iduser = $this->getUser()->getId();
        if ($ticket_elem != NULL)
        {
            $ticket_elem->setVuuser(true);
            $em->persist($ticket_elem);
            $em->flush();
        }
    	return $this->render('FuturTicketBundle:Ticket:index.html.twig', array('ticket' => $ticket,
                                                                                'id'    => $ticket_elem,
                                                                               'iduser' => $iduser
                                                                               ));
    }

        public function statutAction(Ticket $ticket)
    {
        if ($ticket->getStatut() == true)
        {
            $ticket->setStatut(false);
        }
        else
        {
            $ticket->setStatut(true);
        }
        $em = $this->getDoctrine()->getManager();
        $em->persist($ticket);
        $em->flush();

        return ($this->redirect($this->generateUrl('ticket_homepage', array('id' => $ticket->getId()))));
    }

        public function nouveauAction()
    {
   	    $ticket = new Ticket();
    	$form = $this->createForm(new TicketType(), $ticket);
    	$request = $this->getRequest('request');
    	$em = $this->getDoctrine()->getManager();

    	if ($request->getMethod() == 'POST')
    	{
    		$form->bind($request);
    		if ($form->isValid())
    		{
    			$ticket->setIdauteur($this->getUser()->getId());
    			$em->persist($ticket);
    			$em->flush();
    			return $this->redirect($this->generateUrl('ticket_homepage'));
    		}
    	}
    	return $this->render('FuturTicketBundle:Ticket:ticket_new.html.twig', array('form' => $form->createView()));
    }
        public function supprimerAction(Ticket $ticket)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($ticket);
        $em->flush();
        return $this->redirect($this->generateUrl('ticket_homepage'));
    }
        public function modifierAction(Ticket $ticket)
    {
        $form = $this->createForm(new TicketType(), $ticket);
        $request = $this->getRequest('request');
        $em = $this->getDoctrine()->getManager();

        $old = $ticket->getProbleme();

        if ($request->getMethod() == 'POST')
        {
            $form->bind($request);
            if ($form->isValid())
            {
                if (strcmp($old, $ticket->getProbleme()))
                {
                    $ticket->setVu(false);
                }
                $em->persist($ticket);
                $em->flush();
                return $this->redirect($this->generateUrl('ticket_homepage'));
            }
        }
        return $this->render('FuturTicketBundle:Ticket:ticket_new.html.twig', array('form' => $form->createView()));
    }


}

