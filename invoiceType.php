<?php

namespace App\Asic;

class invoiceType
{

    /**
     * @var debtorType $debtor
     */
    protected $debtor = null;

    /**
     * @var date $dateIssued
     */
    protected $dateIssued = null;

    /**
     * @var invoicePeriod $invoicePeriod
     */
    protected $invoicePeriod = null;

    /**
     * @var transactionsType $paid
     */
    protected $paid = null;

    /**
     * @var transactionsType $oldUnpaid
     */
    protected $oldUnpaid = null;

    /**
     * @var transactionsType $currentUnpaid
     */
    protected $currentUnpaid = null;

    /**
     * @var amountType $totalDue
     */
    protected $totalDue = null;

    /**
     * @var asicPaymentDetails $asicPaymentDetails
     */
    protected $asicPaymentDetails = null;

    /**
     * @param debtorType $debtor
     * @param date $dateIssued
     * @param amountType $totalDue
     * @param asicPaymentDetails $asicPaymentDetails
     */
    public function __construct($debtor, $dateIssued, $totalDue, $asicPaymentDetails)
    {
      $this->debtor = $debtor;
      $this->dateIssued = $dateIssued;
      $this->totalDue = $totalDue;
      $this->asicPaymentDetails = $asicPaymentDetails;
    }

    /**
     * @return debtorType
     */
    public function getDebtor()
    {
      return $this->debtor;
    }

    /**
     * @param debtorType $debtor
     * @return \App\Asic\invoiceType
     */
    public function setDebtor($debtor)
    {
      $this->debtor = $debtor;
      return $this;
    }

    /**
     * @return date
     */
    public function getDateIssued()
    {
      return $this->dateIssued;
    }

    /**
     * @param date $dateIssued
     * @return \App\Asic\invoiceType
     */
    public function setDateIssued($dateIssued)
    {
      $this->dateIssued = $dateIssued;
      return $this;
    }

    /**
     * @return invoicePeriod
     */
    public function getInvoicePeriod()
    {
      return $this->invoicePeriod;
    }

    /**
     * @param invoicePeriod $invoicePeriod
     * @return \App\Asic\invoiceType
     */
    public function setInvoicePeriod($invoicePeriod)
    {
      $this->invoicePeriod = $invoicePeriod;
      return $this;
    }

    /**
     * @return transactionsType
     */
    public function getPaid()
    {
      return $this->paid;
    }

    /**
     * @param transactionsType $paid
     * @return \App\Asic\invoiceType
     */
    public function setPaid($paid)
    {
      $this->paid = $paid;
      return $this;
    }

    /**
     * @return transactionsType
     */
    public function getOldUnpaid()
    {
      return $this->oldUnpaid;
    }

    /**
     * @param transactionsType $oldUnpaid
     * @return \App\Asic\invoiceType
     */
    public function setOldUnpaid($oldUnpaid)
    {
      $this->oldUnpaid = $oldUnpaid;
      return $this;
    }

    /**
     * @return transactionsType
     */
    public function getCurrentUnpaid()
    {
      return $this->currentUnpaid;
    }

    /**
     * @param transactionsType $currentUnpaid
     * @return \App\Asic\invoiceType
     */
    public function setCurrentUnpaid($currentUnpaid)
    {
      $this->currentUnpaid = $currentUnpaid;
      return $this;
    }

    /**
     * @return amountType
     */
    public function getTotalDue()
    {
      return $this->totalDue;
    }

    /**
     * @param amountType $totalDue
     * @return \App\Asic\invoiceType
     */
    public function setTotalDue($totalDue)
    {
      $this->totalDue = $totalDue;
      return $this;
    }

    /**
     * @return asicPaymentDetails
     */
    public function getAsicPaymentDetails()
    {
      return $this->asicPaymentDetails;
    }

    /**
     * @param asicPaymentDetails $asicPaymentDetails
     * @return \App\Asic\invoiceType
     */
    public function setAsicPaymentDetails($asicPaymentDetails)
    {
      $this->asicPaymentDetails = $asicPaymentDetails;
      return $this;
    }

}
