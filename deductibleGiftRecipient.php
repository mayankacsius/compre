<?php

namespace App\Asic;

class deductibleGiftRecipient
{

    /**
     * @var string $DGRStatusCode
     */
    protected $DGRStatusCode = null;

    /**
     * @var dateType $effectiveFrom
     */
    protected $effectiveFrom = null;

    /**
     * @var dateType $effectiveTo
     */
    protected $effectiveTo = null;

    /**
     * @param string $DGRStatusCode
     * @param dateType $effectiveFrom
     * @param dateType $effectiveTo
     */
    public function __construct($DGRStatusCode, $effectiveFrom, $effectiveTo)
    {
      $this->DGRStatusCode = $DGRStatusCode;
      $this->effectiveFrom = $effectiveFrom;
      $this->effectiveTo = $effectiveTo;
    }

    /**
     * @return string
     */
    public function getDGRStatusCode()
    {
      return $this->DGRStatusCode;
    }

    /**
     * @param string $DGRStatusCode
     * @return \App\Asic\deductibleGiftRecipient
     */
    public function setDGRStatusCode($DGRStatusCode)
    {
      $this->DGRStatusCode = $DGRStatusCode;
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
     * @return \App\Asic\deductibleGiftRecipient
     */
    public function setEffectiveFrom($effectiveFrom)
    {
      $this->effectiveFrom = $effectiveFrom;
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
     * @return \App\Asic\deductibleGiftRecipient
     */
    public function setEffectiveTo($effectiveTo)
    {
      $this->effectiveTo = $effectiveTo;
      return $this;
    }

}
