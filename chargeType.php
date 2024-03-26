<?php

namespace App\Asic;

class chargeType
{

    /**
     * @var codeType $code
     */
    protected $code = null;

    /**
     * @var descriptionType $description
     */
    protected $description = null;

    /**
     * @var boolean $historical
     */
    protected $historical = null;

    /**
     * @var boolean $large
     */
    protected $large = null;

    /**
     * @param codeType $code
     * @param descriptionType $description
     */
    public function __construct($code, $description)
    {
      $this->code = $code;
      $this->description = $description;
    }

    /**
     * @return codeType
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param codeType $code
     * @return \App\Asic\chargeType
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return descriptionType
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param descriptionType $description
     * @return \App\Asic\chargeType
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHistorical()
    {
      return $this->historical;
    }

    /**
     * @param boolean $historical
     * @return \App\Asic\chargeType
     */
    public function setHistorical($historical)
    {
      $this->historical = $historical;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLarge()
    {
      return $this->large;
    }

    /**
     * @param boolean $large
     * @return \App\Asic\chargeType
     */
    public function setLarge($large)
    {
      $this->large = $large;
      return $this;
    }

}
