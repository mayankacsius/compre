<?php

namespace App\Asic;

class feesType
{

    /**
     * @var asicNumericIdType $lodgementUnit
     */
    protected $lodgementUnit = null;

    /**
     * @var date $lodgementDate
     */
    protected $lodgementDate = null;

    /**
     * @var paymentMethodType $paymentMethod
     */
    protected $paymentMethod = null;

    /**
     * @var amountType $totalAmountOwing
     */
    protected $totalAmountOwing = null;

    /**
     * @var invoice $invoice
     */
    protected $invoice = null;

    /**
     * @param date $lodgementDate
     * @param amountType $totalAmountOwing
     */
    public function __construct($lodgementDate, $totalAmountOwing)
    {
      $this->lodgementDate = $lodgementDate;
      $this->totalAmountOwing = $totalAmountOwing;
    }

    /**
     * @return asicNumericIdType
     */
    public function getLodgementUnit()
    {
      return $this->lodgementUnit;
    }

    /**
     * @param asicNumericIdType $lodgementUnit
     * @return \App\Asic\feesType
     */
    public function setLodgementUnit($lodgementUnit)
    {
      $this->lodgementUnit = $lodgementUnit;
      return $this;
    }

    /**
     * @return date
     */
    public function getLodgementDate()
    {
      return $this->lodgementDate;
    }

    /**
     * @param date $lodgementDate
     * @return \App\Asic\feesType
     */
    public function setLodgementDate($lodgementDate)
    {
      $this->lodgementDate = $lodgementDate;
      return $this;
    }

    /**
     * @return paymentMethodType
     */
    public function getPaymentMethod()
    {
      return $this->paymentMethod;
    }

    /**
     * @param paymentMethodType $paymentMethod
     * @return \App\Asic\feesType
     */
    public function setPaymentMethod($paymentMethod)
    {
      $this->paymentMethod = $paymentMethod;
      return $this;
    }

    /**
     * @return amountType
     */
    public function getTotalAmountOwing()
    {
      return $this->totalAmountOwing;
    }

    /**
     * @param amountType $totalAmountOwing
     * @return \App\Asic\feesType
     */
    public function setTotalAmountOwing($totalAmountOwing)
    {
      $this->totalAmountOwing = $totalAmountOwing;
      return $this;
    }

    /**
     * @return invoice
     */
    public function getInvoice()
    {
      return $this->invoice;
    }

    /**
     * @param invoice $invoice
     * @return \App\Asic\feesType
     */
    public function setInvoice($invoice)
    {
      $this->invoice = $invoice;
      return $this;
    }

}
