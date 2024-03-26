<?php

namespace App\Asic;

class invoicePeriod
{

    /**
     * @var date $dateStart
     */
    protected $dateStart = null;

    /**
     * @var date $dateEnd
     */
    protected $dateEnd = null;

    /**
     * @param date $dateStart
     * @param date $dateEnd
     */
    public function __construct($dateStart, $dateEnd)
    {
      $this->dateStart = $dateStart;
      $this->dateEnd = $dateEnd;
    }

    /**
     * @return date
     */
    public function getDateStart()
    {
      return $this->dateStart;
    }

    /**
     * @param date $dateStart
     * @return \App\Asic\invoicePeriod
     */
    public function setDateStart($dateStart)
    {
      $this->dateStart = $dateStart;
      return $this;
    }

    /**
     * @return date
     */
    public function getDateEnd()
    {
      return $this->dateEnd;
    }

    /**
     * @param date $dateEnd
     * @return \App\Asic\invoicePeriod
     */
    public function setDateEnd($dateEnd)
    {
      $this->dateEnd = $dateEnd;
      return $this;
    }

}
