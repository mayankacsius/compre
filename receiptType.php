<?php

namespace App\Asic;

class receiptType
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
     * @var transactionType[] $transaction
     */
    protected $transaction = null;

    /**
     * @var amountType $total
     */
    protected $total = null;

    /**
     * @var amountType $totalDue
     */
    protected $totalDue = null;

    /**
     * @var date $dateDue
     */
    protected $dateDue = null;

    /**
     * @var asicPaymentDetailsType $asicPaymentDetails
     */
    protected $asicPaymentDetails = null;

    /**
     * @param debtorType $debtor
     * @param date $dateIssued
     * @param transactionType[] $transaction
     * @param amountType $total
     * @param amountType $totalDue
     */
    public function __construct($debtor, $dateIssued, array $transaction, $total, $totalDue)
    {
      $this->debtor = $debtor;
      $this->dateIssued = $dateIssued;
      $this->transaction = $transaction;
      $this->total = $total;
      $this->totalDue = $totalDue;
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
     * @return \App\Asic\receiptType
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
     * @return \App\Asic\receiptType
     */
    public function setDateIssued($dateIssued)
    {
      $this->dateIssued = $dateIssued;
      return $this;
    }

    /**
     * @return transactionType[]
     */
    public function getTransaction()
    {
      return $this->transaction;
    }

    /**
     * @param transactionType[] $transaction
     * @return \App\Asic\receiptType
     */
    public function setTransaction(array $transaction)
    {
      $this->transaction = $transaction;
      return $this;
    }

    /**
     * @return amountType
     */
    public function getTotal()
    {
      return $this->total;
    }

    /**
     * @param amountType $total
     * @return \App\Asic\receiptType
     */
    public function setTotal($total)
    {
      $this->total = $total;
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
     * @return \App\Asic\receiptType
     */
    public function setTotalDue($totalDue)
    {
      $this->totalDue = $totalDue;
      return $this;
    }

    /**
     * @return date
     */
    public function getDateDue()
    {
      return $this->dateDue;
    }

    /**
     * @param date $dateDue
     * @return \App\Asic\receiptType
     */
    public function setDateDue($dateDue)
    {
      $this->dateDue = $dateDue;
      return $this;
    }

    /**
     * @return asicPaymentDetailsType
     */
    public function getAsicPaymentDetails()
    {
      return $this->asicPaymentDetails;
    }

    /**
     * @param asicPaymentDetailsType $asicPaymentDetails
     * @return \App\Asic\receiptType
     */
    public function setAsicPaymentDetails($asicPaymentDetails)
    {
      $this->asicPaymentDetails = $asicPaymentDetails;
      return $this;
    }

}
