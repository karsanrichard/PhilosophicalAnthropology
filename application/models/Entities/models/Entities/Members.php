<?php

namespace models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * models\Entities\Members
 *
 * @ORM\Table(name="members")
 * @ORM\Entity
 */
class Members
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
     * @var string $fname
     *
     * @ORM\Column(name="fname", type="string", length=30, nullable=false)
     */
    private $fname;

    /**
     * @var string $sname
     *
     * @ORM\Column(name="sname", type="string", length=30, nullable=false)
     */
    private $sname;

    /**
     * @var string $onames
     *
     * @ORM\Column(name="onames", type="string", length=30, nullable=true)
     */
    private $onames;

    /**
     * @var string $dob
     *
     * @ORM\Column(name="dob", type="string", length=20, nullable=false)
     */
    private $dob;

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=false)
     */
    private $email;

    /**
     * @var integer $userId
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;


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
     * Set fname
     *
     * @param string $fname
     * @return Members
     */
    public function setFname($fname)
    {
        $this->fname = $fname;
        return $this;
    }

    /**
     * Get fname
     *
     * @return string 
     */
    public function getFname()
    {
        return $this->fname;
    }

    /**
     * Set sname
     *
     * @param string $sname
     * @return Members
     */
    public function setSname($sname)
    {
        $this->sname = $sname;
        return $this;
    }

    /**
     * Get sname
     *
     * @return string 
     */
    public function getSname()
    {
        return $this->sname;
    }

    /**
     * Set onames
     *
     * @param string $onames
     * @return Members
     */
    public function setOnames($onames)
    {
        $this->onames = $onames;
        return $this;
    }

    /**
     * Get onames
     *
     * @return string 
     */
    public function getOnames()
    {
        return $this->onames;
    }

    /**
     * Set dob
     *
     * @param string $dob
     * @return Members
     */
    public function setDob($dob)
    {
        $this->dob = $dob;
        return $this;
    }

    /**
     * Get dob
     *
     * @return string 
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Members
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
     * Set userId
     *
     * @param integer $userId
     * @return Members
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }
}