<?php

namespace ContainerC3wawGq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getChoixValidationFicheFraisTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\ChoixValidationFicheFraisType' shared autowired service.
     *
     * @return \App\Form\ChoixValidationFicheFraisType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/ChoixValidationFicheFraisType.php';

        return $container->privates['App\\Form\\ChoixValidationFicheFraisType'] = new \App\Form\ChoixValidationFicheFraisType();
    }
}
