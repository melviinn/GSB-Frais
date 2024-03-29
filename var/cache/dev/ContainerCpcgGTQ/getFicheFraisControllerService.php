<?php

namespace ContainerCpcgGTQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFicheFraisControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\FicheFraisController' shared autowired service.
     *
     * @return \App\Controller\FicheFraisController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/FicheFraisController.php';

        $container->services['App\\Controller\\FicheFraisController'] = $instance = new \App\Controller\FicheFraisController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\FicheFraisController', $container));

        return $instance;
    }
}
