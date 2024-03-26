<?php

namespace App\Asic;

class billingType
{

    /**
     * @var charge $charge
     */
    protected $charge = null;

    /**
     * @var invoiceType $fees
     */
    protected $fees = null;

    /**
     * @param charge $charge
     */
    public function __construct($charge)
    {
      $this->charge = $charge;
    }

    /**
     * @return charge
     */
    public function getCharge()
    {
      return $this->charge;
    }

    /**
     * @param charge $charge
     * @return \App\Asic\billingType
     */
    public function setCharge($charge)
    {
      $this->charge = $charge;
      return $this;
    }

    /**
     * @return invoiceType
     */
    public function getFees()
    {
      return $this->fees;
    }

    /**
     * @param invoiceType $fees
     * @return \App\Asic\billingType
     */
    public function setFees($fees)
    {
      $this->fees = $fees;
      return $this;
    }

}
