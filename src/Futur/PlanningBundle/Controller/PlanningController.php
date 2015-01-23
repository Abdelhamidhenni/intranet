<?php

namespace Futur\PlanningBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Futur\PlanningBundle\Entity\Evenement;

class PlanningController extends Controller
{
    public function indexAction()
    {
    	/* Acquisition de la date */
    	$yearNum = date("Y");
    	$monthNum = date("n");
    	$dayNum = date("d");
    	$daynow = date("Y-n-d");


    	/* Variables pour déplacements */
    	if ($monthNum < 1) { $monthNum = 12; $yearNum = $yearNum - 1; }
		elseif ($monthNum > 12) { $monthNum = 1; $yearNum = $yearNum + 1; }

		/* Tableau des jours, mois */
		$dayArray = array("" , "Lundi" , "Mardi" , "Mercredi" , "Jeudi" , "Vendredi" , "Samedi" , "Dimanche");
		$monthArray = array("" , "Janvier" , "Fevrier" , "Mars" , "Avril" , "Mai" , "Juin" , "Juillet" , "Aout" , "Septembre" , "Octobre" , "Novembre" , "Decembre");

		$firstDayThisMonth = date("w",mktime(0 , 0 , 0 , $monthNum , 1 , $yearNum));
		$nbrDayThisMonth = date("t" , mktime(0 , 0 , 0 , $monthNum , 1 , $yearNum));
		$nbrDayLastMonth = date("t", mktime(0 , 0 , 0 , ($monthNum - 1 < 1 ) ? 12 : $monthNum - 1 , 1 , $yearNum));
		$nbrDayNextMonth = date("t", mktime(0 , 0 , 0 , ($monthNum + 1 > 12) ? 1 : $monthNum + 1 , 1 , $yearNum));

		/* planningArray[Semaine][Jour de la semaine] */
		$planningArray = array(array(),array(),array(),array(),array(),array());

		$firstDayThisMonth = ($firstDayThisMonth == 0) ? 7 : $firstDayThisMonth;

		// Events en cours
		$usr = $this->get('security.context')->getToken()->getUser();
		$events = $this->getDoctrine()
		                 ->getManager()
		                 ->getRepository('FuturPlanningBundle:Evenement')
		                 ->findByToUser($usr->getUsername());

		$dayCounter = 1;
		$tmp = "";
		for ($i = 0 ; $i < 6 ; $i++)
		{
			for ($j = 0 ; $j < 7 ; $j++)
			{
				if ($j + 1 == $firstDayThisMonth && $dayCounter == 1)
				{
					$planningArray[$i][$j] = $dayCounter; /* Stockage du premier jour du mois */
					$dayCounter++;
				}
				elseif ($dayCounter > 1 && $dayCounter <= $nbrDayThisMonth)
				{
					$planningArray[$i][$j] = $tmp . $dayCounter;
					$dayCounter++;
				}
				elseif ($dayCounter > $nbrDayThisMonth) /* Tout les numéros du mois actuel sont mis */
				{
					$tmp = "*";
					$planningArray[$i][$j] = $tmp . "1"; /* On remplis avec les numéros du mois suivant */
					$dayCounter = 2;
				}
				elseif ($dayCounter == 1) /* Le premier jour de la semaine n'est pas le premier jour du mois, on mets les numéros du mois précédent */
				{
					$planningArray[$i][$j] = "*" . ($nbrDayLastMonth - ($firstDayThisMonth - ($j + 1) ) + 1);
				}
			}
		}

        return $this->render('FuturPlanningBundle:Planning:index.html.twig', array(	'planningArray' => $planningArray,
        																			'monthArray' => $monthArray,
        																			'dayArray' => $dayArray,
        																			'day' => $daynow,
        																			'dayNum' => $dayNum,
        																			'monthNum' => $monthNum,
        																			'yearNum' => $yearNum,
        																			'dayDate' => date('j'),
        																			'allevents' => $events,
        																			'monthDate' => date('n'),
        																			'yearDate' => date('Y')) );
    }

