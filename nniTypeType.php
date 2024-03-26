<?php

namespace App\Asic;

class nniTypeType
{

    /**
     * @var nniTypeCodeType $code
     */
    protected $code = null;

    /**
     * @var descriptionType $description
     */
    protected $description = null;

    /**
     * @param nniTypeCodeType $code
     */
    public function __construct($code)
    {
      $this->code = $code;
    }

    /**
     * @return nniTypeCodeType
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param nniTypeCodeType $code
     * @return \App\Asic\nniTypeType
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
     * @return \App\Asic\nniTypeType
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

}
