<?php

namespace ContainerXffMAyJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authenticator_Manager_MainService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.authenticator.manager.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\AuthenticatorManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticatorManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/UserAuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticatorManager.php';

        $a = ($container->privates['security.authenticator.form_login.main'] ?? $container->load('getSecurity_Authenticator_FormLogin_MainService'));

        if (isset($container->privates['security.authenticator.manager.main'])) {
            return $container->privates['security.authenticator.manager.main'];
        }

        return $container->privates['security.authenticator.manager.main'] = new \Symfony\Component\Security\Http\Authentication\AuthenticatorManager([0 => ($container->privates['App\\Security\\UserAuthenticator'] ?? $container->load('getUserAuthenticatorService')), 1 => ($container->privates['App\\Security\\VisiteurAuthenticator'] ?? $container->load('getVisiteurAuthenticatorService')), 2 => ($container->privates['App\\Security\\ComptableAuthenticator'] ?? $container->load('getComptableAuthenticatorService')), 3 => $a], ($container->privates['security.token_storage'] ?? $container->getSecurity_TokenStorageService()), ($container->privates['security.event_dispatcher.main'] ?? $container->getSecurity_EventDispatcher_MainService()), 'main', ($container->privates['logger'] ?? ($container->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), true, true, []);
    }
}
