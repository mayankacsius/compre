<?php

namespace App\Asic;

class transactionStatusReplyDataType
{

    /**
     * @var transactionStatus $transactionStatus
     */
    protected $transactionStatus = null;

    /**
     * @var lodgements $lodgements
     */
    protected $lodgements = null;

    /**
     * @var feePayment $feePayment
     */
    protected $feePayment = null;

    /**
     * @param lodgements $lodgements
     */
    public function __construct($lodgements)
    {
      $this->lodgements = $lodgements;
    }

    /**
     * @return transactionStatus
     */
    public function getTransactionStatus()
    {
      return $this->transactionStatus;
    }

    /**
     * @param transactionStatus $transactionStatus
     * @return \App\Asic\transactionStatusReplyDataType
     */
    public function setTransactionStatus($transactionStatus)
    {
      $this->transactionStatus = $transactionStatus;
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
     * @return \App\Asic\transactionStatusReplyDataType
     */
    public function setLodgements($lodgements)
    {
      $this->lodgements = $lodgements;
      return $this;
    }

    /**
     * @return feePayment
     */
    public function getFeePayment()
    {
      return $this->feePayment;
    }

    /**
     * @param feePayment $feePayment
     * @return \App\Asic\transactionStatusReplyDataType
     */
    public function setFeePayment($feePayment)
    {
      $this->feePayment = $feePayment;
      return $this;
    }

}
