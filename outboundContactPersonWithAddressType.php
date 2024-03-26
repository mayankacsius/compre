<?php

namespace App\Asic;

class outboundContactPersonWithAddressType extends outboundContactPersonType
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
     * @return \App\Asic\outboundContactPersonWithAddressType
     */
    public function setAddress($address)
    {
      $this->address = $address;
      return $this;
    }

}
