<?php

namespace App\Asic;

class contactPersonWithAddressType extends contactPersonType
{

    /**
     * @var addressType $address
     */
    protected $address = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return \App\Asic\contactPersonWithAddressType
     */
    public function setAddress($address)
    {
      $this->address = $address;
      return $this;
    }

}