    public function voirDateMoisAction($year, $month)
    {
    	/* Acquisition de la date */
    	if (empty($year)) $yearNum = date("Y");
    	else $yearNum = $year;
    	if (empty($month)) $monthNum = date("n");
    	else $monthNum = $month;
    	$dayNum = 1;
    	$watchday = $monthNum . '/' . $dayNum . '/' . $yearNum;
    	$daynow = date_create($watchday);

    	/* Variables pour déplacements */
    	if ($monthNum < 1) { $monthNum = 12; $yearNum = $yearNum - 1; }
		elseif ($monthNum > 12) { $monthNum = 1; $yearNum = $yearNum + 1; }

		/* Tableau des jours, mois */
		$dayArray = array("" , "Lundi" , "Mardi" , "Mercredi" , "Jeudi" , "Vendredi" , "Samedi" , "Dimanche");
		$monthArray = array("" , "Janvier" , "Fevrier" , "Mars" , "Avril" , "Mai" , "Juin" , "Juillet" , "Aout" , "Septembre" , "Octobre" , "Novembre" , "Decembre");

		$firstDayThisMonth = date("w",mktime(0 , 0 , 0 , $monthNum , 1 , $yearNum));
		$nbrDayThisMonth = date("t" , mktime(0 , 0 , 0 , $monthNum , 1 , $yearNum));
		$nbrDayLastMonth = date("t", mktime(0 , 0 , 0 , ($monthNum - 1 < 1 ) ? 12 : $monthNum - 1 , 1 , $yearNum));
		$nbrDayNextMonth = date("t", mktime(0 , 0 , 0 , ($monthNum + 1 > 12) ? 1 : $monthNum + 1 , 1 , $yearNum));

		// Events en cours
		$usr = $this->get('security.context')->getToken()->getUser();
		$events = $this->getDoctrine()
		                 ->getManager()
		                 ->getRepository('FuturPlanningBundle:Evenement')
		                 ->findByToUser($usr->getUsername());

		/* planningArray[Semaine][Jour de la semaine] */
		$planningArray = array(array(),array(),array(),array(),array(),array());

		$firstDayThisMonth = ($firstDayThisMonth == 0) ? 7 : $firstDayThisMonth;

		$dayCounter = 1;
		$tmp = "";
		for ($i = 0 ; $i < 6 ; $i++)
		{
			for ($j = 0 ; $j < 7 ; $j++)
			{
				if ($j + 1 == $firstDayThisMonth && $dayCounter == 1)
				{
					$planningArray[$i][$j] = $dayCounter; /* Stockage du premier jour du mois */
					$dayCounter++;
				}
				elseif ($dayCounter > 1 && $dayCounter <= $nbrDayThisMonth)
				{
					$planningArray[$i][$j] = $tmp . $dayCounter;
					$dayCounter++;
				}
				elseif ($dayCounter > $nbrDayThisMonth) /* Tout les numéros du mois actuel sont mis */
				{
					$tmp = "*";
					$planningArray[$i][$j] = $tmp . "1"; /* On remplis avec les numéros du mois suivant */
					$dayCounter = 2;
				}
				elseif ($dayCounter == 1) /* Le premier jour de la semaine n'est pas le premier jour du mois, on mets les numéros du mois précédent */
				{
					$planningArray[$i][$j] = "*" . ($nbrDayLastMonth - ($firstDayThisMonth - ($j + 1) ) + 1);
				}
			}
		}

        return $this->render('FuturPlanningBundle:Planning:index.html.twig', array(	'planningArray' => $planningArray,
        																			'monthArray' => $monthArray,
        																			'dayArray' => $dayArray,
        																			'dayNum' => $dayNum,
        																			'monthNum' => $monthNum,
        																			'day' => $daynow,
        																			'yearNum' => $yearNum,
        																			'allevents' => $events,
        																			'dayDate' => date('j'),
        																			'monthDate' => date('n'),
        																			'yearDate' => date('Y')) );
    }

