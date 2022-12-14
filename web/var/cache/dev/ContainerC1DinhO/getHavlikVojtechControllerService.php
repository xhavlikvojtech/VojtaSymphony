<?php

namespace ContainerC1DinhO;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHavlikVojtechControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\HavlikVojtechController' shared autowired service.
     *
     * @return \App\Controller\HavlikVojtechController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/BaseController.php';
        include_once \dirname(__DIR__, 4) . '/src/Controller/HavlikVojtechController.php';

        $container->services['App\\Controller\\HavlikVojtechController'] = $instance = new \App\Controller\HavlikVojtechController();

        $instance->setContainer(($container->privates['.service_locator.l1ae.Qz'] ?? $container->load('get_ServiceLocator_L1ae_QzService'))->withContext('App\\Controller\\BartaController', $container));

        return $instance;
    }
}
