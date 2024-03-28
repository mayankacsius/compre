<?php

namespace App\Asic;

class RegistrationDetailsType extends addressLodgeStrictType
{

    /**
     * @var proposedCompanyName $proposedCompanyName
     */
    protected $proposedCompanyName = null;

    /**
     * @var CompanyRegStructureType $structure
     */
    protected $structure = null;

    /**
     * @var boolean $isGovernedByConstitution
     */
    protected $isGovernedByConstitution = null;

    /**
     * @var reservationDetails $reservationDetails
     */
    protected $reservationDetails = null;

    /**
     * @var BusinessNameDetailType $identicalBusinessNamesOwned
     */
    protected $identicalBusinessNamesOwned = null;

    /**
     * @var jurisdictionState $jurisdictionState
     */
    protected $jurisdictionState = null;

    /**
     * @var addresses $addresses
     */
    protected $addresses = null;

    /**
     * @var UtlimateHoldingCompanyType $ultimateHoldingCompany
     */
    protected $ultimateHoldingCompany = null;

    /**
     * @var officeHolders $officeHolders
     */
    protected $officeHolders = null;

    /**
     * @var ownershipStructure $ownershipStructure
     */
    protected $ownershipStructure = null;

    /**
     * @param physicalAddress $physicalAddress
     * @param unstructuredAddress $unstructuredAddress
     * @param semiStructuredPhysicalAddress $semiStructuredPhysicalAddress
     * @param proposedCompanyName $proposedCompanyName
     * @param CompanyRegStructureType $structure
     * @param jurisdictionState $jurisdictionState
     * @param addresses $addresses
     * @param officeHolders $officeHolders
     * @param ownershipStructure $ownershipStructure
     */
    public function __construct($physicalAddress, $unstructuredAddress, $semiStructuredPhysicalAddress, $proposedCompanyName, $structure, $jurisdictionState, $addresses, $officeHolders, $ownershipStructure)
    {
      parent::__construct($physicalAddress, $unstructuredAddress, $semiStructuredPhysicalAddress);
      $this->proposedCompanyName = $proposedCompanyName;
      $this->structure = $structure;
      $this->jurisdictionState = $jurisdictionState;
      $this->addresses = $addresses;
      $this->officeHolders = $officeHolders;
      $this->ownershipStructure = $ownershipStructure;
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
     * @return \App\Asic\RegistrationDetailsType
     */
    public function setProposedCompanyName($proposedCompanyName)
    {
      $this->proposedCompanyName = $proposedCompanyName;
      return $this;
    }

    /**
     * @return CompanyRegStructureType
     */
    public function getStructure()
    {
      return $this->structure;
    }

    /**
     * @param CompanyRegStructureType $structure
     * @return \App\Asic\RegistrationDetailsType
     */
    public function setStructure($structure)
    {
      $this->structure = $structure;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsGovernedByConstitution()
    {
      return $this->isGovernedByConstitution;
    }

    /**
     * @param boolean $isGovernedByConstitution
     * @return \App\Asic\RegistrationDetailsType
     */
    public function setIsGovernedByConstitution($isGovernedByConstitution)
    {
      $this->isGovernedByConstitution = $isGovernedByConstitution;
      return $this;
    }

    /**
     * @return reservationDetails
     */
    public function getReservationDetails()
    {
      return $this->reservationDetails;
    }

    /**
     * @param reservationDetails $reservationDetails
     * @return \App\Asic\RegistrationDetailsType
     */
    public function setReservationDetails($reservationDetails)
    {
      $this->reservationDetails = $reservationDetails;
      return $this;
    }

    /**
     * @return BusinessNameDetailType
     */
    public function getIdenticalBusinessNamesOwned()
    {
      return $this->identicalBusinessNamesOwned;
    }

    /**
     * @param BusinessNameDetailType $identicalBusinessNamesOwned
     * @return \App\Asic\RegistrationDetailsType
     */
    public function setIdenticalBusinessNamesOwned($identicalBusinessNamesOwned)
    {
      $this->identicalBusinessNamesOwned = $identicalBusinessNamesOwned;
      return $this;
    }

    /**
     * @return jurisdictionState
     */
    public function getJurisdictionState()
    {
      return $this->jurisdictionState;
    }

    /**
     * @param jurisdictionState $jurisdictionState
     * @return \App\Asic\RegistrationDetailsType
     */
    public function setJurisdictionState($jurisdictionState)
    {
      $this->jurisdictionState = $jurisdictionState;
      return $this;
    }

    /**
     * @return addresses
     */
    public function getAddresses()
    {
      return $this->addresses;
    }

    /**
     * @param addresses $addresses
     * @return \App\Asic\RegistrationDetailsType
     */
    public function setAddresses($addresses)
    {
      $this->addresses = $addresses;
      return $this;
    }

    /**
     * @return UtlimateHoldingCompanyType
     */
    public function getUltimateHoldingCompany()
    {
      return $this->ultimateHoldingCompany;
    }

    /**
     * @param UtlimateHoldingCompanyType $ultimateHoldingCompany
     * @return \App\Asic\RegistrationDetailsType
     */
    public function setUltimateHoldingCompany($ultimateHoldingCompany)
    {
      $this->ultimateHoldingCompany = $ultimateHoldingCompany;
      return $this;
    }

    /**
     * @return officeHolders
     */
    public function getOfficeHolders()
    {
      return $this->officeHolders;
    }

    /**
     * @param officeHolders $officeHolders
     * @return \App\Asic\RegistrationDetailsType
     */
    public function setOfficeHolders($officeHolders)
    {
      $this->officeHolders = $officeHolders;
      return $this;
    }

    /**
     * @return ownershipStructure
     */
    public function getOwnershipStructure()
    {
      return $this->ownershipStructure;
    }

    /**
     * @param ownershipStructure $ownershipStructure
     * @return \App\Asic\RegistrationDetailsType
     */
    public function setOwnershipStructure($ownershipStructure)
    {
      $this->ownershipStructure = $ownershipStructure;
      return $this;
    }

}
