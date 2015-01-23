<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // futur_note_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'futur_note_homepage')), array (  '_controller' => 'Futur\\NoteBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/cours')) {
            // futur_cours_homepage
            if (preg_match('#^/cours/(?P<_locale>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'futur_cours_homepage')), array (  '_controller' => 'Futur\\CoursBundle\\Controller\\CoursController::indexAction',));
            }

            // futur_cours_infos
            if (preg_match('#^/cours/(?P<id>[^/]++)/(?P<_locale>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'futur_cours_infos')), array (  '_controller' => 'Futur\\CoursBundle\\Controller\\CoursController::voirAction',));
            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            // futur_cours_add
            if (0 === strpos($pathinfo, '/addcours') && preg_match('#^/addcours/(?P<id>[^/]++)/(?P<_locale>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'futur_cours_add')), array (  '_controller' => 'Futur\\CoursBundle\\Controller\\CoursController::addAction',));
            }

            if (0 === strpos($pathinfo, '/annuaire')) {
                // futur_annuaire_homepage
                if (preg_match('#^/annuaire/(?P<_locale>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'futur_annuaire_homepage')), array (  '_controller' => 'Futur\\AnnuaireBundle\\Controller\\AnnuaireController::indexAction',  'filter' => 'a*',));
                }

                // futur_annuaire_search_by_uid
                if (preg_match('#^/annuaire/(?P<_locale>[^/]++)/search/uid/(?P<filter>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'futur_annuaire_search_by_uid')), array (  '_controller' => 'Futur\\AnnuaireBundle\\Controller\\AnnuaireController::indexAction',));
                }

                // futur_annuaire_search_by_firstName
                if (preg_match('#^/annuaire/(?P<_locale>[^/]++)/search/first_name/(?P<firstName>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'futur_annuaire_search_by_firstName')), array (  '_controller' => 'Futur\\AnnuaireBundle\\Controller\\AnnuaireController::indexAction',));
                }

                // futur_annuaire_search_by_lastName
                if (preg_match('#^/annuaire/(?P<_locale>[^/]++)/search/last_name/(?P<lastName>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'futur_annuaire_search_by_lastName')), array (  '_controller' => 'Futur\\AnnuaireBundle\\Controller\\AnnuaireController::indexAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/planning')) {
            // futur_planning_homepage
            if (preg_match('#^/planning/(?P<_locale>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'futur_planning_homepage')), array (  '_controller' => 'Futur\\PlanningBundle\\Controller\\PlanningController::indexAction',));
            }

            // futur_planning_homepage2
            if (preg_match('#^/planning/(?P<_locale>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'futur_planning_homepage2')), array (  '_controller' => 'Futur\\PlanningBundle\\Controller\\PlanningController::indexAction',));
            }

            // futur_planning_voir_date_mois
            if (preg_match('#^/planning/(?P<_locale>[^/]++)/(?P<year>\\d{4})/(?P<month>\\d{1,2})$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'futur_planning_voir_date_mois')), array (  '_controller' => 'Futur\\PlanningBundle\\Controller\\PlanningController::voirDateMoisAction',));
            }

            // futur_planning_voir_date_jour
            if (preg_match('#^/planning/(?P<_locale>[^/]++)/(?P<year>\\d{4})/(?P<month>\\d{1,2})/(?P<day>\\d{1,2})$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'futur_planning_voir_date_jour')), array (  '_controller' => 'Futur\\PlanningBundle\\Controller\\PlanningController::voirDateJourAction',));
            }

            // futur_planning_creer_evenement
            if (preg_match('#^/planning/(?P<_locale>[^/]++)/creer/evenement$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'futur_planning_creer_evenement')), array (  '_controller' => 'Futur\\PlanningBundle\\Controller\\PlanningController::creerEvenementAction',));
            }

        }

        if (0 === strpos($pathinfo, '/hello')) {
            // futur_sujet_default_index
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'futur_sujet_default_index')), array (  '_controller' => 'Futur\\SujetBundle\\Controller\\DefaultController::indexAction',));
            }

            // futur_module_default_index
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'futur_module_default_index')), array (  '_controller' => 'Futur\\ModuleBundle\\Controller\\DefaultController::indexAction',));
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // admin_home
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_home');
                }

                return array (  '_controller' => 'Futur\\AdminBundle\\Controller\\AdminController::ensembleAction',  '_route' => 'admin_home',);
            }

            // admin_vueensemble
            if ($pathinfo === '/admin/vueensemble') {
                return array (  '_controller' => 'Futur\\AdminBundle\\Controller\\AdminController::ensembleAction',  '_route' => 'admin_vueensemble',);
            }

            // admin_ticket
            if (0 === strpos($pathinfo, '/admin/ticket') && preg_match('#^/admin/ticket(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ticket')), array (  '_controller' => 'FuturAdminBundle:ticket:ticket',  'id' => 0,));
            }

            if (0 === strpos($pathinfo, '/admin/user')) {
                // admin_user
                if (preg_match('#^/admin/user(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user')), array (  '_controller' => 'FuturAdminBundle:user:user',  'id' => 0,));
                }

                // admin_user_del
                if (0 === strpos($pathinfo, '/admin/user/del') && preg_match('#^/admin/user/del(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_del')), array (  '_controller' => 'FuturAdminBundle:user:del',  'id' => 0,));
                }

                // admin_user_token
                if (0 === strpos($pathinfo, '/admin/user/token') && preg_match('#^/admin/user/token(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_token')), array (  '_controller' => 'FuturAdminBundle:user:token',  'id' => 0,));
                }

            }

            // admin_module
            if (0 === strpos($pathinfo, '/admin/module') && preg_match('#^/admin/module(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_module')), array (  '_controller' => 'FuturAdminBundle:module:module',  'id' => 0,));
            }

            // admin_activite
            if (0 === strpos($pathinfo, '/admin/activite') && preg_match('#^/admin/activite(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_activite')), array (  '_controller' => 'FuturAdminBundle:activite:activite',  'id' => 0,));
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (preg_match('#^/profile/(?P<_locale>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_profile_show')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',));
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if (preg_match('#^/profile/(?P<_locale>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_profile_edit')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',));
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (preg_match('#^/register/(?P<_locale>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_register')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',));
                }

                // fos_user_registration_check_email
                if (preg_match('#^/register/(?P<_locale>[^/]++)/check\\-email$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_registration_check_email;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_check_email')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',));
                }
                not_fos_user_registration_check_email:

                // fos_user_registration_confirm
                if (preg_match('#^/register/(?P<_locale>[^/]++)/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_registration_confirm;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if (preg_match('#^/register/(?P<_locale>[^/]++)/confirmed$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_registration_confirmed;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirmed')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',));
                }
                not_fos_user_registration_confirmed:

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if (preg_match('#^/resetting/(?P<_locale>[^/]++)/request$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_request')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',));
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if (preg_match('#^/resetting/(?P<_locale>[^/]++)/send\\-email$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_send_email')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',));
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if (preg_match('#^/resetting/(?P<_locale>[^/]++)/check\\-email$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_check_email')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',));
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (preg_match('#^/resetting/(?P<_locale>[^/]++)/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if (0 === strpos($pathinfo, '/profile') && preg_match('#^/profile/(?P<_locale>[^/]++)/change\\-password$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_change_password')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',));
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/log')) {
            // token_log
            if (0 === strpos($pathinfo, '/log_token') && preg_match('#^/log_token(?:/(?P<token>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'token_log')), array (  '_controller' => 'FuturUserBundle:token:token',  'token' => 0,));
            }

            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if (preg_match('#^/login/(?P<_locale>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_security_login')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',));
                }

                // fos_user_security_check
                if (0 === strpos($pathinfo, '/login_check') && preg_match('#^/login_check/(?P<_locale>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_security_check')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',));
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        // ticket_homepage
        if (preg_match('#^/(?P<_locale>[^/]++)/ticket(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ticket_homepage')), array (  '_controller' => 'Futur\\TicketBundle\\Controller\\TicketController::indexAction',  'id' => 0,));
        }

        // ticket_new
        if (0 === strpos($pathinfo, '/ticket/nouveau') && preg_match('#^/ticket/nouveau/(?P<_locale>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ticket_new')), array (  '_controller' => 'Futur\\TicketBundle\\Controller\\TicketController::nouveauAction',));
        }

        // ticket_del
        if (preg_match('#^/(?P<_locale>[^/]++)/ticket/supprimer/(?P<ticket>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ticket_del')), array (  '_controller' => 'Futur\\TicketBundle\\Controller\\TicketController::supprimerAction',));
        }

        if (0 === strpos($pathinfo, '/ticket')) {
            // ticket_update
            if (0 === strpos($pathinfo, '/ticket/modifier') && preg_match('#^/ticket/modifier/(?P<_locale>[^/]++)/(?P<ticket>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ticket_update')), array (  '_controller' => 'Futur\\TicketBundle\\Controller\\TicketController::modifierAction',));
            }

            // ticket_statut
            if (0 === strpos($pathinfo, '/ticket/statut') && preg_match('#^/ticket/statut/(?P<_locale>[^/]++)/(?P<ticket>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ticket_statut')), array (  '_controller' => 'Futur\\TicketBundle\\Controller\\TicketController::statutAction',));
            }

        }

        // futursite_homepage
        if (preg_match('#^/(?P<_locale>[^/]++)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'futursite_homepage')), array (  '_controller' => 'Futur\\SiteBundle\\Controller\\SiteController::indexAction',  '_locale' => 'fr',));
        }

        // futursite2_homepage
        if (0 === strpos($pathinfo, '/accueil') && preg_match('#^/accueil/(?P<_locale>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'futursite2_homepage')), array (  '_controller' => 'Futur\\SiteBundle\\Controller\\SiteController::indexAction',));
        }

        // traduction
        if (rtrim($pathinfo, '/') === '/traduction') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'traduction');
            }

            return array (  '_controller' => 'Futur\\SiteBundle\\Controller\\SiteController::traductionAction',  '_route' => 'traduction',);
        }

        // futur_module_homepage
        if (0 === strpos($pathinfo, '/modules') && preg_match('#^/modules/(?P<_locale>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'futur_module_homepage')), array (  '_controller' => 'Futur\\ModuleBundle\\Controller\\ModuleController::indexAction',));
        }

        // futur_module_add
        if (0 === strpos($pathinfo, '/addmodule') && preg_match('#^/addmodule/(?P<_locale>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'futur_module_add')), array (  '_controller' => 'Futur\\ModuleBundle\\Controller\\ModuleController::addAction',));
        }

        if (0 === strpos($pathinfo, '/module')) {
            // futur_module_infos
            if (preg_match('#^/module/(?P<id>[^/]++)/(?P<_locale>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'futur_module_infos')), array (  '_controller' => 'Futur\\ModuleBundle\\Controller\\ModuleController::voirAction',));
            }

            // futur_module_modifier
            if (0 === strpos($pathinfo, '/modulemod') && preg_match('#^/modulemod/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'futur_module_modifier')), array (  '_controller' => 'Futur\\ModuleBundle\\Controller\\ModuleController::modifierAction',));
            }

            // futur_module_supprimer
            if (0 === strpos($pathinfo, '/modulesup') && preg_match('#^/modulesup/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'futur_module_supprimer')), array (  '_controller' => 'Futur\\ModuleBundle\\Controller\\ModuleController::supprimerAction',));
            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            // futur_activite_homepage
            if (0 === strpos($pathinfo, '/activites') && preg_match('#^/activites/(?P<_locale>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'futur_activite_homepage')), array (  '_controller' => 'Futur\\SujetBundle\\Controller\\ActiviteController::indexAction',));
            }

            // futur_activite_add
            if (0 === strpos($pathinfo, '/addactivite') && preg_match('#^/addactivite/(?P<_locale>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'futur_activite_add')), array (  '_controller' => 'Futur\\SujetBundle\\Controller\\ActiviteController::addAction',));
            }

        }

        if (0 === strpos($pathinfo, '/module')) {
            // futur_activite_infos
            if (preg_match('#^/module/(?P<id2>[^/]++)/activite/(?P<id>[^/]++)/(?P<_locale>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'futur_activite_infos')), array (  '_controller' => 'Futur\\SujetBundle\\Controller\\ActiviteController::voirAction',));
            }

            // futur_activite_modifier
            if (preg_match('#^/module/(?P<id2>[^/]++)/activitemod/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'futur_activite_modifier')), array (  '_controller' => 'Futur\\SujetBundle\\Controller\\ActiviteController::modifierAction',  'id2' => 0,));
            }

            // futur_activite_supprimer
            if (preg_match('#^/module/(?P<id2>[^/]++)/activitesup/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'futur_activite_supprimer')), array (  '_controller' => 'Futur\\SujetBundle\\Controller\\ActiviteController::supprimerAction',  'id2' => 0,));
            }

        }

        // ccdn_forum_admin_index
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ccdn_forum_admin_index');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_index')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminPanelController::IndexAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_forum_list
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-forums/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ccdn_forum_admin_forum_list');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_forum_list')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminForumController::listAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_forum_create
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-forums/create$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_forum_create')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminForumController::createAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_forum_create_process
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-forums/create/process$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_forum_create_process')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminForumController::createProcessAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_forum_edit
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-forums/edit/(?P<forumId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_forum_edit')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminForumController::editAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_forum_edit_process
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-forums/edit/(?P<forumId>[^/]++)/process$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_forum_edit_process')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminForumController::editProcessAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_forum_delete
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-forums/delete/(?P<forumId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_forum_delete')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminForumController::deleteAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_forum_delete_process
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-forums/delete/(?P<forumId>[^/]++)/process$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_forum_delete_process')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminForumController::deleteProcessAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_category_list
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-categories/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ccdn_forum_admin_category_list');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_category_list')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminCategoryController::listAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_category_create
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-categories/create$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_category_create')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminCategoryController::createAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_category_create_process
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-categories/create/process$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_category_create_process')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminCategoryController::createProcessAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_category_edit
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-categories/edit/(?P<categoryId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_category_edit')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminCategoryController::editAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_category_edit_process
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-categories/edit/(?P<categoryId>[^/]++)/process$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_category_edit_process')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminCategoryController::editProcessAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_category_delete
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-categories/delete/(?P<categoryId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_category_delete')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminCategoryController::deleteAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_category_delete_process
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-categories/delete/(?P<categoryId>[^/]++)/process$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_category_delete_process')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminCategoryController::deleteProcessAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_category_reorder_up
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-categories/reorder/(?P<categoryId>[^/]++)/up$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_category_reorder_up')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminCategoryController::reorderAction',  '_locale' => 'en',  'direction' => 0,));
        }

        // ccdn_forum_admin_category_reorder_down
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-categories/reorder/(?P<categoryId>[^/]++)/down$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_category_reorder_down')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminCategoryController::reorderAction',  '_locale' => 'en',  'direction' => 1,));
        }

        // ccdn_forum_admin_board_list
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-boards/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ccdn_forum_admin_board_list');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_board_list')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminBoardController::listAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_board_create
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-boards/create$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_board_create')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminBoardController::createAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_board_create_process
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-boards/create/process$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_board_create_process')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminBoardController::createProcessAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_board_edit
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-boards/edit/(?P<boardId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_board_edit')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminBoardController::editAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_board_edit_process
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-boards/edit/(?P<boardId>[^/]++)/process$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_board_edit_process')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminBoardController::editProcessAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_board_delete
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-boards/delete/(?P<boardId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_board_delete')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminBoardController::deleteAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_board_delete_process
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-boards/delete/(?P<boardId>[^/]++)/process$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_board_delete_process')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminBoardController::deleteProcessAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_board_reorder_up
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-boards/reorder/(?P<boardId>[^/]++)/up$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_board_reorder_up')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminBoardController::reorderAction',  '_locale' => 'en',  'direction' => 0,));
        }

        // ccdn_forum_admin_board_reorder_down
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-boards/reorder/(?P<boardId>[^/]++)/down$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_board_reorder_down')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminBoardController::reorderAction',  '_locale' => 'en',  'direction' => 1,));
        }

        // ccdn_forum_moderator_topic_close
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/moderator/manage\\-topics/(?P<topicId>[^/]++)/close$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_moderator_topic_close')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\ModeratorTopicController::closeAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_moderator_topic_reopen
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/moderator/manage\\-topics/(?P<topicId>[^/]++)/reopen$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_moderator_topic_reopen')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\ModeratorTopicController::reopenAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_moderator_topic_sticky
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/moderator/manage\\-topics/(?P<topicId>[^/]++)/sticky$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_moderator_topic_sticky')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\ModeratorTopicController::stickyAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_moderator_topic_unsticky
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/moderator/manage\\-topics/(?P<topicId>[^/]++)/unsticky$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_moderator_topic_unsticky')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\ModeratorTopicController::unstickyAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_moderator_topic_delete
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/moderator/manage\\-topics/(?P<topicId>[^/]++)/delete$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_moderator_topic_delete')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\ModeratorTopicController::deleteAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_moderator_topic_delete_process
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/moderator/manage\\-topics/(?P<topicId>[^/]++)/delete/process$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_moderator_topic_delete_process')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\ModeratorTopicController::deleteProcessAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_moderator_topic_restore
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/moderator/manage\\-topics/(?P<topicId>[^/]++)/restore$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_moderator_topic_restore')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\ModeratorTopicController::restoreAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_moderator_topic_change_board
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/moderator/manage\\-topics/(?P<topicId>[^/]++)/change\\-board$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_moderator_topic_change_board')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\ModeratorTopicController::changeBoardAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_moderator_topic_change_board_process
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/moderator/manage\\-topics/(?P<topicId>[^/]++)/change\\-board/process$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_moderator_topic_change_board_process')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\ModeratorTopicController::changeBoardProcessAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_moderator_post_lock
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/moderator/manage\\-posts/(?P<postId>[^/]++)/lock$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_moderator_post_lock')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\ModeratorPostController::lockAction',  '_locale' => 'en',));
        }

        // ccdn_forum_moderator_post_unlock
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/moderator/manage\\-posts/(?P<postId>[^/]++)/unlock$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_moderator_post_unlock')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\ModeratorPostController::unlockAction',  '_locale' => 'en',));
        }

        // ccdn_forum_moderator_post_unlock_process
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/moderator/manage\\-posts/(?P<postId>[^/]++)/unlock/process$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_moderator_post_unlock_process')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\ModeratorPostController::unlockProcessAction',  '_locale' => 'en',));
        }

        // ccdn_forum_moderator_post_restore
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/moderator/manage\\-posts/(?P<postId>[^/]++)/restore$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_moderator_post_restore')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\ModeratorPostController::restoreAction',  '_locale' => 'en',));
        }

        // ccdn_forum_user_category_index
        if (preg_match('#^/(?P<_locale>[^/]++)/forum(?:/(?P<forumName>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_user_category_index')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\UserCategoryController::indexAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_user_category_show
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/category/(?P<categoryId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_user_category_show')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\UserCategoryController::showAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_user_board_show
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/board/(?P<boardId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_user_board_show')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\UserBoardController::showAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_user_topic_show
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/topic/(?P<topicId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_user_topic_show')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\UserTopicController::showAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_user_topic_create
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/topic/create/for\\-board/(?P<boardId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_user_topic_create')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\UserTopicController::createAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_user_topic_create_process
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/topic/create/for\\-board/(?P<boardId>[^/]++)/process$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_user_topic_create_process')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\UserTopicController::createProcessAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_user_topic_reply
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/topic/(?P<topicId>[^/]++)/reply$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_user_topic_reply')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\UserTopicController::replyAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_user_topic_reply_process
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/topic/(?P<topicId>[^/]++)/reply/process$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_user_topic_reply_process')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\UserTopicController::replyProcessAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_user_post_show
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/post/(?P<postId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_user_post_show')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\UserPostController::showAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_user_post_edit
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/post/(?P<postId>[^/]++)/edit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_user_post_edit')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\UserPostController::editAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_user_post_edit_process
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/post/(?P<postId>[^/]++)/edit/process$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_user_post_edit_process')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\UserPostController::editProcessAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_user_post_delete
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/post/(?P<postId>[^/]++)/delete$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_user_post_delete')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\UserPostController::deleteAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_user_post_delete_process
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/post/(?P<postId>[^/]++)/delete/process$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_user_post_delete_process')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\UserPostController::deleteProcessAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_user_subscription_index
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/subscription/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ccdn_forum_user_subscription_index');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_user_subscription_index')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\UserSubscriptionController::indexAction',  '_locale' => 'en',));
        }

        // ccdn_forum_user_subscription_subscribe
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/subscription/topic/(?P<topicId>[^/]++)/subscribe$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_user_subscription_subscribe')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\UserSubscriptionController::subscribeAction',  '_locale' => 'en',));
        }

        // ccdn_forum_user_subscription_unsubscribe
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/subscription/topic/(?P<topicId>[^/]++)/unsubscribe$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_user_subscription_unsubscribe')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\UserSubscriptionController::unsubscribeAction',  '_locale' => 'en',));
        }

        // ccdn_homepage
        if (preg_match('#^/(?P<_locale>[^/]++)/forumName$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_homepage')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\UserCategoryController::indexAction',  '_locale' => 'en',  'forumName' => 'defaults',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
