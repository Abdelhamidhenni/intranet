<?php

namespace Futur\NoteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('FuturNoteBundle:Default:index.html.twig', array('name' => $name));
    }
}
