<?php

namespace models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * models\Entities\Mailerlog
 *
 * @ORM\Table(name="mailerlog")
 * @ORM\Entity
 */
class Mailerlog
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
     * @var text $recipients
     *
     * @ORM\Column(name="recipients", type="text", nullable=false)
     */
    private $recipients;

    /**
     * @var string $subject
     *
     * @ORM\Column(name="subject", type="string", length=200, nullable=false)
     */
    private $subject;

    /**
     * @var text $message
     *
     * @ORM\Column(name="message", type="text", nullable=false)
     */
    private $message;

    /**
     * @var date $date
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var integer $sentStatus
     *
     * @ORM\Column(name="sent_status", type="integer", nullable=false)
     */
    private $sentStatus;


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
     * Set recipients
     *
     * @param text $recipients
     * @return Mailerlog
     */
    public function setRecipients($recipients)
    {
        $this->recipients = $recipients;
        return $this;
    }

    /**
     * Get recipients
     *
     * @return text 
     */
    public function getRecipients()
    {
        return $this->recipients;
    }

    /**
     * Set subject
     *
     * @param string $subject
     * @return Mailerlog
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Get subject
     *
     * @return string 
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set message
     *
     * @param text $message
     * @return Mailerlog
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    /**
     * Get message
     *
     * @return text 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set date
     *
     * @param date $date
     * @return Mailerlog
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Get date
     *
     * @return date 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set sentStatus
     *
     * @param integer $sentStatus
     * @return Mailerlog
     */
    public function setSentStatus($sentStatus)
    {
        $this->sentStatus = $sentStatus;
        return $this;
    }

    /**
     * Get sentStatus
     *
     * @return integer 
     */
    public function getSentStatus()
    {
        return $this->sentStatus;
    }
}