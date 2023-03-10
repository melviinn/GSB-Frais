<?php

namespace ContainerC3wawGq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OKYopqzService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.oKYopqz' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.oKYopqz'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'authenticationUtils' => ['privates', 'security.authentication_utils', 'getSecurity_AuthenticationUtilsService', true],
            'user' => ['privates', '.errored..service_locator.oKYopqz.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.oKYopqz": it references class "App\\Entity\\User" but no such service exists.'],
        ], [
            'authenticationUtils' => '?',
            'user' => 'App\\Entity\\User',
        ]);
    }
}
