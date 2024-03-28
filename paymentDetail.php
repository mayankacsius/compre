<?php

namespace App\Asic;

class paymentDetail
{

    /**
     * @var receiptNumber $receiptNumber
     */
    protected $receiptNumber = null;

    /**
     * @var CRN $CRN
     */
    protected $CRN = null;

    /**
     * @var date $paymentDate
     */
    protected $paymentDate = null;

    /**
     * @param receiptNumber $receiptNumber
     * @param CRN $CRN
     * @param date $paymentDate
     */
    public function __construct($receiptNumber, $CRN, $paymentDate)
    {
      $this->receiptNumber = $receiptNumber;
      $this->CRN = $CRN;
      $this->paymentDate = $paymentDate;
    }

    /**
     * @return receiptNumber
     */
    public function getReceiptNumber()
    {
      return $this->receiptNumber;
    }

    /**
     * @param receiptNumber $receiptNumber
     * @return \App\Asic\paymentDetail
     */
    public function setReceiptNumber($receiptNumber)
    {
      $this->receiptNumber = $receiptNumber;
      return $this;
    }

    /**
     * @return CRN
     */
    public function getCRN()
    {
      return $this->CRN;
    }

    /**
     * @param CRN $CRN
     * @return \App\Asic\paymentDetail
     */
    public function setCRN($CRN)
    {
      $this->CRN = $CRN;
      return $this;
    }

    /**
     * @return date
     */
    public function getPaymentDate()
    {
      return $this->paymentDate;
    }

    /**
     * @param date $paymentDate
     * @return \App\Asic\paymentDetail
     */
    public function setPaymentDate($paymentDate)
    {
      $this->paymentDate = $paymentDate;
      return $this;
    }

}
