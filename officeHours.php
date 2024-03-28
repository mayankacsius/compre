<?php

namespace App\Asic;

class officeHours
{

    /**
     * @var boolean $isStandardHours
     */
    protected $isStandardHours = null;

    /**
     * @var TradingHourType $tradingHour
     */
    protected $tradingHour = null;

    /**
     * @param boolean $isStandardHours
     * @param TradingHourType $tradingHour
     */
    public function __construct($isStandardHours, $tradingHour)
    {
      $this->isStandardHours = $isStandardHours;
      $this->tradingHour = $tradingHour;
    }

    /**
     * @return boolean
     */
    public function getIsStandardHours()
    {
      return $this->isStandardHours;
    }

    /**
     * @param boolean $isStandardHours
     * @return \App\Asic\officeHours
     */
    public function setIsStandardHours($isStandardHours)
    {
      $this->isStandardHours = $isStandardHours;
      return $this;
    }

    /**
     * @return TradingHourType
     */
    public function getTradingHour()
    {
      return $this->tradingHour;
    }

    /**
     * @param TradingHourType $tradingHour
     * @return \App\Asic\officeHours
     */
    public function setTradingHour($tradingHour)
    {
      $this->tradingHour = $tradingHour;
      return $this;
    }

}
