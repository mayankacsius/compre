<?php

namespace App\Asic;

class ABRSCompanyReserveStructureType
{

    /**
     * @var companyType $companyType
     */
    protected $companyType = null;

    /**
     * @var companyClass $companyClass
     */
    protected $companyClass = null;

    /**
     * @param companyType $companyType
     * @param companyClass $companyClass
     */
    public function __construct($companyType, $companyClass)
    {
      $this->companyType = $companyType;
      $this->companyClass = $companyClass;
    }

    /**
     * @return companyType
     */
    public function getCompanyType()
    {
      return $this->companyType;
    }

    /**
     * @param companyType $companyType
     * @return \App\Asic\ABRSCompanyReserveStructureType
     */
    public function setCompanyType($companyType)
    {
      $this->companyType = $companyType;
      return $this;
    }

    /**
     * @return companyClass
     */
    public function getCompanyClass()
    {
      return $this->companyClass;
    }

    /**
     * @param companyClass $companyClass
     * @return \App\Asic\ABRSCompanyReserveStructureType
     */
    public function setCompanyClass($companyClass)
    {
      $this->companyClass = $companyClass;
      return $this;
    }

}
