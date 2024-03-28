<?php

namespace App\Asic;

class holdings
{

    /**
     * @var ShareHoldingDetailsType $holding
     */
    protected $holding = null;

    /**
     * @param ShareHoldingDetailsType $holding
     */
    public function __construct($holding)
    {
      $this->holding = $holding;
    }

    /**
     * @return ShareHoldingDetailsType
     */
    public function getHolding()
    {
      return $this->holding;
    }

    /**
     * @param ShareHoldingDetailsType $holding
     * @return \App\Asic\holdings
     */
    public function setHolding($holding)
    {
      $this->holding = $holding;
      return $this;
    }

}
