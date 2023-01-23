<?php

namespace ContainerJsx73cz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XkzRPlService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.xkzR_pl' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.xkzR_pl'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ficheFraisRepository' => ['privates', 'App\\Repository\\FicheFraisRepository', 'getFicheFraisRepositoryService', true],
            'fraisForfaitRepository' => ['privates', 'App\\Repository\\FraisForfaitRepository', 'getFraisForfaitRepositoryService', true],
            'ligneFraisForfaitRepository' => ['privates', 'App\\Repository\\LigneFraisForfaitRepository', 'getLigneFraisForfaitRepositoryService', true],
            'ligneFraisHorsForfaitRepository' => ['privates', 'App\\Repository\\LigneFraisHorsForfaitRepository', 'getLigneFraisHorsForfaitRepositoryService', true],
        ], [
            'ficheFraisRepository' => 'App\\Repository\\FicheFraisRepository',
            'fraisForfaitRepository' => 'App\\Repository\\FraisForfaitRepository',
            'ligneFraisForfaitRepository' => 'App\\Repository\\LigneFraisForfaitRepository',
            'ligneFraisHorsForfaitRepository' => 'App\\Repository\\LigneFraisHorsForfaitRepository',
        ]);
    }
}
