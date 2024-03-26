<?php

namespace App\Asic;

class invoice
{

    /**
     * @var asicName $asicName
     */
    protected $asicName = null;

    /**
     * @var asicAbn $asicAbn
     */
    protected $asicAbn = null;

    /**
     * @var debtorName $debtorName
     */
    protected $debtorName = null;

    /**
     * @var addressType $debtorAddress
     */
    protected $debtorAddress = null;

    /**
     * @var fssAccountType $debtorAccount
     */
    protected $debtorAccount = null;

    /**
     * @var debtorBpayReference $debtorBpayReference
     */
    protected $debtorBpayReference = null;

    /**
     * @var debtorDetail $debtorDetail
     */
    protected $debtorDetail = null;

    /**
     * @var date $invoiceIssueDate
     */
    protected $invoiceIssueDate = null;

    /**
     * @var invoiceItems $invoiceItems
     */
    protected $invoiceItems = null;

    /**
     * @var asicBpayBillerCode $asicBpayBillerCode
     */
    protected $asicBpayBillerCode = null;

    /**
     * @var asicTitleForPayment $asicTitleForPayment
     */
    protected $asicTitleForPayment = null;

    /**
     * @var asicAddressForPayment $asicAddressForPayment
     */
    protected $asicAddressForPayment = null;

    /**
     * @var asicPhoneForQueries $asicPhoneForQueries
     */
    protected $asicPhoneForQueries = null;

    /**
     * @param asicName $asicName
     * @param asicAbn $asicAbn
     * @param debtorName $debtorName
     * @param addressType $debtorAddress
     * @param fssAccountType $debtorAccount
     * @param debtorBpayReference $debtorBpayReference
     * @param debtorDetail $debtorDetail
     * @param date $invoiceIssueDate
     * @param invoiceItems $invoiceItems
     * @param asicBpayBillerCode $asicBpayBillerCode
     * @param asicTitleForPayment $asicTitleForPayment
     * @param asicAddressForPayment $asicAddressForPayment
     * @param asicPhoneForQueries $asicPhoneForQueries
     */
    public function __construct($asicName, $asicAbn, $debtorName, $debtorAddress, $debtorAccount, $debtorBpayReference, $debtorDetail, $invoiceIssueDate, $invoiceItems, $asicBpayBillerCode, $asicTitleForPayment, $asicAddressForPayment, $asicPhoneForQueries)
    {
      $this->asicName = $asicName;
      $this->asicAbn = $asicAbn;
      $this->debtorName = $debtorName;
      $this->debtorAddress = $debtorAddress;
      $this->debtorAccount = $debtorAccount;
      $this->debtorBpayReference = $debtorBpayReference;
      $this->debtorDetail = $debtorDetail;
      $this->invoiceIssueDate = $invoiceIssueDate;
      $this->invoiceItems = $invoiceItems;
      $this->asicBpayBillerCode = $asicBpayBillerCode;
      $this->asicTitleForPayment = $asicTitleForPayment;
      $this->asicAddressForPayment = $asicAddressForPayment;
      $this->asicPhoneForQueries = $asicPhoneForQueries;
    }

    /**
     * @return asicName
     */
    public function getAsicName()
    {
      return $this->asicName;
    }

    /**
     * @param asicName $asicName
     * @return \App\Asic\invoice
     */
    public function setAsicName($asicName)
    {
      $this->asicName = $asicName;
      return $this;
    }

    /**
     * @return asicAbn
     */
    public function getAsicAbn()
    {
      return $this->asicAbn;
    }

    /**
     * @param asicAbn $asicAbn
     * @return \App\Asic\invoice
     */
    public function setAsicAbn($asicAbn)
    {
      $this->asicAbn = $asicAbn;
      return $this;
    }

    /**
     * @return debtorName
     */
    public function getDebtorName()
    {
      return $this->debtorName;
    }

    /**
     * @param debtorName $debtorName
     * @return \App\Asic\invoice
     */
    public function setDebtorName($debtorName)
    {
      $this->debtorName = $debtorName;
      return $this;
    }

