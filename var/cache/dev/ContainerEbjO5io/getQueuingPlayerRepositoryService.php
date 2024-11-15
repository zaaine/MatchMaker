<?php

namespace ContainerEbjO5io;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getQueuingPlayerRepositoryService extends App_Infra_Application_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Infra\MatchMaker\Storage\Repository\QueuingPlayerRepository' shared autowired service.
     *
     * @return \App\Infra\MatchMaker\Storage\Repository\QueuingPlayerRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Infra/MatchMaker/Storage/Repository/QueuingPlayerRepository.php';

        return $container->privates['App\\Infra\\MatchMaker\\Storage\\Repository\\QueuingPlayerRepository'] = new \App\Infra\MatchMaker\Storage\Repository\QueuingPlayerRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
