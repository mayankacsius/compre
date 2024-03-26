<?php

namespace App\Asic;

class reportDataType
{

    /**
     * @var referenceNoType $reportIdentifier
     */
    protected $reportIdentifier = null;

    /**
     * @var bnReportType $reportType
     */
    protected $reportType = null;

    /**
     * @var date $createDate
     */
    protected $createDate = null;

    /**
     * @var periodType $reportPeriod
     */
    protected $reportPeriod = null;

    /**
     * @var stateTerritoryCodeType $state
     */
    protected $state = null;

    /**
     * @var int $reportSize
     */
    protected $reportSize = null;

    /**
     * @param referenceNoType $reportIdentifier
     * @param bnReportType $reportType
     * @param date $createDate
     */
    public function __construct($reportIdentifier, $reportType, $createDate)
    {
      $this->reportIdentifier = $reportIdentifier;
      $this->reportType = $reportType;
      $this->createDate = $createDate;
    }

    /**
     * @return referenceNoType
     */
    public function getReportIdentifier()
    {
      return $this->reportIdentifier;
    }

    /**
     * @param referenceNoType $reportIdentifier
     * @return \App\Asic\reportDataType
     */
    public function setReportIdentifier($reportIdentifier)
    {
      $this->reportIdentifier = $reportIdentifier;
      return $this;
    }

    /**
     * @return bnReportType
     */
    public function getReportType()
    {
      return $this->reportType;
    }

    /**
     * @param bnReportType $reportType
     * @return \App\Asic\reportDataType
     */
    public function setReportType($reportType)
    {
      $this->reportType = $reportType;
      return $this;
    }

    /**
     * @return date
     */
    public function getCreateDate()
    {
      return $this->createDate;
    }

    /**
     * @param date $createDate
     * @return \App\Asic\reportDataType
     */
    public function setCreateDate($createDate)
    {
      $this->createDate = $createDate;
      return $this;
    }

    /**
     * @return periodType
     */
    public function getReportPeriod()
    {
      return $this->reportPeriod;
    }

    /**
     * @param periodType $reportPeriod
     * @return \App\Asic\reportDataType
     */
    public function setReportPeriod($reportPeriod)
    {
      $this->reportPeriod = $reportPeriod;
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
     * @return \App\Asic\reportDataType
     */
    public function setState($state)
    {
      $this->state = $state;
      return $this;
    }

    /**
     * @return int
     */
    public function getReportSize()
    {
      return $this->reportSize;
    }

    /**
     * @param int $reportSize
     * @return \App\Asic\reportDataType
     */
    public function setReportSize($reportSize)
    {
      $this->reportSize = $reportSize;
      return $this;
    }

}
