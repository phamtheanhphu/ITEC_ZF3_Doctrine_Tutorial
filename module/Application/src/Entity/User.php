<?php

namespace Application\Entity;

use Doctrine\Common\Collections\ArrayCollection;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="users")
 */
class User {

    // User status constants.
    const STATUS_ACTIVE = 1; // Active user.
    const STATUS_RETIRED = 2; // Retired user.

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(name="id", type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(name="username", length=255, nullable=False)
     */
    protected $username;


    /**
     * @ORM\Column(name="password")
     */
    protected $password;

    /**
     * @ORM\Column(name="date_created")
     */
    protected $date_created;

    /**
     * @ORM\OneToOne(targetEntity="\Application\Entity\Profile")
     * @ORM\JoinColumn(name="profile_id", referencedColumnName="id")
     */
    protected $profile;

    /**
     * @ORM\ManyToMany(targetEntity="\Application\Entity\Group", inversedBy="groups")
     * @ORM\JoinTable(name="user_group_maps",
     *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id", onDelete="CASCADE")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="group_id", referencedColumnName="id", onDelete="CASCADE")}
     *      )
     */
    protected $groups;

    /**
     * User constructor.
     */
    public function __construct() {
        $this->groups = new ArrayCollection();
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
    public function getUsername() {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username) {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password) {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getDateCreated() {
        return $this->date_created;
    }

    /**
     * @param mixed $date_created
     */
    public function setDateCreated($date_created) {
        $this->date_created = $date_created;
    }

    /**
     * @return mixed
     */
    public function getProfile() {
        return $this->profile;
    }

    /**
     * @param mixed $profile
     */
    public function setProfile($profile) {
        $this->profile = $profile;
    }

    /**
     * @return mixed
     */
    public function getGroups() {
        return $this->groups;
    }

    /**
     * @param mixed $groups
     */
    public function setGroups($groups) {
        $this->groups[] = $groups;
    }



}



