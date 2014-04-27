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

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
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

        // jet_set_mag_admin_homepage
        if ($pathinfo === '/admin') {
            return array (  '_controller' => 'JetSetMagAdminBundle:Admin:index',  '_route' => 'jet_set_mag_admin_homepage',);
        }

        // administrateur_admin_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'administrateur_admin_homepage')), array (  '_controller' => 'Administrateur\\AdminBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/article')) {
            // article
            if ($pathinfo === '/article') {
                return array (  '_controller' => 'Administrateur\\AdminBundle\\Controller\\ArticleController::indexAction',  '_route' => 'article',);
            }

            // article_show
            if (0 === strpos($pathinfo, '/article/show') && preg_match('#^/article/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_show')), array (  '_controller' => 'Administrateur\\AdminBundle\\Controller\\ArticleController::showAction',));
            }

            // article_edit
            if (0 === strpos($pathinfo, '/article/edit') && preg_match('#^/article/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_edit')), array (  '_controller' => 'Administrateur\\AdminBundle\\Controller\\ArticleController::editAction',));
            }

            // article_new
            if ($pathinfo === '/article/new') {
                return array (  '_controller' => 'Administrateur\\AdminBundle\\Controller\\ArticleController::newAction',  '_route' => 'article_new',);
            }

            // article_create
            if ($pathinfo === '/article/create') {
                return array (  '_controller' => 'Administrateur\\AdminBundle\\Controller\\ArticleController::createAction',  '_route' => 'article_create',);
            }

            // article_delete
            if (0 === strpos($pathinfo, '/article/delete') && preg_match('#^/article/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_delete')), array (  '_controller' => 'Administrateur\\AdminBundle\\Controller\\ArticleController::deleteAction',));
            }

            // article_update
            if (0 === strpos($pathinfo, '/article/update') && preg_match('#^/article/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_update')), array (  '_controller' => 'Administrateur\\AdminBundle\\Controller\\ArticleController::updateAction',));
            }

        }

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/cinema')) {
                // cinema
                if ($pathinfo === '/cinema') {
                    return array (  '_controller' => 'Administrateur\\AdminBundle\\Controller\\CinemaController::indexAction',  '_route' => 'cinema',);
                }

                // cinema_show
                if (0 === strpos($pathinfo, '/cinema/show') && preg_match('#^/cinema/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cinema_show')), array (  '_controller' => 'Administrateur\\AdminBundle\\Controller\\CinemaController::showAction',));
                }

                // cinema_edit
                if (0 === strpos($pathinfo, '/cinema/edit') && preg_match('#^/cinema/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cinema_edit')), array (  '_controller' => 'Administrateur\\AdminBundle\\Controller\\CinemaController::editAction',));
                }

                // cinema_new
                if ($pathinfo === '/cinema/new') {
                    return array (  '_controller' => 'Administrateur\\AdminBundle\\Controller\\CinemaController::newAction',  '_route' => 'cinema_new',);
                }

                // cinema_create
                if ($pathinfo === '/cinema/create') {
                    return array (  '_controller' => 'Administrateur\\AdminBundle\\Controller\\CinemaController::createAction',  '_route' => 'cinema_create',);
                }

                // cinema_delete
                if (0 === strpos($pathinfo, '/cinema/delete') && preg_match('#^/cinema/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cinema_delete')), array (  '_controller' => 'Administrateur\\AdminBundle\\Controller\\CinemaController::deleteAction',));
                }

                // cinema_update
                if (0 === strpos($pathinfo, '/cinema/update') && preg_match('#^/cinema/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cinema_update')), array (  '_controller' => 'Administrateur\\AdminBundle\\Controller\\CinemaController::updateAction',));
                }

            }

            if (0 === strpos($pathinfo, '/commentaire')) {
                // commentaire
                if ($pathinfo === '/commentaire') {
                    return array (  '_controller' => 'Administrateur\\AdminBundle\\Controller\\CommentaireController::indexAction',  '_route' => 'commentaire',);
                }

                // commentaire_show
                if (0 === strpos($pathinfo, '/commentaire/show') && preg_match('#^/commentaire/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'commentaire_show')), array (  '_controller' => 'Administrateur\\AdminBundle\\Controller\\CommentaireController::showAction',));
                }

                // commentaire_edit
                if (0 === strpos($pathinfo, '/commentaire/edit') && preg_match('#^/commentaire/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'commentaire_edit')), array (  '_controller' => 'Administrateur\\AdminBundle\\Controller\\CommentaireController::editAction',));
                }

                // commentaire_new
                if ($pathinfo === '/commentaire/new') {
                    return array (  '_controller' => 'Administrateur\\AdminBundle\\Controller\\CommentaireController::newAction',  '_route' => 'commentaire_new',);
                }

                // commentaire_create
                if ($pathinfo === '/commentaire/create') {
                    return array (  '_controller' => 'Administrateur\\AdminBundle\\Controller\\CommentaireController::createAction',  '_route' => 'commentaire_create',);
                }

                // commentaire_delete
                if (0 === strpos($pathinfo, '/commentaire/delete') && preg_match('#^/commentaire/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'commentaire_delete')), array (  '_controller' => 'Administrateur\\AdminBundle\\Controller\\CommentaireController::deleteAction',));
                }

                // commentaire_update
                if (0 === strpos($pathinfo, '/commentaire/update') && preg_match('#^/commentaire/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'commentaire_update')), array (  '_controller' => 'Administrateur\\AdminBundle\\Controller\\CommentaireController::updateAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/evenement')) {
            // evenement
            if ($pathinfo === '/evenement') {
                return array (  '_controller' => 'Administrateur\\AdminBundle\\Controller\\EvenementController::indexAction',  '_route' => 'evenement',);
            }

            // evenement_show
            if (0 === strpos($pathinfo, '/evenement/show') && preg_match('#^/evenement/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'evenement_show')), array (  '_controller' => 'Administrateur\\AdminBundle\\Controller\\EvenementController::showAction',));
            }

            // evenement_edit
            if (0 === strpos($pathinfo, '/evenement/edit') && preg_match('#^/evenement/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'evenement_edit')), array (  '_controller' => 'Administrateur\\AdminBundle\\Controller\\EvenementController::editAction',));
            }

            // evenement_new
            if ($pathinfo === '/evenement/new') {
                return array (  '_controller' => 'Administrateur\\AdminBundle\\Controller\\EvenementController::newAction',  '_route' => 'evenement_new',);
            }

            // evenement_create
            if ($pathinfo === '/evenement/create') {
                return array (  '_controller' => 'Administrateur\\AdminBundle\\Controller\\EvenementController::createAction',  '_route' => 'evenement_create',);
            }

            // evenement_delete
            if (0 === strpos($pathinfo, '/evenement/delete') && preg_match('#^/evenement/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'evenement_delete')), array (  '_controller' => 'Administrateur\\AdminBundle\\Controller\\EvenementController::deleteAction',));
            }

            // evenement_update
            if (0 === strpos($pathinfo, '/evenement/update') && preg_match('#^/evenement/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'evenement_update')), array (  '_controller' => 'Administrateur\\AdminBundle\\Controller\\EvenementController::updateAction',));
            }

        }

        if (0 === strpos($pathinfo, '/membre')) {
            // membre
            if ($pathinfo === '/membre') {
                return array (  '_controller' => 'Administrateur\\AdminBundle\\Controller\\MembreController::indexAction',  '_route' => 'membre',);
            }

            // membre_show
            if (0 === strpos($pathinfo, '/membre/show') && preg_match('#^/membre/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'membre_show')), array (  '_controller' => 'Administrateur\\AdminBundle\\Controller\\MembreController::showAction',));
            }

            // membre_edit
            if (0 === strpos($pathinfo, '/membre/edit') && preg_match('#^/membre/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'membre_edit')), array (  '_controller' => 'Administrateur\\AdminBundle\\Controller\\MembreController::editAction',));
            }

            // membre_new
            if ($pathinfo === '/membre/new') {
                return array (  '_controller' => 'Administrateur\\AdminBundle\\Controller\\MembreController::newAction',  '_route' => 'membre_new',);
            }

            // membre_create
            if ($pathinfo === '/membre/create') {
                return array (  '_controller' => 'Administrateur\\AdminBundle\\Controller\\MembreController::createAction',  '_route' => 'membre_create',);
            }

            // membre_delete
            if (0 === strpos($pathinfo, '/membre/delete') && preg_match('#^/membre/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'membre_delete')), array (  '_controller' => 'Administrateur\\AdminBundle\\Controller\\MembreController::deleteAction',));
            }

            // membre_update
            if (0 === strpos($pathinfo, '/membre/update') && preg_match('#^/membre/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'membre_update')), array (  '_controller' => 'Administrateur\\AdminBundle\\Controller\\MembreController::updateAction',));
            }

        }

        if (0 === strpos($pathinfo, '/projection')) {
            // projection
            if ($pathinfo === '/projection') {
                return array (  '_controller' => 'Administrateur\\AdminBundle\\Controller\\ProjectionController::indexAction',  '_route' => 'projection',);
            }

            // projection_show
            if (0 === strpos($pathinfo, '/projection/show') && preg_match('#^/projection/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projection_show')), array (  '_controller' => 'Administrateur\\AdminBundle\\Controller\\ProjectionController::showAction',));
            }

            // projection_edit
            if (0 === strpos($pathinfo, '/projection/edit') && preg_match('#^/projection/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projection_edit')), array (  '_controller' => 'Administrateur\\AdminBundle\\Controller\\ProjectionController::editAction',));
            }

            // projection_new
            if ($pathinfo === '/projection/new') {
                return array (  '_controller' => 'Administrateur\\AdminBundle\\Controller\\ProjectionController::newAction',  '_route' => 'projection_new',);
            }

            // projection_create
            if ($pathinfo === '/projection/create') {
                return array (  '_controller' => 'Administrateur\\AdminBundle\\Controller\\ProjectionController::createAction',  '_route' => 'projection_create',);
            }

            // projection_delete
            if (0 === strpos($pathinfo, '/projection/delete') && preg_match('#^/projection/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projection_delete')), array (  '_controller' => 'Administrateur\\AdminBundle\\Controller\\ProjectionController::deleteAction',));
            }

            // projection_update
            if (0 === strpos($pathinfo, '/projection/update') && preg_match('#^/projection/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projection_update')), array (  '_controller' => 'Administrateur\\AdminBundle\\Controller\\ProjectionController::updateAction',));
            }

        }

        if (0 === strpos($pathinfo, '/film')) {
            // film
            if ($pathinfo === '/film') {
                return array (  '_controller' => 'Administrateur\\AdminBundle\\Controller\\FilmController::indexAction',  '_route' => 'film',);
            }

            // film_show
            if (0 === strpos($pathinfo, '/film/show') && preg_match('#^/film/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'film_show')), array (  '_controller' => 'Administrateur\\AdminBundle\\Controller\\FilmController::showAction',));
            }

            // film_edit
            if (0 === strpos($pathinfo, '/film/edit') && preg_match('#^/film/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'film_edit')), array (  '_controller' => 'Administrateur\\AdminBundle\\Controller\\FilmController::editAction',));
            }

            // film_new
            if ($pathinfo === '/film/new') {
                return array (  '_controller' => 'Administrateur\\AdminBundle\\Controller\\FilmController::newAction',  '_route' => 'film_new',);
            }

            // film_create
            if ($pathinfo === '/film/create') {
                return array (  '_controller' => 'Administrateur\\AdminBundle\\Controller\\FilmController::createAction',  '_route' => 'film_create',);
            }

            // film_delete
            if (0 === strpos($pathinfo, '/film/delete') && preg_match('#^/film/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'film_delete')), array (  '_controller' => 'Administrateur\\AdminBundle\\Controller\\FilmController::deleteAction',));
            }

            // film_update
            if (0 === strpos($pathinfo, '/film/update') && preg_match('#^/film/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'film_update')), array (  '_controller' => 'Administrateur\\AdminBundle\\Controller\\FilmController::updateAction',));
            }

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
