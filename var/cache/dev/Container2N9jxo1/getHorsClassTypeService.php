<?php

namespace Container2N9jxo1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHorsClassTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\HorsClassType' shared autowired service.
     *
     * @return \App\Form\HorsClassType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/HorsClassType.php';

        return $container->privates['App\\Form\\HorsClassType'] = new \App\Form\HorsClassType();
    }
}