    public function voirDateJourAction($year, $month, $day)
    {
    	/* Acquisition de la date */
    	if (empty($year)) $yearNum = date("Y");
    	else $yearNum = $year;
    	if (empty($month)) $monthNum = date("n");
    	else $monthNum = $month;
    	if (empty($day)) $dayNum = date("d");
    	else $dayNum = $day;
    	$watchday = $monthNum . '/' . $dayNum . '/' . $yearNum;
    	$daynow = date_create($watchday);

    	/* Variables pour déplacements */
    	if ($monthNum < 1) { $monthNum = 12; $yearNum = $yearNum - 1; }
		elseif ($monthNum > 12) { $monthNum = 1; $yearNum = $yearNum + 1; }

		/* Tableau des jours, mois */
		$dayArray = array("" , "Lundi" , "Mardi" , "Mercredi" , "Jeudi" , "Vendredi" , "Samedi" , "Dimanche");
		$monthArray = array("" , "Janvier" , "Fevrier" , "Mars" , "Avril" , "Mai" , "Juin" , "Juillet" , "Aout" , "Septembre" , "Octobre" , "Novembre" , "Decembre");

		$firstDayThisMonth = date("w",mktime(0 , 0 , 0 , $monthNum , 1 , $yearNum));
		$nbrDayThisMonth = date("t" , mktime(0 , 0 , 0 , $monthNum , 1 , $yearNum));
		$nbrDayLastMonth = date("t", mktime(0 , 0 , 0 , ($monthNum - 1 < 1 ) ? 12 : $monthNum - 1 , 1 , $yearNum));
		$nbrDayNextMonth = date("t", mktime(0 , 0 , 0 , ($monthNum + 1 > 12) ? 1 : $monthNum + 1 , 1 , $yearNum));

		// Events en cours
		$usr = $this->get('security.context')->getToken()->getUser();
		$events = $this->getDoctrine()
		                 ->getManager()
		                 ->getRepository('FuturPlanningBundle:Evenement')
		                 ->findByToUser($usr->getUsername());

		/* planningArray[Semaine][Jour de la semaine] */
		$planningArray = array(array(),array(),array(),array(),array(),array());

		$firstDayThisMonth = ($firstDayThisMonth == 0) ? 7 : $firstDayThisMonth;

		$dayCounter = 1;
		$tmp = "";
		for ($i = 0 ; $i < 6 ; $i++)
		{
			for ($j = 0 ; $j < 7 ; $j++)
			{
				if ($j + 1 == $firstDayThisMonth && $dayCounter == 1)
				{
					$planningArray[$i][$j] = $dayCounter; /* Stockage du premier jour du mois */
					$dayCounter++;
				}
				elseif ($dayCounter > 1 && $dayCounter <= $nbrDayThisMonth)
				{
					$planningArray[$i][$j] = $tmp . $dayCounter;
					$dayCounter++;
				}
				elseif ($dayCounter > $nbrDayThisMonth) /* Tout les numéros du mois actuel sont mis */
				{
					$tmp = "*";
					$planningArray[$i][$j] = $tmp . "1"; /* On remplis avec les numéros du mois suivant */
					$dayCounter = 2;
				}
				elseif ($dayCounter == 1) /* Le premier jour de la semaine n'est pas le premier jour du mois, on mets les numéros du mois précédent */
				{
					$planningArray[$i][$j] = "*" . ($nbrDayLastMonth - ($firstDayThisMonth - ($j + 1) ) + 1);
				}
			}
		}

        return $this->render('FuturPlanningBundle:Planning:index.html.twig', array(	'planningArray' => $planningArray,
        																			'monthArray' => $monthArray,
        																			'dayArray' => $dayArray,
        																			'dayNum' => $dayNum,
        																			'monthNum' => $monthNum,
        																			'yearNum' => $yearNum,
        																			'day' => $daynow,
        																			'allevents' => $events,
        																			'dayDate' => date('j'),
        																			'monthDate' => date('n'),
        																			'yearDate' => date('Y')) );
    }

    public function creerEvenementAction()
    {
		$evenement = new Evenement();

		$form = $this->createFormBuilder($evenement)
			->add('startDate',		'datetime')
			->add('endDate',		'datetime')
			->add('name',			'text')
			->add('description',	'textarea')
			->add('author',			'text')
			->add('toGroup',		'text', array('required' => false))
			->add('toUser',			'text', array('required' => false))
			->getForm();

		// On récupère la requête
		$request = $this->get('request');

		// On vérifie qu'elle est de type POST
		if ($request->getMethod() == 'POST') {
			// On fait le lien Requête <-> Formulaire
			// À partir de maintenant, la variable $evenement contient les valeurs entrées dans le formulaire par le visiteur
			$form->bind($request);

			// On vérifie que les valeurs entrées sont correctes
			// (Nous verrons la validation des objets en détail dans le prochain chapitre)
			if ($form->isValid()) {
				// On l'enregistre notre objet $evenement dans la base de données
				$em = $this->getDoctrine()->getManager();
				$em->persist($evenement);
				$em->flush();

				// On redirige vers la page de visualisation de l'evenement nouvellement créé
				//return $this->redirect($this->generateUrl('futur_planning_voir_evenement', array('id' => $evenement->getId())));
				return $this->redirect($this->generateUrl('futur_planning_homepage'));
			}
		}

		// À ce stade :
		// - Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
		// - Soit la requête est de type POST, mais le formulaire n'est pas valide, donc on l'affiche de nouveau


		// On passe la méthode createView() du formulaire à la vue afin qu'elle puisse afficher le formulaire toute seule
    	return $this->render('FuturPlanningBundle:Planning:creerEvenement.html.twig', array('form' => $form->createView(),));
    }
}
