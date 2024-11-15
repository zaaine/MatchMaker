<?php

namespace ContainerEbjO5io;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_CacheCollectionRegionCommandService extends App_Infra_Application_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine.cache_collection_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CollectionRegionDoctrineCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/Tools/Console/Command/AbstractEntityManagerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/Tools/Console/CommandCompatibility.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/Tools/Console/Command/ClearCache/CollectionRegionCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/OrmProxyCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/CollectionRegionDoctrineCommand.php';

        $container->privates['doctrine.cache_collection_region_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CollectionRegionDoctrineCommand(($container->privates['doctrine.orm.command.entity_manager_provider'] ?? $container->load('getDoctrine_Orm_Command_EntityManagerProviderService')));

        $instance->setName('doctrine:cache:clear-collection-region');

        return $instance;
    }
}
