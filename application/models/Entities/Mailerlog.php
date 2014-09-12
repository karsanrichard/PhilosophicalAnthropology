<?php

namespace models\Entities;

use Doctrine\Mapping as ORM;

/**
 * models\Entities\Mailerlog
 *
 * @Table(name="mailerlog")
 * @Entity
 */
class Mailerlog
{
    /**
     * @var integer $id
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var text $recipients
     *
     * @Column(name="recipients", type="text", nullable=false)
     */
    private $recipients;

    /**
     * @var string $subject
     *
     * @Column(name="subject", type="string", length=200, nullable=false)
     */
    private $subject;

    /**
     * @var text $message
     *
     * @Column(name="message", type="text", nullable=false)
     */
    private $message;

    /**
     * @var date $date
     *
     * @Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var integer $sentStatus
     *
     * @Column(name="sent_status", type="integer", nullable=false)
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