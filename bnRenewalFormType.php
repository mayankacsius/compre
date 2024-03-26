<?php

namespace App\Asic;

class bnRenewalFormType
{

    /**
     * @var accountNumberType $accountNumber
     */
    protected $accountNumber = null;

    /**
     * @var abnType $ABN
     */
    protected $ABN = null;

    /**
     * @var transactionIdType $transactionId
     */
    protected $transactionId = null;

    /**
     * @var distinguishedNameType $businessName
     */
    protected $businessName = null;

    /**
     * @var termType $term
     */
    protected $term = null;

    /**
     * @var paymentMethodType $paymentType
     */
    protected $paymentType = null;

    /**
     * @var emailType $emailAddress
     */
    protected $emailAddress = null;

    /**
     * @var signatoryType $signatory
     */
    protected $signatory = null;

    /**
     * @param accountNumberType $accountNumber
     * @param abnType $ABN
     * @param transactionIdType $transactionId
     * @param distinguishedNameType $businessName
     * @param termType $term
     * @param paymentMethodType $paymentType
     * @param signatoryType $signatory
     */
    public function __construct($accountNumber, $ABN, $transactionId, $businessName, $term, $paymentType, $signatory)
    {
      $this->accountNumber = $accountNumber;
      $this->ABN = $ABN;
      $this->transactionId = $transactionId;
      $this->businessName = $businessName;
      $this->term = $term;
      $this->paymentType = $paymentType;
      $this->signatory = $signatory;
    }

    /**
     * @return accountNumberType
     */
    public function getAccountNumber()
    {
      return $this->accountNumber;
    }

    /**
     * @param accountNumberType $accountNumber
     * @return \App\Asic\bnRenewalFormType
     */
    public function setAccountNumber($accountNumber)
    {
      $this->accountNumber = $accountNumber;
      return $this;
    }

    /**
     * @return abnType
     */
    public function getABN()
    {
      return $this->ABN;
    }

    /**
     * @param abnType $ABN
     * @return \App\Asic\bnRenewalFormType
     */
    public function setABN($ABN)
    {
      $this->ABN = $ABN;
      return $this;
    }

    /**
     * @return transactionIdType
     */
    public function getTransactionId()
    {
      return $this->transactionId;
    }

    /**
     * @param transactionIdType $transactionId
     * @return \App\Asic\bnRenewalFormType
     */
    public function setTransactionId($transactionId)
    {
      $this->transactionId = $transactionId;
      return $this;
    }

    /**
     * @return distinguishedNameType
     */
    public function getBusinessName()
    {
      return $this->businessName;
    }

    /**
     * @param distinguishedNameType $businessName
     * @return \App\Asic\bnRenewalFormType
     */
    public function setBusinessName($businessName)
    {
      $this->businessName = $businessName;
      return $this;
    }

    /**
     * @return termType
     */
    public function getTerm()
    {
      return $this->term;
    }

    /**
     * @param termType $term
     * @return \App\Asic\bnRenewalFormType
     */
    public function setTerm($term)
    {
      $this->term = $term;
      return $this;
    }

    /**
     * @return paymentMethodType
     */
    public function getPaymentType()
    {
      return $this->paymentType;
    }

    /**
     * @param paymentMethodType $paymentType
     * @return \App\Asic\bnRenewalFormType
     */
    public function setPaymentType($paymentType)
    {
      $this->paymentType = $paymentType;
      return $this;
    }

    /**
     * @return emailType
     */
    public function getEmailAddress()
    {
      return $this->emailAddress;
    }

    /**
     * @param emailType $emailAddress
     * @return \App\Asic\bnRenewalFormType
     */
    public function setEmailAddress($emailAddress)
    {
      $this->emailAddress = $emailAddress;
      return $this;
    }

    /**
     * @return signatoryType
     */
    public function getSignatory()
    {
      return $this->signatory;
    }

    /**
     * @param signatoryType $signatory
     * @return \App\Asic\bnRenewalFormType
     */
    public function setSignatory($signatory)
    {
      $this->signatory = $signatory;
      return $this;
    }

}
