<?php

namespace App\Asic;

class companyDetails
{

    /**
     * @var proposedCompanyName $proposedCompanyName
     */
    protected $proposedCompanyName = null;

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
     * @param proposedCompanyName $proposedCompanyName
     * @param companyTypeType $companyType
     * @param companyClassType $companyClass
     * @param companySubClassType $companySubClass
     */
    public function __construct($proposedCompanyName, $companyType, $companyClass, $companySubClass)
    {
      $this->proposedCompanyName = $proposedCompanyName;
      $this->companyType = $companyType;
      $this->companyClass = $companyClass;
      $this->companySubClass = $companySubClass;
    }

    /**
     * @return proposedCompanyName
     */
    public function getProposedCompanyName()
    {
      return $this->proposedCompanyName;
    }

    /**
     * @param proposedCompanyName $proposedCompanyName
     * @return \App\Asic\companyDetails
     */
    public function setProposedCompanyName($proposedCompanyName)
    {
      $this->proposedCompanyName = $proposedCompanyName;
      return $this;
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
     * @return \App\Asic\companyDetails
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
     * @return \App\Asic\companyDetails
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
     * @return \App\Asic\companyDetails
     */
    public function setCompanySubClass($companySubClass)
    {
      $this->companySubClass = $companySubClass;
      return $this;
    }

}
