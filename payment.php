<?php

namespace App\Asic;

class payment
{

    /**
     * @var amountType $totalCalculatedFee
     */
    protected $totalCalculatedFee = null;

    /**
     * @var paymentMethod $paymentMethod
     */
    protected $paymentMethod = null;

    /**
     * @var paymentResponseURL $paymentResponseURL
     */
    protected $paymentResponseURL = null;

    /**
     * @var paymentCancelURL $paymentCancelURL
     */
    protected $paymentCancelURL = null;

    /**
     * @param amountType $totalCalculatedFee
     * @param paymentMethod $paymentMethod
     * @param paymentResponseURL $paymentResponseURL
     * @param paymentCancelURL $paymentCancelURL
     */
    public function __construct($totalCalculatedFee, $paymentMethod, $paymentResponseURL, $paymentCancelURL)
    {
      $this->totalCalculatedFee = $totalCalculatedFee;
      $this->paymentMethod = $paymentMethod;
      $this->paymentResponseURL = $paymentResponseURL;
      $this->paymentCancelURL = $paymentCancelURL;
    }

    /**
     * @return amountType
     */
    public function getTotalCalculatedFee()
    {
      return $this->totalCalculatedFee;
    }

    /**
     * @param amountType $totalCalculatedFee
     * @return \App\Asic\payment
     */
    public function setTotalCalculatedFee($totalCalculatedFee)
    {
      $this->totalCalculatedFee = $totalCalculatedFee;
      return $this;
    }

    /**
     * @return paymentMethod
     */
    public function getPaymentMethod()
    {
      return $this->paymentMethod;
    }

    /**
     * @param paymentMethod $paymentMethod
     * @return \App\Asic\payment
     */
    public function setPaymentMethod($paymentMethod)
    {
      $this->paymentMethod = $paymentMethod;
      return $this;
    }

    /**
     * @return paymentResponseURL
     */
    public function getPaymentResponseURL()
    {
      return $this->paymentResponseURL;
    }

    /**
     * @param paymentResponseURL $paymentResponseURL
     * @return \App\Asic\payment
     */
    public function setPaymentResponseURL($paymentResponseURL)
    {
      $this->paymentResponseURL = $paymentResponseURL;
      return $this;
    }

    /**
     * @return paymentCancelURL
     */
    public function getPaymentCancelURL()
    {
      return $this->paymentCancelURL;
    }

    /**
     * @param paymentCancelURL $paymentCancelURL
     * @return \App\Asic\payment
     */
    public function setPaymentCancelURL($paymentCancelURL)
    {
      $this->paymentCancelURL = $paymentCancelURL;
      return $this;
    }

}
