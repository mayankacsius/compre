<?php

namespace App\Asic;

class ebusiness
{

    /**
     * @var referenceNoType $referenceNumber
     */
    protected $referenceNumber = null;

    /**
     * @param referenceNoType $referenceNumber
     */
    public function __construct($referenceNumber)
    {
      $this->referenceNumber = $referenceNumber;
    }

    /**
     * @return referenceNoType
     */
    public function getReferenceNumber()
    {
      return $this->referenceNumber;
    }

    /**
     * @param referenceNoType $referenceNumber
     * @return \App\Asic\ebusiness
     */
    public function setReferenceNumber($referenceNumber)
    {
      $this->referenceNumber = $referenceNumber;
      return $this;
    }

}