    /**
     * @return addressType
     */
    public function getDebtorAddress()
    {
      return $this->debtorAddress;
    }

    /**
     * @param addressType $debtorAddress
     * @return \App\Asic\invoice
     */
    public function setDebtorAddress($debtorAddress)
    {
      $this->debtorAddress = $debtorAddress;
      return $this;
    }

    /**
     * @return fssAccountType
     */
    public function getDebtorAccount()
    {
      return $this->debtorAccount;
    }

    /**
     * @param fssAccountType $debtorAccount
     * @return \App\Asic\invoice
     */
    public function setDebtorAccount($debtorAccount)
    {
      $this->debtorAccount = $debtorAccount;
      return $this;
    }

    /**
     * @return debtorBpayReference
     */
    public function getDebtorBpayReference()
    {
      return $this->debtorBpayReference;
    }

    /**
     * @param debtorBpayReference $debtorBpayReference
     * @return \App\Asic\invoice
     */
    public function setDebtorBpayReference($debtorBpayReference)
    {
      $this->debtorBpayReference = $debtorBpayReference;
      return $this;
    }

    /**
     * @return debtorDetail
     */
    public function getDebtorDetail()
    {
      return $this->debtorDetail;
    }

    /**
     * @param debtorDetail $debtorDetail
     * @return \App\Asic\invoice
     */
    public function setDebtorDetail($debtorDetail)
    {
      $this->debtorDetail = $debtorDetail;
      return $this;
    }

    /**
     * @return date
     */
    public function getInvoiceIssueDate()
    {
      return $this->invoiceIssueDate;
    }

    /**
     * @param date $invoiceIssueDate
     * @return \App\Asic\invoice
     */
    public function setInvoiceIssueDate($invoiceIssueDate)
    {
      $this->invoiceIssueDate = $invoiceIssueDate;
      return $this;
    }

    /**
     * @return invoiceItems
     */
    public function getInvoiceItems()
    {
      return $this->invoiceItems;
    }

    /**
     * @param invoiceItems $invoiceItems
     * @return \App\Asic\invoice
     */
    public function setInvoiceItems($invoiceItems)
    {
      $this->invoiceItems = $invoiceItems;
      return $this;
    }

    /**
     * @return asicBpayBillerCode
     */
    public function getAsicBpayBillerCode()
    {
      return $this->asicBpayBillerCode;
    }

    /**
     * @param asicBpayBillerCode $asicBpayBillerCode
     * @return \App\Asic\invoice
     */
    public function setAsicBpayBillerCode($asicBpayBillerCode)
    {
      $this->asicBpayBillerCode = $asicBpayBillerCode;
      return $this;
    }

    /**
     * @return asicTitleForPayment
     */
    public function getAsicTitleForPayment()
    {
      return $this->asicTitleForPayment;
    }

    /**
     * @param asicTitleForPayment $asicTitleForPayment
     * @return \App\Asic\invoice
     */
    public function setAsicTitleForPayment($asicTitleForPayment)
    {
      $this->asicTitleForPayment = $asicTitleForPayment;
      return $this;
    }

    /**
     * @return asicAddressForPayment
     */
    public function getAsicAddressForPayment()
    {
      return $this->asicAddressForPayment;
    }

    /**
     * @param asicAddressForPayment $asicAddressForPayment
     * @return \App\Asic\invoice
     */
    public function setAsicAddressForPayment($asicAddressForPayment)
    {
      $this->asicAddressForPayment = $asicAddressForPayment;
      return $this;
    }

    /**
     * @return asicPhoneForQueries
     */
    public function getAsicPhoneForQueries()
    {
      return $this->asicPhoneForQueries;
    }

    /**
     * @param asicPhoneForQueries $asicPhoneForQueries
     * @return \App\Asic\invoice
     */
    public function setAsicPhoneForQueries($asicPhoneForQueries)
    {
      $this->asicPhoneForQueries = $asicPhoneForQueries;
      return $this;
    }

}
