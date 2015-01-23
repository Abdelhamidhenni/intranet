<?php

namespace Futur\ModuleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Codeconsortium\ccdnforumbundle\CCDNforum\ForumBundle\Controller\AdminCategoryController;

use Futur\ModuleBundle\Entity\Module;
use Futur\UserBundle\Entity\User;
use Futur\ModuleBundle\Form\ModuleType;
use Futur\ModuleBundle\Form\ModuleEditType;

class ModuleController extends Controller
{
	public function indexAction()
	{
		$modules = $this->getDoctrine()
		                 ->getManager()
		                 ->getRepository('FuturModuleBundle:Module')
		                 ->findAll();


		return $this->render('FuturModuleBundle:Modules:allmodules.html.twig', array(
		  'modules' => $modules,
		));
	}

	public function voirAction(Module $module)
  	{
  		$user= $this->getUser();

  		$activites = $this->getDoctrine()
		                 ->getManager()
		                 ->getRepository('FuturSujetBundle:Activite')
		                 ->findAll();


  		$inscription = $this->createFormBuilder($user)
  			->add('inscrire', 'submit', array('label'=>'Inscription'))
            ->getForm();

        $desinscription = $this->createFormBuilder($user)
  			->add('desinscrire', 'submit', array('label'=>'Désinscription'))
            ->getForm();

        $request = $this->get('request');
		if ($request->getMethod() == 'POST')
		{
			$inscription->bind($request);
			if ($inscription->isValid())
			{
				$user->addModule($module);
				$em = $this->getDoctrine()->getManager();
				$em->persist($user);
				$em->flush();
				return $this->render('FuturModuleBundle:Modules:infos_module.html.twig', array('activites' => $activites,
      'module' => $module, 'inscription' => $inscription->createView(), 'user' => $user, 'desinscription' => $desinscription->createView(),
	    ));
			}
		}

		if ($request->getMethod() == 'POST')
		{
			$desinscription->bind($request);
			if ($desinscription->isValid())
			{
				$user->removeModule($module);
				$em = $this->getDoctrine()->getManager();
				$em->persist($user);
				$em->flush();
				return $this->render('FuturModuleBundle:Modules:infos_module.html.twig', array('activites' => $activites,
      'module' => $module, 'inscription' => $inscription->createView(), 'user' => $user, 'desinscription' => $desinscription->createView(),
	    ));
			}
		}

        return $this->render('FuturModuleBundle:Modules:infos_module.html.twig', array('activites' => $activites,
      'module' => $module, 'inscription' => $inscription->createView(), 'user' => $user, 'desinscription' => $desinscription->createView(),
	    ));
	 }

	public function addAction()
	{
		$module = new Module;
		$modules = $this->getDoctrine()
		             ->getManager()
		             ->getRepository('FuturModuleBundle:Module')
		             ->findAll();
		$form = $this->createForm(new ModuleType, $module);

		$request = $this->get('request');
		if ($request->getMethod() == 'POST')
		{
			$form->bind($request);
			if ($form->isValid())
			{
				$em = $this->getDoctrine()->getManager();
				$em->persist($module);
				$em->flush();
				return $this->redirect($this->generateUrl('futur_module_homepage'));
			}
		}
		return $this->render('FuturModuleBundle:Modules:addmodule.html.twig', array(
		'form' => $form->createView(), 'modules' => $modules,));
	}

	public function modifierAction(Module $module)
  	{
	    $form = $this->createForm(new ModuleEditType(), $module);

	    $request = $this->getRequest();

	    if ($request->getMethod() == 'POST')
	    {
		    $form->bind($request);

		    if ($form->isValid())
		    {
		        $em = $this->getDoctrine()->getManager();
		        $em->persist($module);
		        $em->flush();
		        $this->get('session')->getFlashBag()->add('info', 'module bien modifié');
		        return $this->redirect($this->generateUrl('admin_module', array('id' => $module->id)));
		    }
	    }
	    return $this->render('FuturModuleBundle:Modules:modif_module.html.twig', array(
	      'form'    => $form->createView(),
	      'module' => $module
	    ));
  	}

	public function supprimerAction(Module $module)
	{
		$form = $this->createFormBuilder()->getForm();

		$request = $this->getRequest();
		if ($request->getMethod() == 'POST')
		{
			$form->bind($request);
			if ($form->isValid())
			{
				$em = $this->getDoctrine()->getManager();
				$em->remove($module);
				$em->flush();
				$this->get('session')->getFlashBag()->add('info', 'module bien supprimé');
				return $this->redirect($this->generateUrl('admin_module'));
			}
		}
		return $this->render('FuturModuleBundle:Modules:rm_module.html.twig', array(
		  'module' => $module,
		  'form'    => $form->createView()
		));
	}
}
