<?php

namespace App\Asic;

class role
{

    /**
     * @var businessEntityType $business
     */
    protected $business = null;

    /**
     * @var outboundBusinessNameType $businessName
     */
    protected $businessName = null;

    /**
     * @var roleTypeType $type
     */
    protected $type = null;

    /**
     * @var addressExtType $address
     */
    protected $address = null;

    /**
     * @var date $startDate
     */
    protected $startDate = null;

    /**
     * @var date $endDate
     */
    protected $endDate = null;

    /**
     * @param businessEntityType $business
     * @param outboundBusinessNameType $businessName
     * @param roleTypeType $type
     * @param addressExtType $address
     * @param date $startDate
     * @param date $endDate
     */
    public function __construct($business, $businessName, $type, $address, $startDate, $endDate)
    {
      $this->business = $business;
      $this->businessName = $businessName;
      $this->type = $type;
      $this->address = $address;
      $this->startDate = $startDate;
      $this->endDate = $endDate;
    }

    /**
     * @return businessEntityType
     */
    public function getBusiness()
    {
      return $this->business;
    }

    /**
     * @param businessEntityType $business
     * @return \App\Asic\role
     */
    public function setBusiness($business)
    {
      $this->business = $business;
      return $this;
    }

    /**
     * @return outboundBusinessNameType
     */
    public function getBusinessName()
    {
      return $this->businessName;
    }

    /**
     * @param outboundBusinessNameType $businessName
     * @return \App\Asic\role
     */
    public function setBusinessName($businessName)
    {
      $this->businessName = $businessName;
      return $this;
    }

    /**
     * @return roleTypeType
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param roleTypeType $type
     * @return \App\Asic\role
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return addressExtType
     */
    public function getAddress()
    {
      return $this->address;
    }

    /**
     * @param addressExtType $address
     * @return \App\Asic\role
     */
    public function setAddress($address)
    {
      $this->address = $address;
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
     * @return \App\Asic\role
     */
    public function setStartDate($startDate)
    {
      $this->startDate = $startDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getEndDate()
    {
      return $this->endDate;
    }

    /**
     * @param date $endDate
     * @return \App\Asic\role
     */
    public function setEndDate($endDate)
    {
      $this->endDate = $endDate;
      return $this;
    }

}
