<?php

namespace App\Asic;

class bnAddressType
{

    /**
     * @var type $type
     */
    protected $type = null;

    /**
     * @var careOf $careOf
     */
    protected $careOf = null;

    /**
     * @var string $country
     */
    protected $country = null;

    /**
     * @var date $effectiveDate
     */
    protected $effectiveDate = null;

    /**
     * @var physicalAddress $physicalAddress
     */
    protected $physicalAddress = null;

    /**
     * @param date $effectiveDate
     * @param physicalAddress $physicalAddress
     */
    public function __construct($effectiveDate, $physicalAddress)
    {
      $this->effectiveDate = $effectiveDate;
      $this->physicalAddress = $physicalAddress;
    }

    /**
     * @return type
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param type $type
     * @return \App\Asic\bnAddressType
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return careOf
     */
    public function getCareOf()
    {
      return $this->careOf;
    }

    /**
     * @param careOf $careOf
     * @return \App\Asic\bnAddressType
     */
    public function setCareOf($careOf)
    {
      $this->careOf = $careOf;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
      return $this->country;
    }

    /**
     * @param string $country
     * @return \App\Asic\bnAddressType
     */
    public function setCountry($country)
    {
      $this->country = $country;
      return $this;
    }

    /**
     * @return date
     */
    public function getEffectiveDate()
    {
      return $this->effectiveDate;
    }

    /**
     * @param date $effectiveDate
     * @return \App\Asic\bnAddressType
     */
    public function setEffectiveDate($effectiveDate)
    {
      $this->effectiveDate = $effectiveDate;
      return $this;
    }

    /**
     * @return physicalAddress
     */
    public function getPhysicalAddress()
    {
      return $this->physicalAddress;
    }

    /**
     * @param physicalAddress $physicalAddress
     * @return \App\Asic\bnAddressType
     */
    public function setPhysicalAddress($physicalAddress)
    {
      $this->physicalAddress = $physicalAddress;
      return $this;
    }

}
