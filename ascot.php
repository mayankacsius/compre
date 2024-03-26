<?php

namespace App\Asic;

class ascot
{

    /**
     * @var documentNoType $documentNumber
     */
    protected $documentNumber = null;

    /**
     * @param documentNoType $documentNumber
     */
    public function __construct($documentNumber)
    {
      $this->documentNumber = $documentNumber;
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
     * @return \App\Asic\ascot
     */
    public function setDocumentNumber($documentNumber)
    {
      $this->documentNumber = $documentNumber;
      return $this;
    }

}
