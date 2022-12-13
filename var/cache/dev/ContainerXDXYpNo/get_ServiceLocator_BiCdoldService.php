<?php

namespace ContainerXDXYpNo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BiCdoldService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.biCdold' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.biCdold'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'visiteur' => ['privates', '.errored..service_locator.biCdold.App\\Entity\\Visiteur', NULL, 'Cannot autowire service ".service_locator.biCdold": it references class "App\\Entity\\Visiteur" but no such service exists.'],
            'visiteurRepository' => ['privates', 'App\\Repository\\VisiteurRepository', 'getVisiteurRepositoryService', true],
        ], [
            'visiteur' => 'App\\Entity\\Visiteur',
            'visiteurRepository' => 'App\\Repository\\VisiteurRepository',
        ]);
    }
}
