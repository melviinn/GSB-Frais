<?php

namespace ContainerY4qUXPi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRenseignerFicheFraisFormTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\RenseignerFicheFraisFormType' shared autowired service.
     *
     * @return \App\Form\RenseignerFicheFraisFormType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/RenseignerFicheFraisFormType.php';

        return $container->privates['App\\Form\\RenseignerFicheFraisFormType'] = new \App\Form\RenseignerFicheFraisFormType();
    }
}
