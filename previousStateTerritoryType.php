<?php

namespace App\Asic;

class previousStateTerritoryType
{

    /**
     * @var number $number
     */
    protected $number = null;

    /**
     * @var stateTerritoryCodeType $stateTerritoryCode
     */
    protected $stateTerritoryCode = null;

    /**
     * @param number $number
     * @param stateTerritoryCodeType $stateTerritoryCode
     */
    public function __construct($number, $stateTerritoryCode)
    {
      $this->number = $number;
      $this->stateTerritoryCode = $stateTerritoryCode;
    }

    /**
     * @return number
     */
    public function getNumber()
    {
      return $this->number;
    }

    /**
     * @param number $number
     * @return \App\Asic\previousStateTerritoryType
     */
    public function setNumber($number)
    {
      $this->number = $number;
      return $this;
    }

    /**
     * @return stateTerritoryCodeType
     */
    public function getStateTerritoryCode()
    {
      return $this->stateTerritoryCode;
    }

    /**
     * @param stateTerritoryCodeType $stateTerritoryCode
     * @return \App\Asic\previousStateTerritoryType
     */
    public function setStateTerritoryCode($stateTerritoryCode)
    {
      $this->stateTerritoryCode = $stateTerritoryCode;
      return $this;
    }

}
