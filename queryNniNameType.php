<?php

namespace App\Asic;

class queryNniNameType
{

    /**
     * @var nniNameType $proposedName
     */
    protected $proposedName = null;

    /**
     * @var trueType $companyNameAvailabilityCheck
     */
    protected $companyNameAvailabilityCheck = null;

    /**
     * @var trueType $bnNameAvailabilityCheck
     */
    protected $bnNameAvailabilityCheck = null;

    /**
     * @var proprietor $proprietor
     */
    protected $proprietor = null;

    /**
     * @param nniNameType $proposedName
     * @param trueType $companyNameAvailabilityCheck
     * @param trueType $bnNameAvailabilityCheck
     */
    public function __construct($proposedName, $companyNameAvailabilityCheck, $bnNameAvailabilityCheck)
    {
      $this->proposedName = $proposedName;
      $this->companyNameAvailabilityCheck = $companyNameAvailabilityCheck;
      $this->bnNameAvailabilityCheck = $bnNameAvailabilityCheck;
    }

    /**
     * @return nniNameType
     */
    public function getProposedName()
    {
      return $this->proposedName;
    }

    /**
     * @param nniNameType $proposedName
     * @return \App\Asic\queryNniNameType
     */
    public function setProposedName($proposedName)
    {
      $this->proposedName = $proposedName;
      return $this;
    }

    /**
     * @return trueType
     */
    public function getCompanyNameAvailabilityCheck()
    {
      return $this->companyNameAvailabilityCheck;
    }

    /**
     * @param trueType $companyNameAvailabilityCheck
     * @return \App\Asic\queryNniNameType
     */
    public function setCompanyNameAvailabilityCheck($companyNameAvailabilityCheck)
    {
      $this->companyNameAvailabilityCheck = $companyNameAvailabilityCheck;
      return $this;
    }

    /**
     * @return trueType
     */
    public function getBnNameAvailabilityCheck()
    {
      return $this->bnNameAvailabilityCheck;
    }

    /**
     * @param trueType $bnNameAvailabilityCheck
     * @return \App\Asic\queryNniNameType
     */
    public function setBnNameAvailabilityCheck($bnNameAvailabilityCheck)
    {
      $this->bnNameAvailabilityCheck = $bnNameAvailabilityCheck;
      return $this;
    }

    /**
     * @return proprietor
     */
    public function getProprietor()
    {
      return $this->proprietor;
    }

    /**
     * @param proprietor $proprietor
     * @return \App\Asic\queryNniNameType
     */
    public function setProprietor($proprietor)
    {
      $this->proprietor = $proprietor;
      return $this;
    }

}
