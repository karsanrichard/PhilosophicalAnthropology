<?php

namespace models\Entities;

use Doctrine\Mapping as ORM;

/**
 * models\Entities\User
 *
 * @Table(name="user")
 * @Entity
 */
class User
{
    /**
     * @var integer $userid
     *
     * @Column(name="userid", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $userid;

    /**
     * @var string $userName
     *
     * @Column(name="user_name", type="string", length=45, nullable=false)
     */
    private $userName;

    /**
     * @var string $userPassword
     *
     * @Column(name="user_password", type="string", length=255, nullable=false)
     */
    private $userPassword;


    /**
     * Get userid
     *
     * @return integer 
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set userName
     *
     * @param string $userName
     * @return User
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
     * Set userPassword
     *
     * @param string $userPassword
     * @return User
     */
    public function setUserPassword($userPassword)
    {
        $this->userPassword = $userPassword;
        return $this;
    }

    /**
     * Get userPassword
     *
     * @return string 
     */
    public function getUserPassword()
    {
        return $this->userPassword;
    }
}