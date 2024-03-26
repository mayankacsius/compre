<?php

namespace App\Asic;

class relationship
{

    /**
     * @var positionHeldCodeType $positionHeldCode
     */
    protected $positionHeldCode = null;

    /**
     * @var dateType $effectiveTo
     */
    protected $effectiveTo = null;

    /**
     * @var dateType $effectiveFrom
     */
    protected $effectiveFrom = null;

    /**
     * @param positionHeldCodeType $positionHeldCode
     * @param dateType $effectiveTo
     * @param dateType $effectiveFrom
     */
    public function __construct($positionHeldCode, $effectiveTo, $effectiveFrom)
    {
      $this->positionHeldCode = $positionHeldCode;
      $this->effectiveTo = $effectiveTo;
      $this->effectiveFrom = $effectiveFrom;
    }

    /**
     * @return positionHeldCodeType
     */
    public function getPositionHeldCode()
    {
      return $this->positionHeldCode;
    }

    /**
     * @param positionHeldCodeType $positionHeldCode
     * @return \App\Asic\relationship
     */
    public function setPositionHeldCode($positionHeldCode)
    {
      $this->positionHeldCode = $positionHeldCode;
      return $this;
    }

    /**
     * @return dateType
     */
    public function getEffectiveTo()
    {
      return $this->effectiveTo;
    }

    /**
     * @param dateType $effectiveTo
     * @return \App\Asic\relationship
     */
    public function setEffectiveTo($effectiveTo)
    {
      $this->effectiveTo = $effectiveTo;
      return $this;
    }

    /**
     * @return dateType
     */
    public function getEffectiveFrom()
    {
      return $this->effectiveFrom;
    }

    /**
     * @param dateType $effectiveFrom
     * @return \App\Asic\relationship
     */
    public function setEffectiveFrom($effectiveFrom)
    {
      $this->effectiveFrom = $effectiveFrom;
      return $this;
    }

}
