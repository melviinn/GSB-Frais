<?php

namespace ContainerY4qUXPi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UIbAps0Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.UIbAps0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.UIbAps0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'ficheFraisRepository' => ['privates', 'App\\Repository\\FicheFraisRepository', 'getFicheFraisRepositoryService', true],
            'fraisForfaitRepository' => ['privates', 'App\\Repository\\FraisForfaitRepository', 'getFraisForfaitRepositoryService', true],
            'ligneFraisForfaitRepository' => ['privates', 'App\\Repository\\LigneFraisForfaitRepository', 'getLigneFraisForfaitRepositoryService', true],
            'ligneFraisHorsForfaitRepository' => ['privates', 'App\\Repository\\LigneFraisHorsForfaitRepository', 'getLigneFraisHorsForfaitRepositoryService', true],
        ], [
            'em' => '?',
            'ficheFraisRepository' => 'App\\Repository\\FicheFraisRepository',
            'fraisForfaitRepository' => 'App\\Repository\\FraisForfaitRepository',
            'ligneFraisForfaitRepository' => 'App\\Repository\\LigneFraisForfaitRepository',
            'ligneFraisHorsForfaitRepository' => 'App\\Repository\\LigneFraisHorsForfaitRepository',
        ]);
    }
}
