<?php

namespace App\Asic;

class attachmentType
{

    /**
     * @var documentType $documentType
     */
    protected $documentType = null;

    /**
     * @var base64Binary $binaryObject
     */
    protected $binaryObject = null;

    /**
     * @var documentNoType $documentNumber
     */
    protected $documentNumber = null;

    /**
     * @var name $name
     */
    protected $name = null;

    /**
     * @var description $description
     */
    protected $description = null;

    /**
     * @var anyURI $URL
     */
    protected $URL = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return documentType
     */
    public function getDocumentType()
    {
      return $this->documentType;
    }

    /**
     * @param documentType $documentType
     * @return \App\Asic\attachmentType
     */
    public function setDocumentType($documentType)
    {
      $this->documentType = $documentType;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getBinaryObject()
    {
      return $this->binaryObject;
    }

    /**
     * @param base64Binary $binaryObject
     * @return \App\Asic\attachmentType
     */
    public function setBinaryObject($binaryObject)
    {
      $this->binaryObject = $binaryObject;
      return $this;
    }

    /**
     * @return documentNoType
     */
    public function getDocumentNumber()
    {
      return $this->documentNumber;
    }

    /**
     * @param documentNoType $documentNumber
     * @return \App\Asic\attachmentType
     */
    public function setDocumentNumber($documentNumber)
    {
      $this->documentNumber = $documentNumber;
      return $this;
    }

    /**
     * @return name
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param name $name
     * @return \App\Asic\attachmentType
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return description
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param description $description
     * @return \App\Asic\attachmentType
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getURL()
    {
      return $this->URL;
    }

    /**
     * @param anyURI $URL
     * @return \App\Asic\attachmentType
     */
    public function setURL($URL)
    {
      $this->URL = $URL;
      return $this;
    }

}
