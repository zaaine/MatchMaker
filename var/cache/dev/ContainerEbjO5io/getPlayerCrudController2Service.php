<?php

namespace ContainerEbjO5io;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPlayerCrudController2Service extends App_Infra_Application_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Infra\MatchMaker\userInterface\Controller\Admin\PlayerCrudController' shared autowired service.
     *
     * @return \App\Infra\MatchMaker\userInterface\Controller\Admin\PlayerCrudController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Contracts/Controller/CrudControllerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Controller/AbstractCrudController.php';
        include_once \dirname(__DIR__, 4).'/src/Infra/MatchMaker/UserInterface/Controller/Admin/PlayerCrudController.php';

        $container->services['App\\Infra\\MatchMaker\\userInterface\\Controller\\Admin\\PlayerCrudController'] = $instance = new \App\Infra\MatchMaker\userInterface\Controller\Admin\PlayerCrudController();

        $instance->setContainer(($container->privates['.service_locator.jHbVS8e'] ?? $container->load('get_ServiceLocator_JHbVS8eService'))->withContext('App\\Infra\\MatchMaker\\userInterface\\Controller\\Admin\\PlayerCrudController', $container));

        return $instance;
    }
}
