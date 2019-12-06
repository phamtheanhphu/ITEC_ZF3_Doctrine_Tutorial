<?php
/**
 * Created by PhpStorm.
 * User: PHUPHAM
 * Date: 1/22/2018
 * Time: 9:23 PM
 */

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="groups")
 */
class Group {

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(name="id", type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(name="name", length=255, nullable=False)
     */
    protected $name;

    /**
     * @ORM\Column(name="is_admin", type="boolean", nullable=False)
     */
    protected $is_admin = False;

    /**
     * @ORM\ManyToMany(targetEntity="\Application\Entity\User", mappedBy="groups")
     */
    protected $users;


    /**
     * Group constructor.
     */
    public function __construct() {
    }

    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id) {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name) {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getUsers() {
        return $this->users;
    }

    /**
     * @param mixed $users
     */
    public function setUsers($users) {
        $this->users = $users;
    }

    /**
     * @return mixed
     */
    public function getIsAdmin() {
        return $this->is_admin;
    }

    /**
     * @param mixed $is_admin
     */
    public function setIsAdmin($is_admin) {
        $this->is_admin = $is_admin;
    }


}