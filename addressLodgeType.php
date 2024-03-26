<?php

namespace App\Asic;

class addressLodgeType
{

    /**
     * @var addressTypeType $type
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
     * @var date $startDate
     */
    protected $startDate = null;

    /**
     * @var DPID $DPID
     */
    protected $DPID = null;

    /**
     * @var physicalAddress $physicalAddress
     */
    protected $physicalAddress = null;

    /**
     * @var unstructuredAddress $unstructuredAddress
     */
    protected $unstructuredAddress = null;

    /**
     * @var semiStructuredPhysicalAddress $semiStructuredPhysicalAddress
     */
    protected $semiStructuredPhysicalAddress = null;

    /**
     * @param physicalAddress $physicalAddress
     * @param unstructuredAddress $unstructuredAddress
     * @param semiStructuredPhysicalAddress $semiStructuredPhysicalAddress
     */
    public function __construct($physicalAddress, $unstructuredAddress, $semiStructuredPhysicalAddress)
    {
      $this->physicalAddress = $physicalAddress;
      $this->unstructuredAddress = $unstructuredAddress;
      $this->semiStructuredPhysicalAddress = $semiStructuredPhysicalAddress;
    }

    /**
     * @return addressTypeType
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param addressTypeType $type
     * @return \App\Asic\addressLodgeType
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
     * @return \App\Asic\addressLodgeType
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
     * @return \App\Asic\addressLodgeType
     */
    public function setCountry($country)
    {
      $this->country = $country;
      return $this;
    }

    /**
     * @return date
     */
    public function getStartDate()
    {
      return $this->startDate;
    }

    /**
     * @param date $startDate
     * @return \App\Asic\addressLodgeType
     */
    public function setStartDate($startDate)
    {
      $this->startDate = $startDate;
      return $this;
    }

    /**
     * @return DPID
     */
    public function getDPID()
    {
      return $this->DPID;
    }

    /**
     * @param DPID $DPID
     * @return \App\Asic\addressLodgeType
     */
    public function setDPID($DPID)
    {
      $this->DPID = $DPID;
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
     * @return \App\Asic\addressLodgeType
     */
    public function setPhysicalAddress($physicalAddress)
    {
      $this->physicalAddress = $physicalAddress;
      return $this;
    }

    /**
     * @return unstructuredAddress
     */
    public function getUnstructuredAddress()
    {
      return $this->unstructuredAddress;
    }

    /**
     * @param unstructuredAddress $unstructuredAddress
     * @return \App\Asic\addressLodgeType
     */
    public function setUnstructuredAddress($unstructuredAddress)
    {
      $this->unstructuredAddress = $unstructuredAddress;
      return $this;
    }

    /**
     * @return semiStructuredPhysicalAddress
     */
    public function getSemiStructuredPhysicalAddress()
    {
      return $this->semiStructuredPhysicalAddress;
    }

    /**
     * @param semiStructuredPhysicalAddress $semiStructuredPhysicalAddress
     * @return \App\Asic\addressLodgeType
     */
    public function setSemiStructuredPhysicalAddress($semiStructuredPhysicalAddress)
    {
      $this->semiStructuredPhysicalAddress = $semiStructuredPhysicalAddress;
      return $this;
    }

}
