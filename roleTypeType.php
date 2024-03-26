<?php

namespace App\Asic;

class roleTypeType
{

    /**
     * @var roleCodeType $code
     */
    protected $code = null;

    /**
     * @var description $description
     */
    protected $description = null;

    /**
     * @param roleCodeType $code
     * @param description $description
     */
    public function __construct($code, $description)
    {
      $this->code = $code;
      $this->description = $description;
    }

    /**
     * @return roleCodeType
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param roleCodeType $code
     * @return \App\Asic\roleTypeType
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
     * @return \App\Asic\roleTypeType
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

}
