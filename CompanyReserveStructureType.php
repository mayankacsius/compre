<?php

namespace App\Asic;

class CompanyReserveStructureType
{

    /**
     * @var companyTypeType $companyType
     */
    protected $companyType = null;

    /**
     * @var companyClassType $companyClass
     */
    protected $companyClass = null;

    /**
     * @param companyTypeType $companyType
     * @param companyClassType $companyClass
     */
    public function __construct($companyType, $companyClass)
    {
      $this->companyType = $companyType;
      $this->companyClass = $companyClass;
    }

    /**
     * @return companyTypeType
     */
    public function getCompanyType()
    {
      return $this->companyType;
    }

    /**
     * @param companyTypeType $companyType
     * @return \App\Asic\CompanyReserveStructureType
     */
    public function setCompanyType($companyType)
    {
      $this->companyType = $companyType;
      return $this;
    }

    /**
     * @return companyClassType
     */
    public function getCompanyClass()
    {
      return $this->companyClass;
    }

    /**
     * @param companyClassType $companyClass
     * @return \App\Asic\CompanyReserveStructureType
     */
    public function setCompanyClass($companyClass)
    {
      $this->companyClass = $companyClass;
      return $this;
    }

}
