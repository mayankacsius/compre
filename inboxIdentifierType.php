<?php

namespace App\Asic;

class inboxIdentifierType
{

    /**
     * @var referenceNoType $referenceNumber
     */
    protected $referenceNumber = null;

    /**
     * @var externalReferenceNumber $externalReferenceNumber
     */
    protected $externalReferenceNumber = null;

    /**
     * @var referenceNoType $inboxNumber
     */
    protected $inboxNumber = null;

    /**
     * @param referenceNoType $referenceNumber
     * @param externalReferenceNumber $externalReferenceNumber
     * @param referenceNoType $inboxNumber
     */
    public function __construct($referenceNumber, $externalReferenceNumber, $inboxNumber)
    {
      $this->referenceNumber = $referenceNumber;
      $this->externalReferenceNumber = $externalReferenceNumber;
      $this->inboxNumber = $inboxNumber;
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
     * @return \App\Asic\inboxIdentifierType
     */
    public function setReferenceNumber($referenceNumber)
    {
      $this->referenceNumber = $referenceNumber;
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
     * @return \App\Asic\inboxIdentifierType
     */
    public function setExternalReferenceNumber($externalReferenceNumber)
    {
      $this->externalReferenceNumber = $externalReferenceNumber;
      return $this;
    }

    /**
     * @return referenceNoType
     */
    public function getInboxNumber()
    {
      return $this->inboxNumber;
    }

    /**
     * @param referenceNoType $inboxNumber
     * @return \App\Asic\inboxIdentifierType
     */
    public function setInboxNumber($inboxNumber)
    {
      $this->inboxNumber = $inboxNumber;
      return $this;
    }

}
