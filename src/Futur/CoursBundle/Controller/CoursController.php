<?php

namespace Futur\CoursBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Futur\SujetBundle\Entity\Activite;
use Futur\CoursBundle\Entity\Cours;
use Futur\CoursBundle\Form\CoursType;

class CoursController extends Controller
{
    public function indexAction()
    {
        $modules = $this->getDoctrine()
                 ->getManager()
                 ->getRepository('FuturModuleBundle:Module')
                 ->findAll();

        $activites = $this->getDoctrine()
                 ->getManager()
                 ->getRepository('FuturSujetBundle:Activite')
                 ->findAll();

        $allcours = $this->getDoctrine()
                 ->getManager()
                 ->getRepository('FuturCoursBundle:Cours')
                 ->findAll();

        return $this->render('FuturCoursBundle:Cours:index.html.twig', array('activites' => $activites,
      'modules' => $modules, 'allcours' => $allcours
	    ));
    }

    public function voirAction(Activite $activite)
  	{
  		$user= $this->getUser();

  		$activites = $this->getDoctrine()
		                 ->getManager()
		                 ->getRepository('FuturSujetBundle:Activite')
		                 ->findAll();

      $allcours = $this->getDoctrine()
                 ->getManager()
                 ->getRepository('FuturCoursBundle:Cours')
                 ->findAll();

        return $this->render('FuturCoursBundle:Cours:infos_cours.html.twig', array('activites' => $activites,
      'activite' => $activite, 'allcours' => $allcours
	    ));
	 }

   public function addAction(Activite $activite)
    {
    $cours = new Cours;
    $allcours = $this->getDoctrine()
                     ->getManager()
                     ->getRepository('FuturCoursBundle:Cours')
                     ->findAll();
    $form = $this->createForm(new CoursType, $cours);

    $request = $this->get('request');
    if ($request->getMethod() == 'POST')
    {
      $form->bind($request);
      if ($form->isValid())
      {
        $cours->setActivite($activite);
        $em = $this->getDoctrine()->getManager();
        $em->persist($cours);
        $em->flush();
        return $this->redirect($this->generateUrl('futur_cours_homepage'));
      }
    }
    return $this->render('FuturCoursBundle:Cours:add_cours.html.twig', array(
    'form' => $form->createView(), 'allcours' => $allcours, 'activite' => $activite));
    }
}
