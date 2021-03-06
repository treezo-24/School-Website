<?php

namespace ContainerHBSZ1zw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_O8Pg6nzService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.O8Pg6nz' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.O8Pg6nz'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ControllerBeastController::addClasses' => ['privates', '.service_locator.5miB8_X', 'get_ServiceLocator_5miB8XService', true],
            'App\\Controller\\ControllerBeastController::addCourses' => ['privates', '.service_locator.5miB8_X', 'get_ServiceLocator_5miB8XService', true],
            'App\\Controller\\ControllerBeastController::addStudents' => ['privates', '.service_locator.5miB8_X', 'get_ServiceLocator_5miB8XService', true],
            'App\\Controller\\ControllerBeastController::deleteC' => ['privates', '.service_locator.5miB8_X', 'get_ServiceLocator_5miB8XService', true],
            'App\\Controller\\ControllerBeastController::deleteClasses' => ['privates', '.service_locator.5miB8_X', 'get_ServiceLocator_5miB8XService', true],
            'App\\Controller\\ControllerBeastController::deleteS' => ['privates', '.service_locator.5miB8_X', 'get_ServiceLocator_5miB8XService', true],
            'App\\Controller\\ControllerBeastController::edit' => ['privates', '.service_locator.hQ0iuw7', 'get_ServiceLocator_HQ0iuw7Service', true],
            'App\\Controller\\ControllerBeastController::editClasses' => ['privates', '.service_locator.IR1PjSX', 'get_ServiceLocator_IR1PjSXService', true],
            'App\\Controller\\ControllerBeastController::editCourses' => ['privates', '.service_locator.bhO19p3', 'get_ServiceLocator_BhO19p3Service', true],
            'App\\Controller\\ControllerBeastController::listClasses' => ['privates', '.service_locator.xpnMaGG', 'get_ServiceLocator_XpnMaGGService', true],
            'App\\Controller\\ControllerBeastController::listCourses' => ['privates', '.service_locator.6U4gQnZ', 'get_ServiceLocator_6U4gQnZService', true],
            'App\\Controller\\ControllerBeastController::listStudents' => ['privates', '.service_locator.bA9gThy', 'get_ServiceLocator_BA9gThyService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\ControllerBeastController:addClasses' => ['privates', '.service_locator.5miB8_X', 'get_ServiceLocator_5miB8XService', true],
            'App\\Controller\\ControllerBeastController:addCourses' => ['privates', '.service_locator.5miB8_X', 'get_ServiceLocator_5miB8XService', true],
            'App\\Controller\\ControllerBeastController:addStudents' => ['privates', '.service_locator.5miB8_X', 'get_ServiceLocator_5miB8XService', true],
            'App\\Controller\\ControllerBeastController:deleteC' => ['privates', '.service_locator.5miB8_X', 'get_ServiceLocator_5miB8XService', true],
            'App\\Controller\\ControllerBeastController:deleteClasses' => ['privates', '.service_locator.5miB8_X', 'get_ServiceLocator_5miB8XService', true],
            'App\\Controller\\ControllerBeastController:deleteS' => ['privates', '.service_locator.5miB8_X', 'get_ServiceLocator_5miB8XService', true],
            'App\\Controller\\ControllerBeastController:edit' => ['privates', '.service_locator.hQ0iuw7', 'get_ServiceLocator_HQ0iuw7Service', true],
            'App\\Controller\\ControllerBeastController:editClasses' => ['privates', '.service_locator.IR1PjSX', 'get_ServiceLocator_IR1PjSXService', true],
            'App\\Controller\\ControllerBeastController:editCourses' => ['privates', '.service_locator.bhO19p3', 'get_ServiceLocator_BhO19p3Service', true],
            'App\\Controller\\ControllerBeastController:listClasses' => ['privates', '.service_locator.xpnMaGG', 'get_ServiceLocator_XpnMaGGService', true],
            'App\\Controller\\ControllerBeastController:listCourses' => ['privates', '.service_locator.6U4gQnZ', 'get_ServiceLocator_6U4gQnZService', true],
            'App\\Controller\\ControllerBeastController:listStudents' => ['privates', '.service_locator.bA9gThy', 'get_ServiceLocator_BA9gThyService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\ControllerBeastController::addClasses' => '?',
            'App\\Controller\\ControllerBeastController::addCourses' => '?',
            'App\\Controller\\ControllerBeastController::addStudents' => '?',
            'App\\Controller\\ControllerBeastController::deleteC' => '?',
            'App\\Controller\\ControllerBeastController::deleteClasses' => '?',
            'App\\Controller\\ControllerBeastController::deleteS' => '?',
            'App\\Controller\\ControllerBeastController::edit' => '?',
            'App\\Controller\\ControllerBeastController::editClasses' => '?',
            'App\\Controller\\ControllerBeastController::editCourses' => '?',
            'App\\Controller\\ControllerBeastController::listClasses' => '?',
            'App\\Controller\\ControllerBeastController::listCourses' => '?',
            'App\\Controller\\ControllerBeastController::listStudents' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\ControllerBeastController:addClasses' => '?',
            'App\\Controller\\ControllerBeastController:addCourses' => '?',
            'App\\Controller\\ControllerBeastController:addStudents' => '?',
            'App\\Controller\\ControllerBeastController:deleteC' => '?',
            'App\\Controller\\ControllerBeastController:deleteClasses' => '?',
            'App\\Controller\\ControllerBeastController:deleteS' => '?',
            'App\\Controller\\ControllerBeastController:edit' => '?',
            'App\\Controller\\ControllerBeastController:editClasses' => '?',
            'App\\Controller\\ControllerBeastController:editCourses' => '?',
            'App\\Controller\\ControllerBeastController:listClasses' => '?',
            'App\\Controller\\ControllerBeastController:listCourses' => '?',
            'App\\Controller\\ControllerBeastController:listStudents' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
