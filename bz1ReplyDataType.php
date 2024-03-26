<?php

namespace App\Asic;

class bz1ReplyDataType
{

    /**
     * @var nameAvailabilityResponseType $nameResult
     */
    protected $nameResult = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return nameAvailabilityResponseType
     */
    public function getNameResult()
    {
      return $this->nameResult;
    }

    /**
     * @param nameAvailabilityResponseType $nameResult
     * @return \App\Asic\bz1ReplyDataType
     */
    public function setNameResult($nameResult)
    {
      $this->nameResult = $nameResult;
      return $this;
    }

}
