<?php

namespace App\Asic;

class geographicType
{

    /**
     * @var addressLine1Type $addressLine1
     */
    protected $addressLine1 = null;

    /**
     * @var addressLine2Type $addressLine2
     */
    protected $addressLine2 = null;

    /**
     * @var suburbType $suburb
     */
    protected $suburb = null;

    /**
     * @var postcodeType $postcode
     */
    protected $postcode = null;

    /**
     * @var stateCodeType $stateCode
     */
    protected $stateCode = null;

    /**
     * @var countryCodeType $countryCode
     */
    protected $countryCode = null;

    /**
     * @var DPIDType $DPID
     */
    protected $DPID = null;

    /**
     * @var DPIDStatusCodeType $DPIDStatusCode
     */
    protected $DPIDStatusCode = null;

    /**
     * @var dateType $lastConfirmedDate
     */
    protected $lastConfirmedDate = null;

    /**
     * @var indicatorType $reliabilityIndicatorCode
     */
    protected $reliabilityIndicatorCode = null;

    /**
     * @var dateType $reliabilityIndicatorDate
     */
    protected $reliabilityIndicatorDate = null;

    /**
     * @var dateType $effectiveFrom
     */
    protected $effectiveFrom = null;

    /**
     * @var dateType $effectiveTo
     */
    protected $effectiveTo = null;

    /**
     * @var indicatorType $deleteIndicator
     */
    protected $deleteIndicator = null;

    /**
     * @param postcodeType $postcode
     */
    public function __construct($postcode)
    {
      $this->postcode = $postcode;
    }

    /**
     * @return addressLine1Type
     */
    public function getAddressLine1()
    {
      return $this->addressLine1;
    }

    /**
     * @param addressLine1Type $addressLine1
     * @return \App\Asic\geographicType
     */
    public function setAddressLine1($addressLine1)
    {
      $this->addressLine1 = $addressLine1;
      return $this;
    }

    /**
     * @return addressLine2Type
     */
    public function getAddressLine2()
    {
      return $this->addressLine2;
    }

    /**
     * @param addressLine2Type $addressLine2
     * @return \App\Asic\geographicType
     */
    public function setAddressLine2($addressLine2)
    {
      $this->addressLine2 = $addressLine2;
      return $this;
    }

    /**
     * @return suburbType
     */
    public function getSuburb()
    {
      return $this->suburb;
    }

    /**
     * @param suburbType $suburb
     * @return \App\Asic\geographicType
     */
    public function setSuburb($suburb)
    {
      $this->suburb = $suburb;
      return $this;
    }

    /**
     * @return postcodeType
     */
    public function getPostcode()
    {
      return $this->postcode;
    }

    /**
     * @param postcodeType $postcode
     * @return \App\Asic\geographicType
     */
    public function setPostcode($postcode)
    {
      $this->postcode = $postcode;
      return $this;
    }

    /**
     * @return stateCodeType
     */
    public function getStateCode()
    {
      return $this->stateCode;
    }

    /**
     * @param stateCodeType $stateCode
     * @return \App\Asic\geographicType
     */
    public function setStateCode($stateCode)
    {
      $this->stateCode = $stateCode;
      return $this;
    }

    /**
     * @return countryCodeType
     */
    public function getCountryCode()
    {
      return $this->countryCode;
    }

    /**
     * @param countryCodeType $countryCode
     * @return \App\Asic\geographicType
     */
    public function setCountryCode($countryCode)
    {
      $this->countryCode = $countryCode;
      return $this;
    }

    /**
     * @return DPIDType
     */
    public function getDPID()
    {
      return $this->DPID;
    }

    /**
     * @param DPIDType $DPID
     * @return \App\Asic\geographicType
     */
    public function setDPID($DPID)
    {
      $this->DPID = $DPID;
      return $this;
    }

    /**
     * @return DPIDStatusCodeType
     */
    public function getDPIDStatusCode()
    {
      return $this->DPIDStatusCode;
    }

    /**
     * @param DPIDStatusCodeType $DPIDStatusCode
     * @return \App\Asic\geographicType
     */
    public function setDPIDStatusCode($DPIDStatusCode)
    {
      $this->DPIDStatusCode = $DPIDStatusCode;
      return $this;
    }

    /**
     * @return dateType
     */
    public function getLastConfirmedDate()
    {
      return $this->lastConfirmedDate;
    }

    /**
     * @param dateType $lastConfirmedDate
     * @return \App\Asic\geographicType
     */
    public function setLastConfirmedDate($lastConfirmedDate)
    {
      $this->lastConfirmedDate = $lastConfirmedDate;
      return $this;
    }

    /**
     * @return indicatorType
     */
    public function getReliabilityIndicatorCode()
    {
      return $this->reliabilityIndicatorCode;
    }

    /**
     * @param indicatorType $reliabilityIndicatorCode
     * @return \App\Asic\geographicType
     */
    public function setReliabilityIndicatorCode($reliabilityIndicatorCode)
    {
      $this->reliabilityIndicatorCode = $reliabilityIndicatorCode;
      return $this;
    }

    /**
     * @return dateType
     */
    public function getReliabilityIndicatorDate()
    {
      return $this->reliabilityIndicatorDate;
    }

    /**
     * @param dateType $reliabilityIndicatorDate
     * @return \App\Asic\geographicType
     */
    public function setReliabilityIndicatorDate($reliabilityIndicatorDate)
    {
      $this->reliabilityIndicatorDate = $reliabilityIndicatorDate;
      return $this;
    }

    /**
     * @return dateType
     */
    public function getEffectiveFrom()
    {
      return $this->effectiveFrom;
    }

    /**
     * @param dateType $effectiveFrom
     * @return \App\Asic\geographicType
     */
    public function setEffectiveFrom($effectiveFrom)
    {
      $this->effectiveFrom = $effectiveFrom;
      return $this;
    }

    /**
     * @return dateType
     */
    public function getEffectiveTo()
    {
      return $this->effectiveTo;
    }

    /**
     * @param dateType $effectiveTo
     * @return \App\Asic\geographicType
     */
    public function setEffectiveTo($effectiveTo)
    {
      $this->effectiveTo = $effectiveTo;
      return $this;
    }

    /**
     * @return indicatorType
     */
    public function getDeleteIndicator()
    {
      return $this->deleteIndicator;
    }

    /**
     * @param indicatorType $deleteIndicator
     * @return \App\Asic\geographicType
     */
    public function setDeleteIndicator($deleteIndicator)
    {
      $this->deleteIndicator = $deleteIndicator;
      return $this;
    }

}
