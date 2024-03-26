<?php

namespace App\Asic;

class unstructuredAddress
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
     * @var addressLine3 $addressLine3
     */
    protected $addressLine3 = null;

    /**
     * @var addressLine4 $addressLine4
     */
    protected $addressLine4 = null;

    /**
     * @param addressLine1 $addressLine1
     * @param addressLine2 $addressLine2
     * @param addressLine3 $addressLine3
     * @param addressLine4 $addressLine4
     */
    public function __construct($addressLine1, $addressLine2, $addressLine3, $addressLine4)
    {
      $this->addressLine1 = $addressLine1;
      $this->addressLine2 = $addressLine2;
      $this->addressLine3 = $addressLine3;
      $this->addressLine4 = $addressLine4;
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
     * @return \App\Asic\unstructuredAddress
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
     * @return \App\Asic\unstructuredAddress
     */
    public function setAddressLine2($addressLine2)
    {
      $this->addressLine2 = $addressLine2;
      return $this;
    }

    /**
     * @return addressLine3
     */
    public function getAddressLine3()
    {
      return $this->addressLine3;
    }

    /**
     * @param addressLine3 $addressLine3
     * @return \App\Asic\unstructuredAddress
     */
    public function setAddressLine3($addressLine3)
    {
      $this->addressLine3 = $addressLine3;
      return $this;
    }

    /**
     * @return addressLine4
     */
    public function getAddressLine4()
    {
      return $this->addressLine4;
    }

    /**
     * @param addressLine4 $addressLine4
     * @return \App\Asic\unstructuredAddress
     */
    public function setAddressLine4($addressLine4)
    {
      $this->addressLine4 = $addressLine4;
      return $this;
    }

}
