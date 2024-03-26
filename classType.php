<?php

namespace App\Asic;

class classType
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
     * @param code $code
     * @param description $description
     */
    public function __construct($code, $description)
    {
      $this->code = $code;
      $this->description = $description;
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
     * @return \App\Asic\classType
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
     * @return \App\Asic\classType
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

}
