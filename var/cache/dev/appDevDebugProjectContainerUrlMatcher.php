<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // app.admin.actor.index
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/actor/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'app.admin.actor.index');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app.admin.actor.index')), array (  '_controller' => 'AppBundle\\Controller\\AdminActorController::indexAction',));
        }

        // app.admin.actor.form
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/actor/form$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app.admin.actor.form')), array (  'id' => NULL,  '_controller' => 'AppBundle\\Controller\\AdminActorController::formAction',));
        }

        // app.admin.actor.form.update
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/actor/form/update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app.admin.actor.form.update')), array (  'id' => NULL,  '_controller' => 'AppBundle\\Controller\\AdminActorController::formAction',));
        }

        // app.admin.actor.form.delete
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/actor/form/delete(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app.admin.actor.form.delete')), array (  'id' => NULL,  '_controller' => 'AppBundle\\Controller\\AdminActorController::deleteAction',));
        }

        // app.admin.category.index
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/category/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'app.admin.category.index');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app.admin.category.index')), array (  '_controller' => 'AppBundle\\Controller\\AdminCategoryController::indexAction',));
        }

        // app.admin.category.form
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/category/form$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app.admin.category.form')), array (  'id' => NULL,  '_controller' => 'AppBundle\\Controller\\AdminCategoryController::formAction',));
        }

        // app.admin.category.form.update
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/category/form/update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app.admin.category.form.update')), array (  'id' => NULL,  '_controller' => 'AppBundle\\Controller\\AdminCategoryController::formAction',));
        }

        // app.admin.category.form.delete
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/category/form/delete(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app.admin.category.form.delete')), array (  'id' => NULL,  '_controller' => 'AppBundle\\Controller\\AdminCategoryController::deleteAction',));
        }

        // app.admin.index
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'app.admin.index');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app.admin.index')), array (  '_controller' => 'AppBundle\\Controller\\AdminController::indexAction',));
        }

        // app.admin.movie.index
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/movie/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'app.admin.movie.index');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app.admin.movie.index')), array (  '_controller' => 'AppBundle\\Controller\\AdminMovieController::indexAction',));
        }

        // app.admin.movie.form
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/movie/form$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app.admin.movie.form')), array (  'id' => NULL,  '_controller' => 'AppBundle\\Controller\\AdminMovieController::formAction',));
        }

        // app.admin.movie.form.update
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/movie/form/update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app.admin.movie.form.update')), array (  'id' => NULL,  '_controller' => 'AppBundle\\Controller\\AdminMovieController::formAction',));
        }

        // app.admin.movie.form.delete
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/movie/form/delete(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app.admin.movie.form.delete')), array (  'id' => NULL,  '_controller' => 'AppBundle\\Controller\\AdminMovieController::deleteAction',));
        }

        // app.basket.view
        if (preg_match('#^/(?P<_locale>[^/]++)/basket/basket$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app.basket.view')), array (  '_controller' => 'AppBundle\\Controller\\BasketController::viewAction',));
        }

        // app.basket.remove
        if (preg_match('#^/(?P<_locale>[^/]++)/basket/basket/remove/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app.basket.remove')), array (  '_controller' => 'AppBundle\\Controller\\BasketController::removeAction',));
        }

        // app.basket.add
        if (preg_match('#^/(?P<_locale>[^/]++)/basket/basket/add/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app.basket.add')), array (  '_controller' => 'AppBundle\\Controller\\BasketController::addAction',));
        }

        // app.homepage.index
        if (preg_match('#^/(?P<_locale>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'app.homepage.index');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app.homepage.index')), array (  '_controller' => 'AppBundle\\Controller\\HomepageController::indexAction',));
        }

        // app.movie.view
        if (preg_match('#^/(?P<_locale>[^/]++)/movie/movie/(?P<id>\\d+)\\-(?P<slug>\\D+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app.movie.view')), array (  '_controller' => 'AppBundle\\Controller\\MovieController::viewAction',));
        }

        // app.order.finalisation
        if (preg_match('#^/(?P<_locale>[^/]++)/basket/order/finalisation$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app.order.finalisation')), array (  '_controller' => 'AppBundle\\Controller\\OrderController::finalisationAction',));
        }

        // app.searchmovie.search
        if (preg_match('#^/(?P<_locale>[^/]++)/searchmovie$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app.searchmovie.search')), array (  '_controller' => 'AppBundle\\Controller\\SearchMovieController::searchAction',));
        }

        // app.searchmovie.ajax
        if (preg_match('#^/(?P<_locale>[^/]++)/searchajax$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app.searchmovie.ajax')), array (  '_controller' => 'AppBundle\\Controller\\SearchMovieController::ajaxAction',));
        }

        // app.security.login
        if (preg_match('#^/(?P<_locale>[^/]++)/security/login$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app.security.login')), array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',));
        }

        // app.security.logout
        if (preg_match('#^/(?P<_locale>[^/]++)/security/logout$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app.security.logout')), array (  '_controller' => 'AppBundle\\Controller\\SecurityController::logoutAction',));
        }

        // app.security.update
        if (preg_match('#^/(?P<_locale>[^/]++)/security/security/update/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app.security.update')), array (  '_controller' => 'AppBundle\\Controller\\SecurityController::createAction',));
        }

        // app.security.create
        if (preg_match('#^/(?P<_locale>[^/]++)/security/security/create$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app.security.create')), array (  '_controller' => 'AppBundle\\Controller\\SecurityController::createAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
