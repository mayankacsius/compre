<?php

namespace App\Asic;

class ACNAsName
{

    /**
     * @var legalElementsType $legalElements
     */
    protected $legalElements = null;

    /**
     * @param legalElementsType $legalElements
     */
    public function __construct($legalElements)
    {
      $this->legalElements = $legalElements;
    }

    /**
     * @return legalElementsType
     */
    public function getLegalElements()
    {
      return $this->legalElements;
    }

    /**
     * @param legalElementsType $legalElements
     * @return \App\Asic\ACNAsName
     */
    public function setLegalElements($legalElements)
    {
      $this->legalElements = $legalElements;
      return $this;
    }

}
