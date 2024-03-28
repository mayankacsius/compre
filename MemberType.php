<?php

namespace App\Asic;

class MemberType extends addressLodgeStrictType
{

    /**
     * @var EntityNameType $name
     */
    protected $name = null;

    /**
     * @var address $address
     */
    protected $address = null;

    /**
     * @param physicalAddress $physicalAddress
     * @param unstructuredAddress $unstructuredAddress
     * @param semiStructuredPhysicalAddress $semiStructuredPhysicalAddress
     * @param EntityNameType $name
     * @param address $address
     */
    public function __construct($physicalAddress, $unstructuredAddress, $semiStructuredPhysicalAddress, $name, $address)
    {
      parent::__construct($physicalAddress, $unstructuredAddress, $semiStructuredPhysicalAddress);
      $this->name = $name;
      $this->address = $address;
    }

    /**
     * @return EntityNameType
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param EntityNameType $name
     * @return \App\Asic\MemberType
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return address
     */
    public function getAddress()
    {
      return $this->address;
    }

    /**
     * @param address $address
     * @return \App\Asic\MemberType
     */
    public function setAddress($address)
    {
      $this->address = $address;
      return $this;
    }

}
