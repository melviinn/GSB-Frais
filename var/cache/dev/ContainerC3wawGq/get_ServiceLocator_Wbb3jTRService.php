<?php

namespace ContainerC3wawGq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Wbb3jTRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Wbb3jTR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Wbb3jTR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'etatRepository' => ['privates', 'App\\Repository\\EtatRepository', 'getEtatRepositoryService', true],
            'ficheFraisRepository' => ['privates', 'App\\Repository\\FicheFraisRepository', 'getFicheFraisRepositoryService', true],
            'fraisForfaitRepository' => ['privates', 'App\\Repository\\FraisForfaitRepository', 'getFraisForfaitRepositoryService', true],
            'ligneFraisForfaitRepository' => ['privates', 'App\\Repository\\LigneFraisForfaitRepository', 'getLigneFraisForfaitRepositoryService', true],
        ], [
            'entityManager' => '?',
            'etatRepository' => 'App\\Repository\\EtatRepository',
            'ficheFraisRepository' => 'App\\Repository\\FicheFraisRepository',
            'fraisForfaitRepository' => 'App\\Repository\\FraisForfaitRepository',
            'ligneFraisForfaitRepository' => 'App\\Repository\\LigneFraisForfaitRepository',
        ]);
    }
}
