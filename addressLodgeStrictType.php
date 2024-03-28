<?php

namespace App\Asic;

class addressLodgeStrictType
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
     * @var country $country
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
     * @return type
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param type $type
     * @return \App\Asic\addressLodgeStrictType
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
     * @return \App\Asic\addressLodgeStrictType
     */
    public function setCareOf($careOf)
    {
      $this->careOf = $careOf;
      return $this;
    }

    /**
     * @return country
     */
    public function getCountry()
    {
      return $this->country;
    }

    /**
     * @param country $country
     * @return \App\Asic\addressLodgeStrictType
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
     * @return \App\Asic\addressLodgeStrictType
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
     * @return \App\Asic\addressLodgeStrictType
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
     * @return \App\Asic\addressLodgeStrictType
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
     * @return \App\Asic\addressLodgeStrictType
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
     * @return \App\Asic\addressLodgeStrictType
     */
    public function setSemiStructuredPhysicalAddress($semiStructuredPhysicalAddress)
    {
      $this->semiStructuredPhysicalAddress = $semiStructuredPhysicalAddress;
      return $this;
    }

}
