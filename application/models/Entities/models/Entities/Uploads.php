<?php

namespace models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * models\Entities\Uploads
 *
 * @ORM\Table(name="uploads")
 * @ORM\Entity
 */
class Uploads
{
    /**
     * @var integer $uploadId
     *
     * @ORM\Column(name="upload_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uploadId;

    /**
     * @var string $uploadKey
     *
     * @ORM\Column(name="upload_key", type="string", length=255, nullable=false)
     */
    private $uploadKey;

    /**
     * @var string $filename
     *
     * @ORM\Column(name="filename", type="string", length=255, nullable=false)
     */
    private $filename;

    /**
     * @var text $location
     *
     * @ORM\Column(name="location", type="text", nullable=false)
     */
    private $location;

    /**
     * @var string $fileType
     *
     * @ORM\Column(name="file_type", type="string", length=255, nullable=false)
     */
    private $fileType;

    /**
     * @var datetime $dateCreated
     *
     * @ORM\Column(name="date_created", type="datetime", nullable=false)
     */
    private $dateCreated;

    /**
     * @var string $uplodedBy
     *
     * @ORM\Column(name="uploded_by", type="string", length=255, nullable=false)
     */
    private $uplodedBy;

    /**
     * @var integer $isDeleted
     *
     * @ORM\Column(name="is_deleted", type="integer", nullable=false)
     */
    private $isDeleted;


    /**
     * Get uploadId
     *
     * @return integer 
     */
    public function getUploadId()
    {
        return $this->uploadId;
    }

    /**
     * Set uploadKey
     *
     * @param string $uploadKey
     * @return Uploads
     */
    public function setUploadKey($uploadKey)
    {
        $this->uploadKey = $uploadKey;
        return $this;
    }

    /**
     * Get uploadKey
     *
     * @return string 
     */
    public function getUploadKey()
    {
        return $this->uploadKey;
    }

    /**
     * Set filename
     *
     * @param string $filename
     * @return Uploads
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;
        return $this;
    }

    /**
     * Get filename
     *
     * @return string 
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set location
     *
     * @param text $location
     * @return Uploads
     */
    public function setLocation($location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Get location
     *
     * @return text 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set fileType
     *
     * @param string $fileType
     * @return Uploads
     */
    public function setFileType($fileType)
    {
        $this->fileType = $fileType;
        return $this;
    }

    /**
     * Get fileType
     *
     * @return string 
     */
    public function getFileType()
    {
        return $this->fileType;
    }

    /**
     * Set dateCreated
     *
     * @param datetime $dateCreated
     * @return Uploads
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

    /**
     * Set uplodedBy
     *
     * @param string $uplodedBy
     * @return Uploads
     */
    public function setUplodedBy($uplodedBy)
    {
        $this->uplodedBy = $uplodedBy;
        return $this;
    }

    /**
     * Get uplodedBy
     *
     * @return string 
     */
    public function getUplodedBy()
    {
        return $this->uplodedBy;
    }

    /**
     * Set isDeleted
     *
     * @param integer $isDeleted
     * @return Uploads
     */
    public function setIsDeleted($isDeleted)
    {
        $this->isDeleted = $isDeleted;
        return $this;
    }

    /**
     * Get isDeleted
     *
     * @return integer 
     */
    public function getIsDeleted()
    {
        return $this->isDeleted;
    }
    /**
     * @var string $category
     *
     * @ORM\Column(name="category", type="string", length=50, nullable=false)
     */
    private $category;


    /**
     * Set category
     *
     * @param string $category
     * @return Uploads
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Get category
     *
     * @return string 
     */
    public function getCategory()
    {
        return $this->category;
    }
}