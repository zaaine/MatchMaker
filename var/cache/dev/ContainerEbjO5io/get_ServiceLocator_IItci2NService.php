<?php

namespace ContainerEbjO5io;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IItci2NService extends App_Infra_Application_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.IItci2N' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.IItci2N'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'encounter' => ['privates', '.errored..service_locator.IItci2N.App\\Domain\\MatchMaker\\Encounter\\Encounter', NULL, 'Cannot autowire service ".service_locator.IItci2N": it references class "App\\Domain\\MatchMaker\\Encounter\\Encounter" but no such service exists.'],
        ], [
            'encounter' => 'App\\Domain\\MatchMaker\\Encounter\\Encounter',
        ]);
    }
}
