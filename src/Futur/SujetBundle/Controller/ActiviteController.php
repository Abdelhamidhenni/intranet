<?php

namespace Futur\SujetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Futur\SujetBundle\Entity\Activite;
use Futur\UserBundle\Entity\User;
use Futur\NoteBundle\Entity\Note;
use Futur\SujetBundle\Entity\Groupe;
use Futur\SujetBundle\Form\ActiviteType;
use Futur\SujetBundle\Form\ActiviteEditType;

class ActiviteController extends Controller
{
	public function indexAction()
	{
		$activites = $this->getDoctrine()
		                 ->getManager()
		                 ->getRepository('FuturSujetBundle:Activite')
		                 ->findAll();

		return $this->render('FuturSujetBundle:Activites:allactivites.html.twig', array(
		  'activites' => $activites,
		));
	}

	public function voirAction(Activite $activite)
  	{
  		$user= $this->getUser();
  		date_default_timezone_set('Europe/Paris');
  		$date = date('m/d/Y h:i:s a', time());

        $activites = $this->getDoctrine()
		                 ->getManager()
		                 ->getRepository('FuturSujetBundle:Activite')
		                 ->findAll();

		$groupes = $this->getDoctrine()
		                 ->getManager()
		                 ->getRepository('FuturSujetBundle:Groupe')
		                 ->findAll();


		$inscription = $this->createFormBuilder($user)
  			->add('inscrire', 'submit', array('label'=>'Inscription'))
            ->getForm();

        $desinscription = $this->createFormBuilder($user)
  			->add('desinscrire', 'submit', array('label'=>'Désinscription'))
            ->getForm();

        if ($activite->getDone() == 0)
        {
        	$activite->setDone(1);
        }

        $request = $this->get('request');
		if ($request->getMethod() == 'POST')
		{
			$inscription->bind($request);
			if ($inscription->isValid())
			{
				$group = new Groupe;
				$activite->addInscrit($user);
				$group->addMembre($user);
				$group->setTaille(1);
				$group->setActivite($activite);

				// On ajoutera ici les conditions si le groupe est libre.
				$group->setName("groupe de " . $user->getUsername() . " pour le projet " . $activite->getName());
				$user->addActivite($activite);
				$activite->addGroupe($group);
				$em = $this->getDoctrine()->getManager();
				$em->persist($user);
				$em->persist($group);
				$em->persist($activite);
				$em->flush();
				return $this->render('FuturSujetBundle:Activites:infos_activite.html.twig', array('activites' => $activites,
      'activite' => $activite, 'date' => $date, 'inscription' => $inscription->createView(), 'user' => $user, 'desinscription' => $desinscription->createView(),
	    ));
			}
		}

		if ($request->getMethod() == 'POST')
		{
			$desinscription->bind($request);
			if ($desinscription->isValid())
			{
				$name = "groupe de " . $user->getUsername() . " pour le projet " . $activite->getName();
				$user->removeActivite($activite);
				$activite->removeInscrit($user);
				$em = $this->getDoctrine()->getManager();
				$em->persist($user);
				$em->flush();
				return $this->render('FuturSujetBundle:Activites:infos_activite.html.twig', array('activites' => $activites,
      'activite' => $activite, 'date' => $date, 'inscription' => $inscription->createView(), 'user' => $user, 'desinscription' => $desinscription->createView(),
	    ));
			}
		}

        return $this->render('FuturSujetBundle:Activites:infos_activite.html.twig', array('activites' => $activites,
      'activite' => $activite, 'date' => $date, 'inscription' => $inscription->createView(), 'user' => $user, 'desinscription' => $desinscription->createView(),
	    ));
	 }

	public function addAction()
	{
		$activite = new Activite;
		$activites = $this->getDoctrine()
		             ->getManager()
		             ->getRepository('FuturSujetBundle:Activite')
		             ->findAll();
		$form = $this->createForm(new ActiviteType, $activite);

		$request = $this->get('request');
		if ($request->getMethod() == 'POST')
		{
			$form->bind($request);
			if ($form->isValid())
			{
				if ($activite->getSujet() != NULL)
				{
					$activite->getSujet()->upload();
				}
				$em = $this->getDoctrine()->getManager();
				$em->persist($activite);
				$em->flush();
				$module = $activite->getModule();
				$module->addActivite($activite);
				return $this->redirect($this->generateUrl('futur_activite_infos', array('id' => $activite->id, 'id2' => $activite->module)));
			}
		}
		return $this->render('FuturSujetBundle:Activites:addactivite.html.twig', array(
		'form' => $form->createView(), 'activites' => $activites,));
	}

	public function modifierAction(Activite $activite)
  	{
	    $form = $this->createForm(new ActiviteEditType(), $activite);

	    $request = $this->getRequest();

	    if ($request->getMethod() == 'POST')
	    {
		    $form->bind($request);

		    if ($form->isValid())
		    {
		        $em = $this->getDoctrine()->getManager();
		        $em->persist($activite);
		        $em->flush();
		        $this->get('session')->getFlashBag()->add('info', 'activite bien modifié');
		        return $this->redirect($this->generateUrl('admin_activite', array('id' => $activite->id)));
		    }
	    }
	    return $this->render('FuturSujetBundle:Activites:modif_activite.html.twig', array(
	      'form'    => $form->createView(),
	      'activite' => $activite
	    ));
  	}

	public function supprimerAction(Activite $activite)
	{
		$form = $this->createFormBuilder()->getForm();

		$request = $this->getRequest();
		if ($request->getMethod() == 'POST')
		{
			$form->bind($request);
			if ($form->isValid())
			{
				$em = $this->getDoctrine()->getManager();
				$em->remove($activite);
				$em->flush();
				$this->get('session')->getFlashBag()->add('info', 'activite bien supprimé');
				return $this->redirect($this->generateUrl('admin_activite', array('id' => $activite->id)));
			}
		}
		return $this->render('FuturSujetBundle:Activites:rm_activite.html.twig', array(
		  'activite' => $activite,
		  'form'    => $form->createView()
		));
	}
}
