<?php

namespace App\Asic;

class simpleBnExtractType
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
     * @param businessEntityType $business
     * @param outboundBusinessNameType $businessName
     */
    public function __construct($business, $businessName)
    {
      $this->business = $business;
      $this->businessName = $businessName;
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
     * @return \App\Asic\simpleBnExtractType
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
     * @return \App\Asic\simpleBnExtractType
     */
    public function setBusinessName($businessName)
    {
      $this->businessName = $businessName;
      return $this;
    }

}
