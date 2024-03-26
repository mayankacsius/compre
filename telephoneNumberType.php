<?php

namespace App\Asic;

class telephoneNumberType
{

    /**
     * @var telephoneNumber $telephoneNumber
     */
    protected $telephoneNumber = null;

    /**
     * @var phoneType $phoneType
     */
    protected $phoneType = null;

    /**
     * @param telephoneNumber $telephoneNumber
     * @param phoneType $phoneType
     */
    public function __construct($telephoneNumber, $phoneType)
    {
      $this->telephoneNumber = $telephoneNumber;
      $this->phoneType = $phoneType;
    }

    /**
     * @return telephoneNumber
     */
    public function getTelephoneNumber()
    {
      return $this->telephoneNumber;
    }

    /**
     * @param telephoneNumber $telephoneNumber
     * @return \App\Asic\telephoneNumberType
     */
    public function setTelephoneNumber($telephoneNumber)
    {
      $this->telephoneNumber = $telephoneNumber;
      return $this;
    }

    /**
     * @return phoneType
     */
    public function getPhoneType()
    {
      return $this->phoneType;
    }

    /**
     * @param phoneType $phoneType
     * @return \App\Asic\telephoneNumberType
     */
    public function setPhoneType($phoneType)
    {
      $this->phoneType = $phoneType;
      return $this;
    }

}
