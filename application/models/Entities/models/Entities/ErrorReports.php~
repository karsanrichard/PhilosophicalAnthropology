<?php

namespace models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * models\Entities\ErrorReports
 *
 * @ORM\Table(name="error_reports")
 * @ORM\Entity
 */
class ErrorReports
{
    /**
     * @var integer $errorId
     *
     * @ORM\Column(name="error_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $errorId;

    /**
     * @var string $subject
     *
     * @ORM\Column(name="subject", type="string", length=255, nullable=false)
     */
    private $subject;

    /**
     * @var text $message
     *
     * @ORM\Column(name="message", type="text", nullable=false)
     */
    private $message;

    /**
     * @var string $userId
     *
     * @ORM\Column(name="user_id", type="string", length=255, nullable=false)
     */
    private $userId;

    /**
     * @var datetime $date
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date;

    /**
     * @var integer $lookedAt
     *
     * @ORM\Column(name="looked_at", type="integer", nullable=false)
     */
    private $lookedAt;


    /**
     * Get errorId
     *
     * @return integer 
     */
    public function getErrorId()
    {
        return $this->errorId;
    }

    /**
     * Set subject
     *
     * @param string $subject
     * @return ErrorReports
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
     * @return ErrorReports
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
     * Set userId
     *
     * @param string $userId
     * @return ErrorReports
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Get userId
     *
     * @return string 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set date
     *
     * @param datetime $date
     * @return ErrorReports
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Get date
     *
     * @return datetime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set lookedAt
     *
     * @param integer $lookedAt
     * @return ErrorReports
     */
    public function setLookedAt($lookedAt)
    {
        $this->lookedAt = $lookedAt;
        return $this;
    }

    /**
     * Get lookedAt
     *
     * @return integer 
     */
    public function getLookedAt()
    {
        return $this->lookedAt;
    }
}