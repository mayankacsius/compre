<?php

namespace App\Asic;

class actionType
{

    /**
     * @var code $code
     */
    protected $code = null;

    /**
     * @var date $effectiveDate
     */
    protected $effectiveDate = null;

    /**
     * @param code $code
     */
    public function __construct($code)
    {
      $this->code = $code;
    }

    /**
     * @return code
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param code $code
     * @return \App\Asic\actionType
     */
    public function setCode($code)
    {
      $this->code = $code;
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
     * @return \App\Asic\actionType
     */
    public function setEffectiveDate($effectiveDate)
    {
      $this->effectiveDate = $effectiveDate;
      return $this;
    }

}
