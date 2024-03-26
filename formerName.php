<?php

namespace App\Asic;

class formerName
{

    /**
     * @var nniNameType $organisationName
     */
    protected $organisationName = null;

    /**
     * @var date $startDate
     */
    protected $startDate = null;

    /**
     * @var date $endDate
     */
    protected $endDate = null;

    /**
     * @param nniNameType $organisationName
     * @param date $startDate
     * @param date $endDate
     */
    public function __construct($organisationName, $startDate, $endDate)
    {
      $this->organisationName = $organisationName;
      $this->startDate = $startDate;
      $this->endDate = $endDate;
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
     * @return \App\Asic\formerName
     */
    public function setOrganisationName($organisationName)
    {
      $this->organisationName = $organisationName;
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
     * @return \App\Asic\formerName
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
     * @return \App\Asic\formerName
     */
    public function setEndDate($endDate)
    {
      $this->endDate = $endDate;
      return $this;
    }

}
