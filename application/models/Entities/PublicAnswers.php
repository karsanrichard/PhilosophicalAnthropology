<?php

namespace models\Entities;

use Doctrine\Mapping as ORM;

/**
 * models\Entities\PublicAnswers
 *
 * @Table(name="public_answers")
 * @Entity
 */
class PublicAnswers
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
     * @var string $questionCode
     *
     * @Column(name="question_code", type="string", length=15, nullable=false)
     */
    private $questionCode;

    /**
     * @var string $questionResponse
     *
     * @Column(name="question_response", type="string", length=255, nullable=false)
     */
    private $questionResponse;

    /**
     * @var datetime $time
     *
     * @Column(name="time", type="datetime", nullable=false)
     */
    private $time;

    /**
     * @var string $emailaddress
     *
     * @Column(name="emailaddress", type="string", length=255, nullable=false)
     */
    private $emailaddress;


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
     * Set questionCode
     *
     * @param string $questionCode
     * @return PublicAnswers
     */
    public function setQuestionCode($questionCode)
    {
        $this->questionCode = $questionCode;
        return $this;
    }

    /**
     * Get questionCode
     *
     * @return string 
     */
    public function getQuestionCode()
    {
        return $this->questionCode;
    }

    /**
     * Set questionResponse
     *
     * @param string $questionResponse
     * @return PublicAnswers
     */
    public function setQuestionResponse($questionResponse)
    {
        $this->questionResponse = $questionResponse;
        return $this;
    }

    /**
     * Get questionResponse
     *
     * @return string 
     */
    public function getQuestionResponse()
    {
        return $this->questionResponse;
    }

    /**
     * Set time
     *
     * @param datetime $time
     * @return PublicAnswers
     */
    public function setTime($time)
    {
        $this->time = $time;
        return $this;
    }

    /**
     * Get time
     *
     * @return datetime 
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set emailaddress
     *
     * @param string $emailaddress
     * @return PublicAnswers
     */
    public function setEmailaddress($emailaddress)
    {
        $this->emailaddress = $emailaddress;
        return $this;
    }

    /**
     * Get emailaddress
     *
     * @return string 
     */
    public function getEmailaddress()
    {
        return $this->emailaddress;
    }
}