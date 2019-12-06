<?php
/**
 * Created by PhpStorm.
 * User: phu.pham
 * Date: 12/6/2019
 * Time: 3:35 PM
 */
namespace Application\Controller\Factory;

use Application\Controller\IndexController;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class IndexControllerFactory implements FactoryInterface {

    public function __invoke(ContainerInterface $container, $requestedName, array $options = null) {
        $entityManager = $container->get('doctrine.entitymanager.orm_default');
        return new IndexController($entityManager);
    }

}