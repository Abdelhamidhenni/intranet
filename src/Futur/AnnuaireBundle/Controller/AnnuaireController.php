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
    	$options = array(
			'host'              => 'ldap.42.fr',
			'username'          => 'uid=apetit,ou=2013,ou=people,dc=42,dc=fr',
			'password'          => '6kdVDjc6',
			'bindRequiresDn'    => true,
			'accountDomainName' => '42.fr',
			'baseDn'            => 'OU=people,DC=42,DC=fr',
			#'useSsl'			=> 'true',
			#'port'				=> 636,
		);
    	$ldap = new Ldap($options);
    	$ldap->bind();

    	$filter = array('filter' => '(&(ObjectClass=ft-user)(uid='.$filter.')(first-name='.$firstName.')(last-name='.$lastName.'))');
		$basedn = 'dc=42,dc=fr';
		$scope = Ldap::SEARCH_SCOPE_SUB;
		$attributes = array();
        $sort = null;
        $collectionClass = null;
        $sizelimit = 100;
        $timelimit = 0;
        $sort = 'uid';
    	$result = $ldap->search($filter, $basedn, $scope,$attributes, $sort, $collectionClass, $sizelimit, $timelimit);
    	$i = 0;
		foreach ($result as $item) {
		//echo $item["dn"] . ': ' . $item['cn'][0] . "<br />";
			$test[$i]['cn'][0] = $item['cn'][0];
			$test[$i]['dn'][0] = $item['dn'][0];
			$test[$i]['firstName'][0] = $item['first-name'][0];
			$test[$i]['lastName'][0] = $item['last-name'][0];
			$test[$i]['uid'][0] = $item['uid'][0];
			$test[$i]['alias'] = $item['alias'];
			if (array_key_exists('mobile-phone', $item))
				$test[$i]['mobilePhone'][0] = $item['mobile-phone'][0];
			if (array_key_exists('picture', $item))
				$test[$i]['picture'][0] = base64_encode($item['picture'][0]);

			$userManager = $this->container->get('fos_user.user_manager');
			$user = $userManager->findUserByUsername($test[$i]['uid'][0]);
			if ($user == NULL)
			{
				$user = $userManager->createUser();
				$user->setUsername($test[$i]['uid'][0]);
				$user->setPassword('');
				$user->setEnabled(True);
			}
			$user->setEmail($test[$i]['alias'][0]);
			$user->setCn($test[$i]['cn'][0]);
			$user->setDn($test[$i]['dn'][0]);
			if (array_key_exists('mobile-phone', $item))
				$user->setMobilePhone($test[$i]['mobilePhone'][0]);
			if (array_key_exists('picture', $item))
				$user->setPicture($test[$i]['picture'][0]);

			$userManager->updateUser($user);

			$i++;
		}
        return $this->render('FuturAnnuaireBundle:Annuaire:index.html.twig', array('result' => $test) );
    }
}
