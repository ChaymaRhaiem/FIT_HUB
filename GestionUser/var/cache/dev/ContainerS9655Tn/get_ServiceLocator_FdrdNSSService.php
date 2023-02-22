<?php

namespace ContainerS9655Tn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FdrdNSSService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.FdrdNSS' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.FdrdNSS'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.iQAD6w2', 'get_ServiceLocator_IQAD6w2Service', true],
            'App\\Controller\\RoleuserController::delete' => ['privates', '.service_locator.RfL869e', 'get_ServiceLocator_RfL869eService', true],
            'App\\Controller\\RoleuserController::edit' => ['privates', '.service_locator.RfL869e', 'get_ServiceLocator_RfL869eService', true],
            'App\\Controller\\RoleuserController::index' => ['privates', '.service_locator.RbfU4Yc', 'get_ServiceLocator_RbfU4YcService', true],
            'App\\Controller\\RoleuserController::new' => ['privates', '.service_locator.RbfU4Yc', 'get_ServiceLocator_RbfU4YcService', true],
            'App\\Controller\\RoleuserController::show' => ['privates', '.service_locator.d96EX5O', 'get_ServiceLocator_D96EX5OService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\UserController::delete' => ['privates', '.service_locator.9uW928t', 'get_ServiceLocator_9uW928tService', true],
            'App\\Controller\\UserController::edit' => ['privates', '.service_locator.9uW928t', 'get_ServiceLocator_9uW928tService', true],
            'App\\Controller\\UserController::index' => ['privates', '.service_locator.Q1F27w5', 'get_ServiceLocator_Q1F27w5Service', true],
            'App\\Controller\\UserController::new' => ['privates', '.service_locator.Q1F27w5', 'get_ServiceLocator_Q1F27w5Service', true],
            'App\\Controller\\UserController::show' => ['privates', '.service_locator.4T4EJFR', 'get_ServiceLocator_4T4EJFRService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.iQAD6w2', 'get_ServiceLocator_IQAD6w2Service', true],
            'App\\Controller\\RoleuserController:delete' => ['privates', '.service_locator.RfL869e', 'get_ServiceLocator_RfL869eService', true],
            'App\\Controller\\RoleuserController:edit' => ['privates', '.service_locator.RfL869e', 'get_ServiceLocator_RfL869eService', true],
            'App\\Controller\\RoleuserController:index' => ['privates', '.service_locator.RbfU4Yc', 'get_ServiceLocator_RbfU4YcService', true],
            'App\\Controller\\RoleuserController:new' => ['privates', '.service_locator.RbfU4Yc', 'get_ServiceLocator_RbfU4YcService', true],
            'App\\Controller\\RoleuserController:show' => ['privates', '.service_locator.d96EX5O', 'get_ServiceLocator_D96EX5OService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\UserController:delete' => ['privates', '.service_locator.9uW928t', 'get_ServiceLocator_9uW928tService', true],
            'App\\Controller\\UserController:edit' => ['privates', '.service_locator.9uW928t', 'get_ServiceLocator_9uW928tService', true],
            'App\\Controller\\UserController:index' => ['privates', '.service_locator.Q1F27w5', 'get_ServiceLocator_Q1F27w5Service', true],
            'App\\Controller\\UserController:new' => ['privates', '.service_locator.Q1F27w5', 'get_ServiceLocator_Q1F27w5Service', true],
            'App\\Controller\\UserController:show' => ['privates', '.service_locator.4T4EJFR', 'get_ServiceLocator_4T4EJFRService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\RoleuserController::delete' => '?',
            'App\\Controller\\RoleuserController::edit' => '?',
            'App\\Controller\\RoleuserController::index' => '?',
            'App\\Controller\\RoleuserController::new' => '?',
            'App\\Controller\\RoleuserController::show' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\UserController::delete' => '?',
            'App\\Controller\\UserController::edit' => '?',
            'App\\Controller\\UserController::index' => '?',
            'App\\Controller\\UserController::new' => '?',
            'App\\Controller\\UserController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\RoleuserController:delete' => '?',
            'App\\Controller\\RoleuserController:edit' => '?',
            'App\\Controller\\RoleuserController:index' => '?',
            'App\\Controller\\RoleuserController:new' => '?',
            'App\\Controller\\RoleuserController:show' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\UserController:delete' => '?',
            'App\\Controller\\UserController:edit' => '?',
            'App\\Controller\\UserController:index' => '?',
            'App\\Controller\\UserController:new' => '?',
            'App\\Controller\\UserController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
