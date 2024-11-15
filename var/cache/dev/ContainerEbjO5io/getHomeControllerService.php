<?php

namespace ContainerEbjO5io;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHomeControllerService extends App_Infra_Application_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Infra\MatchMaker\UserInterface\Controller\HomeController' shared autowired service.
     *
     * @return \App\Infra\MatchMaker\UserInterface\Controller\HomeController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Infra/MatchMaker/UserInterface/Controller/HomeController.php';

        $container->services['App\\Infra\\MatchMaker\\UserInterface\\Controller\\HomeController'] = $instance = new \App\Infra\MatchMaker\UserInterface\Controller\HomeController();

        $instance->setContainer(($container->privates['.service_locator.ULEwkxg'] ?? $container->load('get_ServiceLocator_ULEwkxgService'))->withContext('App\\Infra\\MatchMaker\\UserInterface\\Controller\\HomeController', $container));

        return $instance;
    }
}