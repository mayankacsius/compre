<?php

namespace App\Asic;

class TradingHourType
{

    /**
     * @var time $officeOpeningHour
     */
    protected $officeOpeningHour = null;

    /**
     * @var time $officeClosingHour
     */
    protected $officeClosingHour = null;

    /**
     * @param time $officeOpeningHour
     * @param time $officeClosingHour
     */
    public function __construct($officeOpeningHour, $officeClosingHour)
    {
      $this->officeOpeningHour = $officeOpeningHour;
      $this->officeClosingHour = $officeClosingHour;
    }

    /**
     * @return time
     */
    public function getOfficeOpeningHour()
    {
      return $this->officeOpeningHour;
    }

    /**
     * @param time $officeOpeningHour
     * @return \App\Asic\TradingHourType
     */
    public function setOfficeOpeningHour($officeOpeningHour)
    {
      $this->officeOpeningHour = $officeOpeningHour;
      return $this;
    }

    /**
     * @return time
     */
    public function getOfficeClosingHour()
    {
      return $this->officeClosingHour;
    }

    /**
     * @param time $officeClosingHour
     * @return \App\Asic\TradingHourType
     */
    public function setOfficeClosingHour($officeClosingHour)
    {
      $this->officeClosingHour = $officeClosingHour;
      return $this;
    }

}
