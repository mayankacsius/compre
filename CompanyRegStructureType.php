<?php

namespace App\Asic;

class CompanyRegStructureType
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
     * @var companySubClassType $companySubClass
     */
    protected $companySubClass = null;

    /**
     * @param companyTypeType $companyType
     * @param companyClassType $companyClass
     * @param companySubClassType $companySubClass
     */
    public function __construct($companyType, $companyClass, $companySubClass)
    {
      $this->companyType = $companyType;
      $this->companyClass = $companyClass;
      $this->companySubClass = $companySubClass;
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
     * @return \App\Asic\CompanyRegStructureType
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
     * @return \App\Asic\CompanyRegStructureType
     */
    public function setCompanyClass($companyClass)
    {
      $this->companyClass = $companyClass;
      return $this;
    }

    /**
     * @return companySubClassType
     */
    public function getCompanySubClass()
    {
      return $this->companySubClass;
    }

    /**
     * @param companySubClassType $companySubClass
     * @return \App\Asic\CompanyRegStructureType
     */
    public function setCompanySubClass($companySubClass)
    {
      $this->companySubClass = $companySubClass;
      return $this;
    }

}
