<?php

namespace App\Asic;

class identifierType
{

    /**
     * @var identifierValueType $identifierValue
     */
    protected $identifierValue = null;

    /**
     * @var identifierStatusCodeType $identifierStatusCode
     */
    protected $identifierStatusCode = null;

    /**
     * @var issuingPartyCodeType $issuingPartyCode

     */
    protected $issuingPartyCode = null;

    /**
     * @var indicatorType $replacedIndicator
     */
    protected $replacedIndicator = null;

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
     * @var numberHeadingType $numberHeading
     */
    protected $numberHeading = null;

    /**
     * @var nniNumberType $number
     */
    protected $number = null;

    /**
     * @param numberHeadingType $numberHeading
     * @param nniNumberType $number
     * @param identifierValueType $identifierValue
     */
    public function __construct($numberHeading = null, $number = null, $identifierValue = null)
    {
      $this->numberHeading = $numberHeading;
      $this->number = $number;
      $this->identifierValue = $identifierValue;
    }

    /**
     * @return identifierValueType
     */
    public function getIdentifierValue()
    {
      return $this->identifierValue;
    }

    /**
     * @param identifierValueType $identifierValue
     * @return \App\Asic\identifierType
     */
    public function setIdentifierValue($identifierValue)
    {
      $this->identifierValue = $identifierValue;
      return $this;
    }

    /**
     * @return identifierStatusCodeType
     */
    public function getIdentifierStatusCode()
    {
      return $this->identifierStatusCode;
    }

    /**
     * @param identifierStatusCodeType $identifierStatusCode
     * @return \App\Asic\identifierType
     */
    public function setIdentifierStatusCode($identifierStatusCode)
    {
      $this->identifierStatusCode = $identifierStatusCode;
      return $this;
    }

    /**
     * @return issuingPartyCodeType
     */
    public function getIssuingPartyCode()
    {
      return $this->issuingPartyCode;
    }

    /**
     * @param issuingPartyCodeType $issuingPartyCode
     * @return \App\Asic\identifierType
     */
    public function setIssuingPartyCode($issuingPartyCode)
    {
      $this->issuingPartyCode = $issuingPartyCode;
      return $this;
    }

    /**
     * @return indicatorType
     */
    public function getReplacedIndicator()
    {
      return $this->replacedIndicator;
    }

    /**
     * @param indicatorType $replacedIndicator
     * @return \App\Asic\identifierType
     */
    public function setReplacedIndicator($replacedIndicator)
    {
      $this->replacedIndicator = $replacedIndicator;
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
     * @return \App\Asic\identifierType
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
     * @return \App\Asic\identifierType
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
     * @return \App\Asic\identifierType
     */
    public function setDeleteIndicator($deleteIndicator)
    {
      $this->deleteIndicator = $deleteIndicator;
      return $this;
    }

    /**
     * @return numberHeadingType
     */
    public function getNumberHeading()
    {
      return $this->numberHeading;
    }

    /**
     * @param numberHeadingType $numberHeading
     * @return \App\Asic\identifierType
     */
    public function setNumberHeading($numberHeading)
    {
      $this->numberHeading = $numberHeading;
      return $this;
    }

    /**
     * @return nniNumberType
     */
    public function getNumber()
    {
      return $this->number;
    }

    /**
     * @param nniNumberType $number
     * @return \App\Asic\identifierType
     */
    public function setNumber($number)
    {
      $this->number = $number;
      return $this;
    }

}
