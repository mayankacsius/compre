<?php

namespace App\Asic;

class feePayment
{

    /**
     * @var float $totalFees
     */
    protected $totalFees = null;

    /**
     * @var paymentStatus $paymentStatus
     */
    protected $paymentStatus = null;

    /**
     * @var declinedCode $declinedCode
     */
    protected $declinedCode = null;

    /**
     * @var declinedMessage $declinedMessage
     */
    protected $declinedMessage = null;

    /**
     * @var receiptNum $receiptNum
     */
    protected $receiptNum = null;

    /**
     * @param float $totalFees
     * @param paymentStatus $paymentStatus
     * @param declinedCode $declinedCode
     * @param declinedMessage $declinedMessage
     * @param receiptNum $receiptNum
     */
    public function __construct($totalFees, $paymentStatus, $declinedCode, $declinedMessage, $receiptNum)
    {
      $this->totalFees = $totalFees;
      $this->paymentStatus = $paymentStatus;
      $this->declinedCode = $declinedCode;
      $this->declinedMessage = $declinedMessage;
      $this->receiptNum = $receiptNum;
    }

    /**
     * @return float
     */
    public function getTotalFees()
    {
      return $this->totalFees;
    }

    /**
     * @param float $totalFees
     * @return \App\Asic\feePayment
     */
    public function setTotalFees($totalFees)
    {
      $this->totalFees = $totalFees;
      return $this;
    }

    /**
     * @return paymentStatus
     */
    public function getPaymentStatus()
    {
      return $this->paymentStatus;
    }

    /**
     * @param paymentStatus $paymentStatus
     * @return \App\Asic\feePayment
     */
    public function setPaymentStatus($paymentStatus)
    {
      $this->paymentStatus = $paymentStatus;
      return $this;
    }

    /**
     * @return declinedCode
     */
    public function getDeclinedCode()
    {
      return $this->declinedCode;
    }

    /**
     * @param declinedCode $declinedCode
     * @return \App\Asic\feePayment
     */
    public function setDeclinedCode($declinedCode)
    {
      $this->declinedCode = $declinedCode;
      return $this;
    }

    /**
     * @return declinedMessage
     */
    public function getDeclinedMessage()
    {
      return $this->declinedMessage;
    }

    /**
     * @param declinedMessage $declinedMessage
     * @return \App\Asic\feePayment
     */
    public function setDeclinedMessage($declinedMessage)
    {
      $this->declinedMessage = $declinedMessage;
      return $this;
    }

    /**
     * @return receiptNum
     */
    public function getReceiptNum()
    {
      return $this->receiptNum;
    }

    /**
     * @param receiptNum $receiptNum
     * @return \App\Asic\feePayment
     */
    public function setReceiptNum($receiptNum)
    {
      $this->receiptNum = $receiptNum;
      return $this;
    }

}
