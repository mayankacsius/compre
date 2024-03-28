<?php

namespace App\Asic;

class businessDocumentBody
{

    /**
     * @var transactionReferenceNumber $transactionReferenceNumber
     */
    protected $transactionReferenceNumber = null;

    /**
     * @var asicTransactionNumber $asicTransactionNumber
     */
    protected $asicTransactionNumber = null;

    /**
     * @param transactionReferenceNumber $transactionReferenceNumber
     * @param asicTransactionNumber $asicTransactionNumber
     */
    public function __construct($transactionReferenceNumber, $asicTransactionNumber)
    {
      $this->transactionReferenceNumber = $transactionReferenceNumber;
      $this->asicTransactionNumber = $asicTransactionNumber;
    }

    /**
     * @return transactionReferenceNumber
     */
    public function getTransactionReferenceNumber()
    {
      return $this->transactionReferenceNumber;
    }

    /**
     * @param transactionReferenceNumber $transactionReferenceNumber
     * @return \App\Asic\businessDocumentBody
     */
    public function setTransactionReferenceNumber($transactionReferenceNumber)
    {
      $this->transactionReferenceNumber = $transactionReferenceNumber;
      return $this;
    }

    /**
     * @return asicTransactionNumber
     */
    public function getAsicTransactionNumber()
    {
      return $this->asicTransactionNumber;
    }

    /**
     * @param asicTransactionNumber $asicTransactionNumber
     * @return \App\Asic\businessDocumentBody
     */
    public function setAsicTransactionNumber($asicTransactionNumber)
    {
      $this->asicTransactionNumber = $asicTransactionNumber;
      return $this;
    }

}
