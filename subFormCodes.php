<?php

namespace App\Asic;

class subFormCodes
{

    /**
     * @var subFormCode $subFormCode
     */
    protected $subFormCode = null;

    /**
     * @param subFormCode $subFormCode
     */
    public function __construct($subFormCode)
    {
      $this->subFormCode = $subFormCode;
    }

    /**
     * @return subFormCode
     */
    public function getSubFormCode()
    {
      return $this->subFormCode;
    }

    /**
     * @param subFormCode $subFormCode
     * @return \App\Asic\subFormCodes
     */
    public function setSubFormCode($subFormCode)
    {
      $this->subFormCode = $subFormCode;
      return $this;
    }

}
