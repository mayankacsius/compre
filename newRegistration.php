<?php

namespace App\Asic;

class newRegistration
{

    /**
     * @var partAndDivision $partAndDivision
     */
    protected $partAndDivision = null;

    /**
     * @param partAndDivision $partAndDivision
     */
    public function __construct($partAndDivision)
    {
      $this->partAndDivision = $partAndDivision;
    }

    /**
     * @return partAndDivision
     */
    public function getPartAndDivision()
    {
      return $this->partAndDivision;
    }

    /**
     * @param partAndDivision $partAndDivision
     * @return \App\Asic\newRegistration
     */
    public function setPartAndDivision($partAndDivision)
    {
      $this->partAndDivision = $partAndDivision;
      return $this;
    }

}
