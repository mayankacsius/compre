<?php

namespace App\Asic;

class shareStructure
{

    /**
     * @var holdings $holdings
     */
    protected $holdings = null;

    /**
     * @param holdings $holdings
     */
    public function __construct($holdings)
    {
      $this->holdings = $holdings;
    }

    /**
     * @return holdings
     */
    public function getHoldings()
    {
      return $this->holdings;
    }

    /**
     * @param holdings $holdings
     * @return \App\Asic\shareStructure
     */
    public function setHoldings($holdings)
    {
      $this->holdings = $holdings;
      return $this;
    }

}
