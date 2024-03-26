<?php

namespace App\Asic;

class outboundItemIdentifierType
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
     * @var referenceNoType $inboxNumber
     */
    protected $inboxNumber = null;

    
    public function __construct()
    {
    
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
     * @return \App\Asic\outboundItemIdentifierType
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
     * @return \App\Asic\outboundItemIdentifierType
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
     * @return \App\Asic\outboundItemIdentifierType
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
     * @return \App\Asic\outboundItemIdentifierType
     */
    public function setInboxNumber($inboxNumber)
    {
      $this->inboxNumber = $inboxNumber;
      return $this;
    }

}
