<?php

namespace App\Asic;

class addressExtType
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
     * @var string[] $addressLine
     */
    protected $addressLine = null;

    /**
     * @var iso3166CountryCode $iso3166CountryCode
     */
    protected $iso3166CountryCode = null;

    /**
     * @var string $country
     */
    protected $country = null;

    /**
     * @var DPID $DPID
     */
    protected $DPID = null;

    /**
     * @var streetType $street
     */
    protected $street = null;

    /**
     * @var locality $locality
     */
    protected $locality = null;

    /**
     * @var postCode $postCode
     */
    protected $postCode = null;

    /**
     * @var stateTerritoryCodeType $state
     */
    protected $state = null;

    /**
     * @var boolean $override
     */
    protected $override = null;

    /**
     * @var action $action
     */
    protected $action = null;

    /**
     * @var date $startDate
     */
    protected $startDate = null;

    /**
     * @var date $endDate
     */
    protected $endDate = null;

    /**
     * @param string[] $addressLine
     * @param iso3166CountryCode $iso3166CountryCode
     * @param string $country
     */
    public function __construct(array $addressLine, $iso3166CountryCode, $country)
    {
      $this->addressLine = $addressLine;
      $this->iso3166CountryCode = $iso3166CountryCode;
      $this->country = $country;
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
     * @return \App\Asic\addressExtType
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
     * @return \App\Asic\addressExtType
     */
    public function setCareOf($careOf)
    {
      $this->careOf = $careOf;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getAddressLine()
    {
      return $this->addressLine;
    }

    /**
     * @param string[] $addressLine
     * @return \App\Asic\addressExtType
     */
    public function setAddressLine(array $addressLine)
    {
      $this->addressLine = $addressLine;
      return $this;
    }

    /**
     * @return iso3166CountryCode
     */
    public function getIso3166CountryCode()
    {
      return $this->iso3166CountryCode;
    }

    /**
     * @param iso3166CountryCode $iso3166CountryCode
     * @return \App\Asic\addressExtType
     */
    public function setIso3166CountryCode($iso3166CountryCode)
    {
      $this->iso3166CountryCode = $iso3166CountryCode;
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
     * @return \App\Asic\addressExtType
     */
    public function setCountry($country)
    {
      $this->country = $country;
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
     * @return \App\Asic\addressExtType
     */
    public function setDPID($DPID)
    {
      $this->DPID = $DPID;
      return $this;
    }

    /**
     * @return streetType
     */
    public function getStreet()
    {
      return $this->street;
    }

    /**
     * @param streetType $street
     * @return \App\Asic\addressExtType
     */
    public function setStreet($street)
    {
      $this->street = $street;
      return $this;
    }

    /**
     * @return locality
     */
    public function getLocality()
    {
      return $this->locality;
    }

    /**
     * @param locality $locality
     * @return \App\Asic\addressExtType
     */
    public function setLocality($locality)
    {
      $this->locality = $locality;
      return $this;
    }

    /**
     * @return postCode
     */
    public function getPostCode()
    {
      return $this->postCode;
    }

    /**
     * @param postCode $postCode
     * @return \App\Asic\addressExtType
     */
    public function setPostCode($postCode)
    {
      $this->postCode = $postCode;
      return $this;
    }

    /**
     * @return stateTerritoryCodeType
     */
    public function getState()
    {
      return $this->state;
    }

    /**
     * @param stateTerritoryCodeType $state
     * @return \App\Asic\addressExtType
     */
    public function setState($state)
    {
      $this->state = $state;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOverride()
    {
      return $this->override;
    }

    /**
     * @param boolean $override
     * @return \App\Asic\addressExtType
     */
    public function setOverride($override)
    {
      $this->override = $override;
      return $this;
    }

    /**
     * @return action
     */
    public function getAction()
    {
      return $this->action;
    }

    /**
     * @param action $action
     * @return \App\Asic\addressExtType
     */
    public function setAction($action)
    {
      $this->action = $action;
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
     * @return \App\Asic\addressExtType
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
     * @return \App\Asic\addressExtType
     */
    public function setEndDate($endDate)
    {
      $this->endDate = $endDate;
      return $this;
    }

}
