<?php

namespace App\Asic;

class businessNameExtractType extends businessEntityType
{

    /**
     * @var business[] $business
     */
    protected $business = null;

    /**
     * @var outboundBusinessNameType $businessName
     */
    protected $businessName = null;

    /**
     * @param individualType $individual
     * @param organisationType $organisation
     * @param outboundBusinessNameType $businessName
     */
    public function __construct($individual, $organisation, $businessName)
    {
      parent::__construct($individual, $organisation);
      $this->businessName = $businessName;
    }

    /**
     * @return business[]
     */
    public function getBusiness()
    {
      return $this->business;
    }

    /**
     * @param business[] $business
     * @return \App\Asic\businessNameExtractType
     */
    public function setBusiness(array $business = null)
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
     * @return \App\Asic\businessNameExtractType
     */
    public function setBusinessName($businessName)
    {
      $this->businessName = $businessName;
      return $this;
    }

}
