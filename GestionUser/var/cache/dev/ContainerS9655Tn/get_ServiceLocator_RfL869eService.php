<?php

namespace ContainerS9655Tn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RfL869eService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.RfL869e' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.RfL869e'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'roleuser' => ['privates', '.errored..service_locator.RfL869e.App\\Entity\\Roleuser', NULL, 'Cannot autowire service ".service_locator.RfL869e": it references class "App\\Entity\\Roleuser" but no such service exists.'],
            'roleuserRepository' => ['privates', 'App\\Repository\\RoleuserRepository', 'getRoleuserRepositoryService', true],
        ], [
            'roleuser' => 'App\\Entity\\Roleuser',
            'roleuserRepository' => 'App\\Repository\\RoleuserRepository',
        ]);
    }
}
