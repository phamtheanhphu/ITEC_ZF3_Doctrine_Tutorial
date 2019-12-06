<?php
/**
 * Created by PhpStorm.
 * User: phu.pham
 * Date: 12/6/2019
 * Time: 2:55 PM
 */

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="profiles")
 */
class Profile {

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(name="id", type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(name="full_name", length=255)
     */
    protected $full_name;

    /**
     * @ORM\Column(name="address", type="text", length=1000, nullable=True)
     */
    protected $address;

    /**
     * @ORM\Column(name="email", length=255, nullable=False)
     */
    protected $email;

    /**
     * @ORM\Column(name="phone_number", type="text", length=255, nullable=True)
     */
    protected $phone_number;

    /**
     * Profile constructor.
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
    public function getFullName() {
        return $this->full_name;
    }

    /**
     * @param mixed $full_name
     */
    public function setFullName($full_name) {
        $this->full_name = $full_name;
    }

    /**
     * @return mixed
     */
    public function getAddress() {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address) {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email) {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPhoneNumber() {
        return $this->phone_number;
    }

    /**
     * @param mixed $phone_number
     */
    public function setPhoneNumber($phone_number) {
        $this->phone_number = $phone_number;
    }




}