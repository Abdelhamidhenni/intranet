<?php

namespace Futur\AnnuaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FR3D\LdapBundle\Ldap\LdapManager;
use Zend\Ldap\Ldap;
use FR3D\LdapBundle\Driver\ZendLdapDriver;

class AnnuaireController extends Controller
{
    public function indexAction($filter = '*', $firstName = '*', $lastName = '*')
    {
    	

        return $this->render('FuturAnnuaireBundle:Annuaire:index.html.twig', array('result' => NULL) );
    }
}
