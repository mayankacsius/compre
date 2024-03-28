<?php

namespace App\Asic;

class initiatePaymentReplyDataType
{

    /**
     * @var lodgements $lodgements
     */
    protected $lodgements = null;

    /**
     * @var payment $payment
     */
    protected $payment = null;

    /**
     * @param lodgements $lodgements
     */
    public function __construct($lodgements)
    {
      $this->lodgements = $lodgements;
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
     * @return \App\Asic\initiatePaymentReplyDataType
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
     * @return \App\Asic\initiatePaymentReplyDataType
     */
    public function setPayment($payment)
    {
      $this->payment = $payment;
      return $this;
    }

}
