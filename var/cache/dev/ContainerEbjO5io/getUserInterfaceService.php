<?php

namespace ContainerEbjO5io;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserInterfaceService extends App_Infra_Application_KernelDevDebugContainer
{
    /**
     * Gets the private '.errored..service_locator.st3ASTR.Symfony\Component\Security\Core\User\UserInterface' shared service.
     *
     * @return \Symfony\Component\Security\Core\User\UserInterface
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->throw('Cannot autowire service ".service_locator.st3ASTR": it references interface "Symfony\\Component\\Security\\Core\\User\\UserInterface" but no such service exists. You should maybe alias this interface to the existing "App\\Infra\\User\\Storage\\Entity\\User" service.');
    }
}
