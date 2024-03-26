<?php

namespace App\Asic;

class reportRequestType
{

    /**
     * @var bnReportType $reportType
     */
    protected $reportType = null;

    /**
     * @var periodType $reportPeriod
     */
    protected $reportPeriod = null;

    /**
     * @var stateTerritoryCodeType $state
     */
    protected $state = null;

    /**
     * @param bnReportType $reportType
     * @param periodType $reportPeriod
     */
    public function __construct($reportType, $reportPeriod)
    {
      $this->reportType = $reportType;
      $this->reportPeriod = $reportPeriod;
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
     * @return \App\Asic\reportRequestType
     */
    public function setReportType($reportType)
    {
      $this->reportType = $reportType;
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
     * @return \App\Asic\reportRequestType
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
     * @return \App\Asic\reportRequestType
     */
    public function setState($state)
    {
      $this->state = $state;
      return $this;
    }

}
