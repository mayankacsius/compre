<?php

namespace App\Asic;

class smsType
{

    /**
     * @var smsNumber $smsNumber
     */
    protected $smsNumber = null;

    /**
     * @var date $effectiveDate
     */
    protected $effectiveDate = null;

    /**
     * @param date $effectiveDate
     */
    public function __construct($effectiveDate)
    {
      $this->effectiveDate = $effectiveDate;
    }

    /**
     * @return smsNumber
     */
    public function getSmsNumber()
    {
      return $this->smsNumber;
    }

    /**
     * @param smsNumber $smsNumber
     * @return \App\Asic\smsType
     */
    public function setSmsNumber($smsNumber)
    {
      $this->smsNumber = $smsNumber;
      return $this;
    }

    /**
     * @return date
     */
    public function getEffectiveDate()
    {
      return $this->effectiveDate;
    }

    /**
     * @param date $effectiveDate
     * @return \App\Asic\smsType
     */
    public function setEffectiveDate($effectiveDate)
    {
      $this->effectiveDate = $effectiveDate;
      return $this;
    }

}
