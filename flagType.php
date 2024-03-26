<?php

namespace App\Asic;

class flagType
{

    /**
     * @var code $code
     */
    protected $code = null;

    /**
     * @var boolean $value
     */
    protected $value = null;

    /**
     * @var description $description
     */
    protected $description = null;

    /**
     * @param code $code
     * @param boolean $value
     */
    public function __construct($code, $value)
    {
      $this->code = $code;
      $this->value = $value;
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
     * @return \App\Asic\flagType
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param boolean $value
     * @return \App\Asic\flagType
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

    /**
     * @return description
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param description $description
     * @return \App\Asic\flagType
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

}
