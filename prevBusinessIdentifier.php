<?php

namespace App\Asic;

class prevBusinessIdentifier
{

    /**
     * @var PrevStateName $PrevStateName
     */
    protected $PrevStateName = null;

    /**
     * @var stateNumberType $PrevStateNumber
     */
    protected $PrevStateNumber = null;

    /**
     * @param PrevStateName $PrevStateName
     * @param stateNumberType $PrevStateNumber
     */
    public function __construct($PrevStateName, $PrevStateNumber)
    {
      $this->PrevStateName = $PrevStateName;
      $this->PrevStateNumber = $PrevStateNumber;
    }

    /**
     * @return PrevStateName
     */
    public function getPrevStateName()
    {
      return $this->PrevStateName;
    }

    /**
     * @param PrevStateName $PrevStateName
     * @return \App\Asic\prevBusinessIdentifier
     */
    public function setPrevStateName($PrevStateName)
    {
      $this->PrevStateName = $PrevStateName;
      return $this;
    }

    /**
     * @return stateNumberType
     */
    public function getPrevStateNumber()
    {
      return $this->PrevStateNumber;
    }

    /**
     * @param stateNumberType $PrevStateNumber
     * @return \App\Asic\prevBusinessIdentifier
     */
    public function setPrevStateNumber($PrevStateNumber)
    {
      $this->PrevStateNumber = $PrevStateNumber;
      return $this;
    }

}
