<?php

namespace models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * models\Entities\Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity
 */
class Users
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $userName
     *
     * @ORM\Column(name="user_name", type="string", length=1000, nullable=false)
     */
    private $userName;

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=false)
     */
    private $email;

    /**
     * @var string $userType
     *
     * @ORM\Column(name="user_type", type="string", length=100, nullable=false)
     */
    private $userType;

    /**
     * @var string $pwd
     *
     * @ORM\Column(name="pwd", type="string", length=1000, nullable=false)
     */
    private $pwd;

    /**
     * @var datetime $dateCreated
     *
     * @ORM\Column(name="date_created", type="datetime", nullable=false)
     */
    private $dateCreated;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set userName
     *
     * @param string $userName
     * @return Users
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
        return $this;
    }

    /**
     * Get userName
     *
     * @return string 
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Users
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set userType
     *
     * @param string $userType
     * @return Users
     */
    public function setUserType($userType)
    {
        $this->userType = $userType;
        return $this;
    }

    /**
     * Get userType
     *
     * @return string 
     */
    public function getUserType()
    {
        return $this->userType;
    }

    /**
     * Set pwd
     *
     * @param string $pwd
     * @return Users
     */
    public function setPwd($pwd)
    {
        $this->pwd = $pwd;
        return $this;
    }

    /**
     * Get pwd
     *
     * @return string 
     */
    public function getPwd()
    {
        return $this->pwd;
    }

    /**
     * Set dateCreated
     *
     * @param datetime $dateCreated
     * @return Users
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;
        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return datetime 
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }
}