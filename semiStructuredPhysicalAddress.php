<?php

namespace App\Asic;

class semiStructuredPhysicalAddress
{

    /**
     * @var addressLine1 $addressLine1
     */
    protected $addressLine1 = null;

    /**
     * @var addressLine2 $addressLine2
     */
    protected $addressLine2 = null;

    /**
     * @var string $locality
     */
    protected $locality = null;

    /**
     * @var stateTerritoryCodeType $state
     */
    protected $state = null;

    /**
     * @var postCode $postCode
     */
    protected $postCode = null;

    /**
     * @param addressLine1 $addressLine1
     * @param addressLine2 $addressLine2
     * @param string $locality
     * @param stateTerritoryCodeType $state
     * @param postCode $postCode
     */
    public function __construct($addressLine1, $addressLine2, $locality, $state, $postCode)
    {
      $this->addressLine1 = $addressLine1;
      $this->addressLine2 = $addressLine2;
      $this->locality = $locality;
      $this->state = $state;
      $this->postCode = $postCode;
    }

    /**
     * @return addressLine1
     */
    public function getAddressLine1()
    {
      return $this->addressLine1;
    }

    /**
     * @param addressLine1 $addressLine1
     * @return \App\Asic\semiStructuredPhysicalAddress
     */
    public function setAddressLine1($addressLine1)
    {
      $this->addressLine1 = $addressLine1;
      return $this;
    }

    /**
     * @return addressLine2
     */
    public function getAddressLine2()
    {
      return $this->addressLine2;
    }

    /**
     * @param addressLine2 $addressLine2
     * @return \App\Asic\semiStructuredPhysicalAddress
     */
    public function setAddressLine2($addressLine2)
    {
      $this->addressLine2 = $addressLine2;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocality()
    {
      return $this->locality;
    }

    /**
     * @param string $locality
     * @return \App\Asic\semiStructuredPhysicalAddress
     */
    public function setLocality($locality)
    {
      $this->locality = $locality;
      return $this;
    }

    /**
     * @return stateTerritoryCodeType
     */
    public function getState()
    {
      return $this->state;
    }

    /**
     * @param stateTerritoryCodeType $state
     * @return \App\Asic\semiStructuredPhysicalAddress
     */
    public function setState($state)
    {
      $this->state = $state;
      return $this;
    }

    /**
     * @return postCode
     */
    public function getPostCode()
    {
      return $this->postCode;
    }

    /**
     * @param postCode $postCode
     * @return \App\Asic\semiStructuredPhysicalAddress
     */
    public function setPostCode($postCode)
    {
      $this->postCode = $postCode;
      return $this;
    }

}
