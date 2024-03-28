<?php

namespace App\Asic;

class addressType
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
     * @var addressLine[] $addressLine
     */
    protected $addressLine = null;

    /**
     * @var iso3166CountryCode $iso3166CountryCode
     */
    protected $iso3166CountryCode = null;

    /**
     * @var country $country
     */
    protected $country = null;

    /**
     * @var DPID $DPID
     */
    protected $DPID = null;

    /**
     * @var asicNumericIdType $ascotId
     */
    protected $ascotId = null;

    /**
     * @var boolean $isForeign
     */
    protected $isForeign = null;

    /**
     * @var boolean $isPoBox
     */
    protected $isPoBox = null;

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
     * @var sequence $sequence
     */
    protected $sequence = null;

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
     * @var documentNoType $documentNumber
     */
    protected $documentNumber = null;

    /**
     * @param addressLine[] $addressLine
     * @param iso3166CountryCode $iso3166CountryCode
     * @param country $country
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
     * @return \App\Asic\addressType
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
     * @return \App\Asic\addressType
     */
    public function setCareOf($careOf)
    {
      $this->careOf = $careOf;
      return $this;
    }

    /**
     * @return addressLine[]
     */
    public function getAddressLine()
    {
      return $this->addressLine;
    }

    /**
     * @param addressLine[] $addressLine
     * @return \App\Asic\addressType
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
     * @return \App\Asic\addressType
     */
    public function setIso3166CountryCode($iso3166CountryCode)
    {
      $this->iso3166CountryCode = $iso3166CountryCode;
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
     * @return \App\Asic\addressType
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
     * @return \App\Asic\addressType
     */
    public function setDPID($DPID)
    {
      $this->DPID = $DPID;
      return $this;
    }

    /**
     * @return asicNumericIdType
     */
    public function getAscotId()
    {
      return $this->ascotId;
    }

    /**
     * @param asicNumericIdType $ascotId
     * @return \App\Asic\addressType
     */
    public function setAscotId($ascotId)
    {
      $this->ascotId = $ascotId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsForeign()
    {
      return $this->isForeign;
    }

    /**
     * @param boolean $isForeign
     * @return \App\Asic\addressType
     */
    public function setIsForeign($isForeign)
    {
      $this->isForeign = $isForeign;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPoBox()
    {
      return $this->isPoBox;
    }

    /**
     * @param boolean $isPoBox
     * @return \App\Asic\addressType
     */
    public function setIsPoBox($isPoBox)
    {
      $this->isPoBox = $isPoBox;
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
     * @return \App\Asic\addressType
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
     * @return \App\Asic\addressType
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
     * @return \App\Asic\addressType
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
     * @return \App\Asic\addressType
     */
    public function setState($state)
    {
      $this->state = $state;
      return $this;
    }

    /**
     * @return sequence
     */
    public function getSequence()
    {
      return $this->sequence;
    }

    /**
     * @param sequence $sequence
     * @return \App\Asic\addressType
     */
    public function setSequence($sequence)
    {
      $this->sequence = $sequence;
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
     * @return \App\Asic\addressType
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
     * @return \App\Asic\addressType
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
     * @return \App\Asic\addressType
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
     * @return \App\Asic\addressType
     */
    public function setEndDate($endDate)
    {
      $this->endDate = $endDate;
      return $this;
    }

    /**
     * @return documentNoType
     */
    public function getDocumentNumber()
    {
      return $this->documentNumber;
    }

    /**
     * @param documentNoType $documentNumber
     * @return \App\Asic\addressType
     */
    public function setDocumentNumber($documentNumber)
    {
      $this->documentNumber = $documentNumber;
      return $this;
    }

}
