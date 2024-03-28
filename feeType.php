<?php

namespace App\Asic;

class feeType
{

    /**
     * @var feeType $feeType
     */
    protected $feeType = null;

    /**
     * @var feeSubType $feeSubType
     */
    protected $feeSubType = null;

    /**
     * @var feeDescription $feeDescription
     */
    protected $feeDescription = null;

    /**
     * @param feeType $feeType
     */
    public function __construct($feeType)
    {
      $this->feeType = $feeType;
    }

    /**
     * @return feeType
     */
    public function getFeeType()
    {
      return $this->feeType;
    }

    /**
     * @param feeType $feeType
     * @return \App\Asic\feeType
     */
    public function setFeeType($feeType)
    {
      $this->feeType = $feeType;
      return $this;
    }

    /**
     * @return feeSubType
     */
    public function getFeeSubType()
    {
      return $this->feeSubType;
    }

    /**
     * @param feeSubType $feeSubType
     * @return \App\Asic\feeType
     */
    public function setFeeSubType($feeSubType)
    {
      $this->feeSubType = $feeSubType;
      return $this;
    }

    /**
     * @return feeDescription
     */
    public function getFeeDescription()
    {
      return $this->feeDescription;
    }

    /**
     * @param feeDescription $feeDescription
     * @return \App\Asic\feeType
     */
    public function setFeeDescription($feeDescription)
    {
      $this->feeDescription = $feeDescription;
      return $this;
    }

}
