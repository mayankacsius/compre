<?php

namespace App\Asic;

class organisationNameType
{

    /**
     * @var nniNameType $organisationShortName1
     */
    protected $organisationShortName1 = null;

    /**
     * @var nniNameType $organisationShortName2
     */
    protected $organisationShortName2 = null;

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
     * @var nniNameType $organisationName
     */
    protected $organisationName = null;

    /**
     * @param nniNameType $organisationShortName1
     * @param nniNameType $organisationShortName2
     * @param dateType $effectiveFrom
     * @param indicatorType $deleteIndicator
     * @param nniNameType $organisationName
     */
    public function __construct($organisationShortName1, $organisationShortName2, $effectiveFrom, $deleteIndicator, $organisationName)
    {
      $this->organisationShortName1 = $organisationShortName1;
      $this->organisationShortName2 = $organisationShortName2;
      $this->effectiveFrom = $effectiveFrom;
      $this->deleteIndicator = $deleteIndicator;
      $this->organisationName = $organisationName;
    }

    /**
     * @return nniNameType
     */
    public function getOrganisationShortName1()
    {
      return $this->organisationShortName1;
    }

    /**
     * @param nniNameType $organisationShortName1
     * @return \App\Asic\organisationNameType
     */
    public function setOrganisationShortName1($organisationShortName1)
    {
      $this->organisationShortName1 = $organisationShortName1;
      return $this;
    }

    /**
     * @return nniNameType
     */
    public function getOrganisationShortName2()
    {
      return $this->organisationShortName2;
    }

    /**
     * @param nniNameType $organisationShortName2
     * @return \App\Asic\organisationNameType
     */
    public function setOrganisationShortName2($organisationShortName2)
    {
      $this->organisationShortName2 = $organisationShortName2;
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
     * @return \App\Asic\organisationNameType
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
     * @return \App\Asic\organisationNameType
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
     * @return \App\Asic\organisationNameType
     */
    public function setDeleteIndicator($deleteIndicator)
    {
      $this->deleteIndicator = $deleteIndicator;
      return $this;
    }

    /**
     * @return nniNameType
     */
    public function getOrganisationName()
    {
      return $this->organisationName;
    }

    /**
     * @param nniNameType $organisationName
     * @return \App\Asic\organisationNameType
     */
    public function setOrganisationName($organisationName)
    {
      $this->organisationName = $organisationName;
      return $this;
    }

}
