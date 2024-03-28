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
     * @var applicant $applicant
     */
    protected $applicant = null;

    /**
     * @var lodgements $lodgements
     */
    protected $lodgements = null;

    /**
     * @var payment $payment
     */
    protected $payment = null;

    /**
     * @param transactionReferenceNumber $transactionReferenceNumber
     * @param asicTransactionNumber $asicTransactionNumber
     * @param applicant $applicant
     * @param lodgements $lodgements
     * @param payment $payment
     */
    public function __construct($transactionReferenceNumber = null, $asicTransactionNumber = null, $applicant = null, $lodgements = null, $payment = null)
    {
      $this->transactionReferenceNumber = $transactionReferenceNumber;
      $this->asicTransactionNumber = $asicTransactionNumber;
      $this->applicant = $applicant;
      $this->lodgements = $lodgements;
      $this->payment = $payment;
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

    /**
     * @return applicant
     */
    public function getApplicant()
    {
      return $this->applicant;
    }

    /**
     * @param applicant $applicant
     * @return \App\Asic\businessDocumentBody
     */
    public function setApplicant($applicant)
    {
      $this->applicant = $applicant;
      return $this;
    }

    /**
     * @return lodgements
     */
    public function getLodgements()
    {
      return $this->lodgements;
    }

    /**
     * @param lodgements $lodgements
     * @return \App\Asic\businessDocumentBody
     */
    public function setLodgements($lodgements)
    {
      $this->lodgements = $lodgements;
      return $this;
    }

    /**
     * @return payment
     */
    public function getPayment()
    {
      return $this->payment;
    }

    /**
     * @param payment $payment
     * @return \App\Asic\businessDocumentBody
     */
    public function setPayment($payment)
    {
      $this->payment = $payment;
      return $this;
    }

}
