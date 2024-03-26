<?php

namespace App\Asic;

class individualNameType
{

    /**
     * @var titleTypeCodeType $titleTypeCode
     */
    protected $titleTypeCode = null;

    /**
     * @var givenNameType $givenName
     */
    protected $givenName = null;

    /**
     * @var otherGivenNameType $otherGivenName
     */
    protected $otherGivenName = null;

    /**
     * @var familyNameType $familyName
     */
    protected $familyName = null;

    /**
     * @var suffixTypeCodeType $suffixTypeCode
     */
    protected $suffixTypeCode = null;

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
     * @param givenNameType $givenName
     * @param familyNameType $familyName
     */
    public function __construct($givenName, $familyName)
    {
      $this->givenName = $givenName;
      $this->familyName = $familyName;
    }

    /**
     * @return titleTypeCodeType
     */
    public function getTitleTypeCode()
    {
      return $this->titleTypeCode;
    }

    /**
     * @param titleTypeCodeType $titleTypeCode
     * @return \App\Asic\individualNameType
     */
    public function setTitleTypeCode($titleTypeCode)
    {
      $this->titleTypeCode = $titleTypeCode;
      return $this;
    }

    /**
     * @return givenNameType
     */
    public function getGivenName()
    {
      return $this->givenName;
    }

    /**
     * @param givenNameType $givenName
     * @return \App\Asic\individualNameType
     */
    public function setGivenName($givenName)
    {
      $this->givenName = $givenName;
      return $this;
    }

    /**
     * @return otherGivenNameType
     */
    public function getOtherGivenName()
    {
      return $this->otherGivenName;
    }

    /**
     * @param otherGivenNameType $otherGivenName
     * @return \App\Asic\individualNameType
     */
    public function setOtherGivenName($otherGivenName)
    {
      $this->otherGivenName = $otherGivenName;
      return $this;
    }

    /**
     * @return familyNameType
     */
    public function getFamilyName()
    {
      return $this->familyName;
    }

    /**
     * @param familyNameType $familyName
     * @return \App\Asic\individualNameType
     */
    public function setFamilyName($familyName)
    {
      $this->familyName = $familyName;
      return $this;
    }

    /**
     * @return suffixTypeCodeType
     */
    public function getSuffixTypeCode()
    {
      return $this->suffixTypeCode;
    }

    /**
     * @param suffixTypeCodeType $suffixTypeCode
     * @return \App\Asic\individualNameType
     */
    public function setSuffixTypeCode($suffixTypeCode)
    {
      $this->suffixTypeCode = $suffixTypeCode;
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
     * @return \App\Asic\individualNameType
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
     * @return \App\Asic\individualNameType
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
     * @return \App\Asic\individualNameType
     */
    public function setDeleteIndicator($deleteIndicator)
    {
      $this->deleteIndicator = $deleteIndicator;
      return $this;
    }

}
