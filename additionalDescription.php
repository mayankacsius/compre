<?php

namespace App\Asic;

class additionalDescription
{

    /**
     * @var codeType $subformCode
     */
    protected $subformCode = null;

    /**
     * @var descriptionType $subformDescription
     */
    protected $subformDescription = null;

    /**
     * @param codeType $subformCode
     * @param descriptionType $subformDescription
     */
    public function __construct($subformCode, $subformDescription)
    {
      $this->subformCode = $subformCode;
      $this->subformDescription = $subformDescription;
    }

    /**
     * @return codeType
     */
    public function getSubformCode()
    {
      return $this->subformCode;
    }

    /**
     * @param codeType $subformCode
     * @return \App\Asic\additionalDescription
     */
    public function setSubformCode($subformCode)
    {
      $this->subformCode = $subformCode;
      return $this;
    }

    /**
     * @return descriptionType
     */
    public function getSubformDescription()
    {
      return $this->subformDescription;
    }

    /**
     * @param descriptionType $subformDescription
     * @return \App\Asic\additionalDescription
     */
    public function setSubformDescription($subformDescription)
    {
      $this->subformDescription = $subformDescription;
      return $this;
    }

}
