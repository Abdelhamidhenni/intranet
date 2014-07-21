<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new Futur\SiteBundle\FuturSiteBundle(),
            new Futur\TicketBundle\FuturTicketBundle(),
			new Futur\UserBundle\FuturUserBundle(),
			new FOS\UserBundle\FOSUserBundle(),
            new Futur\AdminBundle\FuturAdminBundle(),
            new Futur\ModuleBundle\FuturModuleBundle(),
            new Futur\SujetBundle\FuturSujetBundle(),
            new FR3D\LdapBundle\FR3DLdapBundle(),
            new Futur\PlanningBundle\FuturPlanningBundle(),
            new Futur\AnnuaireBundle\FuturAnnuaireBundle(),
            new Knp\Bundle\PaginatorBundle\KnpPaginatorBundle(),
            new CCDNForum\ForumBundle\CCDNForumForumBundle(),
            new Futur\FofoBundle\FuturFofoBundle(),
            new Futur\CoursBundle\FuturCoursBundle(),
            new Futur\NoteBundle\FuturNoteBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
}
