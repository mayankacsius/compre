<?php

namespace App\Asic;

class lodgementIdentifierType
{

    /**
     * @var referenceNoType $referenceNumber
     */
    protected $referenceNumber = null;

    /**
     * @var documentNoType $documentNumber
     */
    protected $documentNumber = null;

    /**
     * @var externalReferenceNumber $externalReferenceNumber
     */
    protected $externalReferenceNumber = null;

    /**
     * @param referenceNoType $referenceNumber
     * @param externalReferenceNumber $externalReferenceNumber
     */
    public function __construct($referenceNumber, $externalReferenceNumber)
    {
      $this->referenceNumber = $referenceNumber;
      $this->externalReferenceNumber = $externalReferenceNumber;
    }

    /**
     * @return referenceNoType
     */
    public function getReferenceNumber()
    {
      return $this->referenceNumber;
    }

    /**
     * @param referenceNoType $referenceNumber
     * @return \App\Asic\lodgementIdentifierType
     */
    public function setReferenceNumber($referenceNumber)
    {
      $this->referenceNumber = $referenceNumber;
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
     * @return \App\Asic\lodgementIdentifierType
     */
    public function setDocumentNumber($documentNumber)
    {
      $this->documentNumber = $documentNumber;
      return $this;
    }

    /**
     * @return externalReferenceNumber
     */
    public function getExternalReferenceNumber()
    {
      return $this->externalReferenceNumber;
    }

    /**
     * @param externalReferenceNumber $externalReferenceNumber
     * @return \App\Asic\lodgementIdentifierType
     */
    public function setExternalReferenceNumber($externalReferenceNumber)
    {
      $this->externalReferenceNumber = $externalReferenceNumber;
      return $this;
    }

}
