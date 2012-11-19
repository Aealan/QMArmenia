<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        // _demo_login
        if ($pathinfo === '/demo/secured/login') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
        }

        // _security_check
        if ($pathinfo === '/demo/secured/login_check') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
        }

        // _demo_logout
        if ($pathinfo === '/demo/secured/logout') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
        }

        // acme_demo_secured_hello
        if ($pathinfo === '/demo/secured/hello') {
            return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
        }

        // _demo_secured_hello
        if (0 === strpos($pathinfo, '/demo/secured/hello') && preg_match('#^/demo/secured/hello/(?<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',)), array('_route' => '_demo_secured_hello'));
        }

        // _demo_secured_hello_admin
        if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',)), array('_route' => '_demo_secured_hello_admin'));
        }

        // _demo
        if (rtrim($pathinfo, '/') === '/demo') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_demo');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
        }

        // _demo_hello
        if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',)), array('_route' => '_demo_hello'));
        }

        // _demo_contact
        if ($pathinfo === '/demo/contact') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
        }

        // _wdt
        if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?<token>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_info
            if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?<about>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::infoAction',)), array('_route' => '_profiler_info'));
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?<token>[^/\\.]+)\\.txt$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_phpinfo
            if ($pathinfo === '/_profiler/phpinfo') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::phpinfoAction',  '_route' => '_profiler_phpinfo',);
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?<token>[^/]+)/search/results$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?<token>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

            // _profiler_redirect
            if (rtrim($pathinfo, '/') === '/_profiler') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_profiler_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => '_profiler_search_results',  'token' => 'empty',  'ip' => '',  'url' => '',  'method' => '',  'limit' => '10',  '_route' => '_profiler_redirect',);
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
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?<index>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        if (0 === strpos($pathinfo, '/alimentos')) {
            // S31_homepage
            if (rtrim($pathinfo, '/') === '/alimentos') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'S31_homepage');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DefaultController::indexAction',  '_route' => 'S31_homepage',);
            }

            // JAMAB_listar
            if ($pathinfo === '/alimentos/listar') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DefaultController::listarAction',  '_route' => 'JAMAB_listar',);
            }

            // JAMAB_insertar
            if ($pathinfo === '/alimentos/insertar') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DefaultController::insertarAction',  '_route' => 'JAMAB_insertar',);
            }

            // JAMAB_buscar
            if ($pathinfo === '/alimentos/buscar') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DefaultController::buscarPorNombreAction',  '_route' => 'JAMAB_buscar',);
            }

            // JAMAB_ver
            if ($pathinfo === '/alimentos/ver') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DefaultController::verAction',  '_route' => 'JAMAB_ver',);
            }

        }

        // S3_homepage
        if ($pathinfo === '/QM') {
            return array (  '_controller' => 'Quindimotos\\ProyectoBundle\\Controller\\DefaultController::indexAction',  '_route' => 'S3_homepage',);
        }

        // cliente
        if (rtrim($pathinfo, '/') === '/cliente') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'cliente');
            }

            return array (  '_controller' => 'Quindimotos\\ProyectoBundle\\Controller\\ClienteController::indexAction',  '_route' => 'cliente',);
        }

        // cliente_show
        if (0 === strpos($pathinfo, '/cliente') && preg_match('#^/cliente/(?<id>[^/]+)/show$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Quindimotos\\ProyectoBundle\\Controller\\ClienteController::showAction',)), array('_route' => 'cliente_show'));
        }

        // cliente_new
        if ($pathinfo === '/cliente/new') {
            return array (  '_controller' => 'Quindimotos\\ProyectoBundle\\Controller\\ClienteController::newAction',  '_route' => 'cliente_new',);
        }

        // cliente_create
        if ($pathinfo === '/cliente/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_cliente_create;
            }

            return array (  '_controller' => 'Quindimotos\\ProyectoBundle\\Controller\\ClienteController::createAction',  '_route' => 'cliente_create',);
        }
        not_cliente_create:

        // cliente_edit
        if (0 === strpos($pathinfo, '/cliente') && preg_match('#^/cliente/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Quindimotos\\ProyectoBundle\\Controller\\ClienteController::editAction',)), array('_route' => 'cliente_edit'));
        }

        // cliente_update
        if (0 === strpos($pathinfo, '/cliente') && preg_match('#^/cliente/(?<id>[^/]+)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_cliente_update;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Quindimotos\\ProyectoBundle\\Controller\\ClienteController::updateAction',)), array('_route' => 'cliente_update'));
        }
        not_cliente_update:

        // cliente_delete
        if (0 === strpos($pathinfo, '/cliente') && preg_match('#^/cliente/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_cliente_delete;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Quindimotos\\ProyectoBundle\\Controller\\ClienteController::deleteAction',)), array('_route' => 'cliente_delete'));
        }
        not_cliente_delete:

        // ajax_nivel
        if ($pathinfo === '/cliente/ajaxNivel') {
            return array (  '_controller' => 'Quindimotos\\ProyectoBundle\\Controller\\ClienteController::ajaxNivelAction',  '_route' => 'ajax_nivel',);
        }

        // empleado
        if (rtrim($pathinfo, '/') === '/empleado') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'empleado');
            }

            return array (  '_controller' => 'Quindimotos\\ProyectoBundle\\Controller\\EmpleadoController::indexAction',  '_route' => 'empleado',);
        }

        // empleado_show
        if (0 === strpos($pathinfo, '/empleado') && preg_match('#^/empleado/(?<id>[^/]+)/show$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Quindimotos\\ProyectoBundle\\Controller\\EmpleadoController::showAction',)), array('_route' => 'empleado_show'));
        }

        // empleado_new
        if ($pathinfo === '/empleado/new') {
            return array (  '_controller' => 'Quindimotos\\ProyectoBundle\\Controller\\EmpleadoController::newAction',  '_route' => 'empleado_new',);
        }

        // empleado_create
        if ($pathinfo === '/empleado/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_empleado_create;
            }

            return array (  '_controller' => 'Quindimotos\\ProyectoBundle\\Controller\\EmpleadoController::createAction',  '_route' => 'empleado_create',);
        }
        not_empleado_create:

        // empleado_edit
        if (0 === strpos($pathinfo, '/empleado') && preg_match('#^/empleado/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Quindimotos\\ProyectoBundle\\Controller\\EmpleadoController::editAction',)), array('_route' => 'empleado_edit'));
        }

        // empleado_update
        if (0 === strpos($pathinfo, '/empleado') && preg_match('#^/empleado/(?<id>[^/]+)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_empleado_update;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Quindimotos\\ProyectoBundle\\Controller\\EmpleadoController::updateAction',)), array('_route' => 'empleado_update'));
        }
        not_empleado_update:

        // empleado_delete
        if (0 === strpos($pathinfo, '/empleado') && preg_match('#^/empleado/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_empleado_delete;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Quindimotos\\ProyectoBundle\\Controller\\EmpleadoController::deleteAction',)), array('_route' => 'empleado_delete'));
        }
        not_empleado_delete:

        // inventariomoto
        if (rtrim($pathinfo, '/') === '/inventariomoto') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'inventariomoto');
            }

            return array (  '_controller' => 'Quindimotos\\ProyectoBundle\\Controller\\InventariomotoController::indexAction',  '_route' => 'inventariomoto',);
        }

        // inventariomoto_show
        if (0 === strpos($pathinfo, '/inventariomoto') && preg_match('#^/inventariomoto/(?<id>[^/]+)/show$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Quindimotos\\ProyectoBundle\\Controller\\InventariomotoController::showAction',)), array('_route' => 'inventariomoto_show'));
        }

        // inventariomoto_new
        if ($pathinfo === '/inventariomoto/new') {
            return array (  '_controller' => 'Quindimotos\\ProyectoBundle\\Controller\\InventariomotoController::newAction',  '_route' => 'inventariomoto_new',);
        }

        // inventariomoto_create
        if ($pathinfo === '/inventariomoto/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_inventariomoto_create;
            }

            return array (  '_controller' => 'Quindimotos\\ProyectoBundle\\Controller\\InventariomotoController::createAction',  '_route' => 'inventariomoto_create',);
        }
        not_inventariomoto_create:

        // inventariomoto_edit
        if (0 === strpos($pathinfo, '/inventariomoto') && preg_match('#^/inventariomoto/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Quindimotos\\ProyectoBundle\\Controller\\InventariomotoController::editAction',)), array('_route' => 'inventariomoto_edit'));
        }

        // inventariomoto_update
        if (0 === strpos($pathinfo, '/inventariomoto') && preg_match('#^/inventariomoto/(?<id>[^/]+)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_inventariomoto_update;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Quindimotos\\ProyectoBundle\\Controller\\InventariomotoController::updateAction',)), array('_route' => 'inventariomoto_update'));
        }
        not_inventariomoto_update:

        // inventariomoto_delete
        if (0 === strpos($pathinfo, '/inventariomoto') && preg_match('#^/inventariomoto/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_inventariomoto_delete;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Quindimotos\\ProyectoBundle\\Controller\\InventariomotoController::deleteAction',)), array('_route' => 'inventariomoto_delete'));
        }
        not_inventariomoto_delete:

        // moto
        if (rtrim($pathinfo, '/') === '/moto') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'moto');
            }

            return array (  '_controller' => 'Quindimotos\\ProyectoBundle\\Controller\\MotoController::indexAction',  '_route' => 'moto',);
        }

        // moto_show
        if (0 === strpos($pathinfo, '/moto') && preg_match('#^/moto/(?<id>[^/]+)/show$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Quindimotos\\ProyectoBundle\\Controller\\MotoController::showAction',)), array('_route' => 'moto_show'));
        }

        // moto_new
        if ($pathinfo === '/moto/new') {
            return array (  '_controller' => 'Quindimotos\\ProyectoBundle\\Controller\\MotoController::newAction',  '_route' => 'moto_new',);
        }

        // moto_create
        if ($pathinfo === '/moto/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_moto_create;
            }

            return array (  '_controller' => 'Quindimotos\\ProyectoBundle\\Controller\\MotoController::createAction',  '_route' => 'moto_create',);
        }
        not_moto_create:

        // moto_edit
        if (0 === strpos($pathinfo, '/moto') && preg_match('#^/moto/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Quindimotos\\ProyectoBundle\\Controller\\MotoController::editAction',)), array('_route' => 'moto_edit'));
        }

        // moto_update
        if (0 === strpos($pathinfo, '/moto') && preg_match('#^/moto/(?<id>[^/]+)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_moto_update;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Quindimotos\\ProyectoBundle\\Controller\\MotoController::updateAction',)), array('_route' => 'moto_update'));
        }
        not_moto_update:

        // moto_delete
        if (0 === strpos($pathinfo, '/moto') && preg_match('#^/moto/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_moto_delete;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Quindimotos\\ProyectoBundle\\Controller\\MotoController::deleteAction',)), array('_route' => 'moto_delete'));
        }
        not_moto_delete:

        // role
        if (rtrim($pathinfo, '/') === '/role') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'role');
            }

            return array (  '_controller' => 'Quindimotos\\ProyectoBundle\\Controller\\RoleController::indexAction',  '_route' => 'role',);
        }

        // role_show
        if (0 === strpos($pathinfo, '/role') && preg_match('#^/role/(?<id>[^/]+)/show$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Quindimotos\\ProyectoBundle\\Controller\\RoleController::showAction',)), array('_route' => 'role_show'));
        }

        // role_new
        if ($pathinfo === '/role/new') {
            return array (  '_controller' => 'Quindimotos\\ProyectoBundle\\Controller\\RoleController::newAction',  '_route' => 'role_new',);
        }

        // role_create
        if ($pathinfo === '/role/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_role_create;
            }

            return array (  '_controller' => 'Quindimotos\\ProyectoBundle\\Controller\\RoleController::createAction',  '_route' => 'role_create',);
        }
        not_role_create:

        // role_edit
        if (0 === strpos($pathinfo, '/role') && preg_match('#^/role/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Quindimotos\\ProyectoBundle\\Controller\\RoleController::editAction',)), array('_route' => 'role_edit'));
        }

        // role_update
        if (0 === strpos($pathinfo, '/role') && preg_match('#^/role/(?<id>[^/]+)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_role_update;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Quindimotos\\ProyectoBundle\\Controller\\RoleController::updateAction',)), array('_route' => 'role_update'));
        }
        not_role_update:

        // role_delete
        if (0 === strpos($pathinfo, '/role') && preg_match('#^/role/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_role_delete;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Quindimotos\\ProyectoBundle\\Controller\\RoleController::deleteAction',)), array('_route' => 'role_delete'));
        }
        not_role_delete:

        // QUINDI_RegistarSolicitud
        if ($pathinfo === '/regisSol') {
            return array (  '_controller' => 'Quindimotos\\ProyectoBundle\\Controller\\NavegationController::registarSolicitudAction',  '_route' => 'QUINDI_RegistarSolicitud',);
        }

        // QUINDI_tecnicosDisponibles
        if ($pathinfo === '/tec_Dis') {
            return array (  '_controller' => 'Quindimotos\\ProyectoBundle\\Controller\\NavegationController::tecnicosDisponiblesAction',  '_route' => 'QUINDI_tecnicosDisponibles',);
        }

        // QUINDI_regAndN
        if ($pathinfo === '/regAndN') {
            return array (  '_controller' => 'Quindimotos\\ProyectoBundle\\Controller\\NavegationController::regisAndNotifyAction',  '_route' => 'QUINDI_regAndN',);
        }

        // QUINDI_regUser
        if ($pathinfo === '/regUser') {
            return array (  '_controller' => 'Quindimotos\\ProyectoBundle\\Controller\\NavegationController::registarUsuariosSistemaAction',  '_route' => 'QUINDI_regUser',);
        }

        // fos_user_security_login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
        }

        // fos_user_security_check
        if ($pathinfo === '/login_check') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
        }

        // fos_user_security_logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if (rtrim($pathinfo, '/') === '/register') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
            }

            // fos_user_registration_check_email
            if ($pathinfo === '/register/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
            }
            not_fos_user_registration_check_email:

            // fos_user_registration_confirm
            if (0 === strpos($pathinfo, '/register/confirm') && preg_match('#^/register/confirm/(?<token>[^/]+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_confirm;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',)), array('_route' => 'fos_user_registration_confirm'));
            }
            not_fos_user_registration_confirm:

            // fos_user_registration_confirmed
            if ($pathinfo === '/register/confirmed') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_confirmed;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
            }
            not_fos_user_registration_confirmed:

        }

        if (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ($pathinfo === '/resetting/request') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_send_email
            if ($pathinfo === '/resetting/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ($pathinfo === '/resetting/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?<token>[^/]+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_resetting_reset;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',)), array('_route' => 'fos_user_resetting_reset'));
            }
            not_fos_user_resetting_reset:

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
