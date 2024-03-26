<?php

namespace App\Asic;

class billingAddress
{

    /**
     * @var addressType $address
     */
    protected $address = null;

    /**
     * @var addressType $addressType
     */
    protected $addressType = null;

    /**
     * @var boolean $returnToSenderIndicator
     */
    protected $returnToSenderIndicator = null;

    /**
     * @var boolean $removeAddress
     */
    protected $removeAddress = null;

    /**
     * @param addressType $address
     * @param addressType $addressType
     * @param boolean $returnToSenderIndicator
     * @param boolean $removeAddress
     */
    public function __construct($address, $addressType, $returnToSenderIndicator, $removeAddress)
    {
      $this->address = $address;
      $this->addressType = $addressType;
      $this->returnToSenderIndicator = $returnToSenderIndicator;
      $this->removeAddress = $removeAddress;
    }

    /**
     * @return addressType
     */
    public function getAddress()
    {
      return $this->address;
    }

    /**
     * @param addressType $address
     * @return \App\Asic\billingAddress
     */
    public function setAddress($address)
    {
      $this->address = $address;
      return $this;
    }

    /**
     * @return addressType
     */
    public function getAddressType()
    {
      return $this->addressType;
    }

    /**
     * @param addressType $addressType
     * @return \App\Asic\billingAddress
     */
    public function setAddressType($addressType)
    {
      $this->addressType = $addressType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnToSenderIndicator()
    {
      return $this->returnToSenderIndicator;
    }

    /**
     * @param boolean $returnToSenderIndicator
     * @return \App\Asic\billingAddress
     */
    public function setReturnToSenderIndicator($returnToSenderIndicator)
    {
      $this->returnToSenderIndicator = $returnToSenderIndicator;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRemoveAddress()
    {
      return $this->removeAddress;
    }

    /**
     * @param boolean $removeAddress
     * @return \App\Asic\billingAddress
     */
    public function setRemoveAddress($removeAddress)
    {
      $this->removeAddress = $removeAddress;
      return $this;
    }

}
