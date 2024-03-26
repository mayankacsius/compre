<?php

namespace App\Asic;

class documentType
{

    /**
     * @var documentNoType $documentNumber
     */
    protected $documentNumber = null;

    /**
     * @var date $dateReceived
     */
    protected $dateReceived = null;

    /**
     * @var codeType $formCode
     */
    protected $formCode = null;

    /**
     * @var numberOfPages $numberOfPages
     */
    protected $numberOfPages = null;

    /**
     * @var descriptionType $description
     */
    protected $description = null;

    /**
     * @var additionalDescription[] $additionalDescription
     */
    protected $additionalDescription = null;

    /**
     * @param documentNoType $documentNumber
     * @param date $dateReceived
     * @param codeType $formCode
     * @param descriptionType $description
     */
    public function __construct($documentNumber = null, $dateReceived = null, $formCode = null, $description = null)
    {
      $this->documentNumber = $documentNumber;
      $this->dateReceived = $dateReceived;
      $this->formCode = $formCode;
      $this->description = $description;
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
     * @return \App\Asic\documentType
     */
    public function setDocumentNumber($documentNumber)
    {
      $this->documentNumber = $documentNumber;
      return $this;
    }

    /**
     * @return date
     */
    public function getDateReceived()
    {
      return $this->dateReceived;
    }

    /**
     * @param date $dateReceived
     * @return \App\Asic\documentType
     */
    public function setDateReceived($dateReceived)
    {
      $this->dateReceived = $dateReceived;
      return $this;
    }

    /**
     * @return codeType
     */
    public function getFormCode()
    {
      return $this->formCode;
    }

    /**
     * @param codeType $formCode
     * @return \App\Asic\documentType
     */
    public function setFormCode($formCode)
    {
      $this->formCode = $formCode;
      return $this;
    }

    /**
     * @return numberOfPages
     */
    public function getNumberOfPages()
    {
      return $this->numberOfPages;
    }

    /**
     * @param numberOfPages $numberOfPages
     * @return \App\Asic\documentType
     */
    public function setNumberOfPages($numberOfPages)
    {
      $this->numberOfPages = $numberOfPages;
      return $this;
    }

    /**
     * @return descriptionType
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param descriptionType $description
     * @return \App\Asic\documentType
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return additionalDescription[]
     */
    public function getAdditionalDescription()
    {
      return $this->additionalDescription;
    }

    /**
     * @param additionalDescription[] $additionalDescription
     * @return \App\Asic\documentType
     */
    public function setAdditionalDescription(array $additionalDescription = null)
    {
      $this->additionalDescription = $additionalDescription;
      return $this;
    }

}
