<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Application\Entity\Group;
use Application\Entity\Profile;
use Application\Entity\User;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController {

    /**
     * Entity manager.
     * @var \Doctrine\ORM\EntityManager
     */
    protected $_entityManager;

    /**
     * IndexController constructor.
     * @param $_entityManager
     */
    public function __construct($entityManager) {
        $this->_entityManager = $entityManager;
    }

    public function indexAction() {
        return new ViewModel();
    }

    //show-all-users
    public function showAllUsersAction() {
        $users = $this->_entityManager->getRepository(User::class)->findAll();
        return new ViewModel([
            'users' => $users
        ]);
    }

    //create-sample-data
    public function createSampleDataAction() {


        //khởi tạo 1 người dùng mới
        $user = new User();
        $user->setUsername('itec_user');
        $user->setPassword(md5('itec@user'));
        $user->setDateCreated((new \DateTime())->format('Y-m-d H:i:s'));
        $this->_entityManager->persist($user);

        //khởi tạo 1 profile cho người dùng
        $profile = new Profile();
        $profile->setFullName('ITEC');
        $profile->setAddress('227 Nguyễn Văn Cừ Q.5, TP.HCM');
        $profile->setEmail('itec@hcmus.edu.vn');
        $profile->setPhoneNumber('(84)-28-38303625');

        $this->_entityManager->persist($profile);
        $user->setProfile($profile); //gán profile cho người dùng

        //khởi tạo 1 nhóm người dùng
        $admin_group = new Group();
        $admin_group->setName('Admin');
        $admin_group->setIsAdmin(true);
        $this->_entityManager->persist($admin_group);
        $user->setGroups($admin_group); //gán người dùng này vào nhóm vừa tạo

        $this->_entityManager->flush();

    }

}
