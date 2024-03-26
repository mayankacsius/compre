<?php

namespace App\Asic;

class statusType
{

    /**
     * @var code $code
     */
    protected $code = null;

    /**
     * @var description $description
     */
    protected $description = null;

    /**
     * @var boolean $isRegistered
     */
    protected $isRegistered = null;

    /**
     * @param code $code
     * @param boolean $isRegistered
     */
    public function __construct($code, $isRegistered)
    {
      $this->code = $code;
      $this->isRegistered = $isRegistered;
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
     * @return \App\Asic\statusType
     */
    public function setCode($code)
    {
      $this->code = $code;
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
     * @return \App\Asic\statusType
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsRegistered()
    {
      return $this->isRegistered;
    }

    /**
     * @param boolean $isRegistered
     * @return \App\Asic\statusType
     */
    public function setIsRegistered($isRegistered)
    {
      $this->isRegistered = $isRegistered;
      return $this;
    }

}
