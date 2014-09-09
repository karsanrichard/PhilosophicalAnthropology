<?php

namespace models\Entities;

use Doctrine\Mapping as ORM;

/**
 * models\Entities\Questions
 *
 * @Table(name="questions")
 * @Entity
 */
class Questions
{
    /**
     * @var integer $questionId
     *
     * @Column(name="question_id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $questionId;

    /**
     * @var string $questionCode
     *
     * @Column(name="question_code", type="string", length=15, nullable=false)
     */
    private $questionCode;

    /**
     * @var text $question
     *
     * @Column(name="question", type="text", nullable=false)
     */
    private $question;

    /**
     * @var text $choices
     *
     * @Column(name="choices", type="text", nullable=false)
     */
    private $choices;

    /**
     * @var string $answer
     *
     * @Column(name="answer", type="string", length=255, nullable=false)
     */
    private $answer;

    /**
     * @var datetime $createdOn
     *
     * @Column(name="created_on", type="datetime", nullable=false)
     */
    private $createdOn;

    /**
     * @var integer $createdBy
     *
     * @Column(name="created_by", type="integer", nullable=false)
     */
    private $createdBy;


    /**
     * Get questionId
     *
     * @return integer 
     */
    public function getQuestionId()
    {
        return $this->questionId;
    }

    /**
     * Set questionCode
     *
     * @param string $questionCode
     * @return Questions
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
     * Set question
     *
     * @param text $question
     * @return Questions
     */
    public function setQuestion($question)
    {
        $this->question = $question;
        return $this;
    }

    /**
     * Get question
     *
     * @return text 
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set choices
     *
     * @param text $choices
     * @return Questions
     */
    public function setChoices($choices)
    {
        $this->choices = $choices;
        return $this;
    }

    /**
     * Get choices
     *
     * @return text 
     */
    public function getChoices()
    {
        return $this->choices;
    }

    /**
     * Set answer
     *
     * @param string $answer
     * @return Questions
     */
    public function setAnswer($answer)
    {
        $this->answer = $answer;
        return $this;
    }

    /**
     * Get answer
     *
     * @return string 
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * Set createdOn
     *
     * @param datetime $createdOn
     * @return Questions
     */
    public function setCreatedOn($createdOn)
    {
        $this->createdOn = $createdOn;
        return $this;
    }

    /**
     * Get createdOn
     *
     * @return datetime 
     */
    public function getCreatedOn()
    {
        return $this->createdOn;
    }

    /**
     * Set createdBy
     *
     * @param integer $createdBy
     * @return Questions
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;
        return $this;
    }

    /**
     * Get createdBy
     *
     * @return integer 
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }
    /**
     * @var string $questionCategory
     *
     * @Column(name="question_category", type="string", length=15, nullable=false)
     */
    private $questionCategory;


    /**
     * Set questionCategory
     *
     * @param string $questionCategory
     * @return Questions
     */
    public function setQuestionCategory($questionCategory)
    {
        $this->questionCategory = $questionCategory;
        return $this;
    }

    /**
     * Get questionCategory
     *
     * @return string 
     */
    public function getQuestionCategory()
    {
        return $this->questionCategory;
    }
}