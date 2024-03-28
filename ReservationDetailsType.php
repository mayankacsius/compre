<?php

namespace App\Asic;

class ReservationDetailsType
{

    /**
     * @var nniNameType $proposedCompanyName
     */
    protected $proposedCompanyName = null;

    /**
     * @var CompanyReserveStructureType $structure
     */
    protected $structure = null;

    /**
     * @var BusinessNameDetailType $identicalBusinessNamesOwned
     */
    protected $identicalBusinessNamesOwned = null;

    /**
     * @var formType $formType
     */
    protected $formType = null;

    /**
     * @param nniNameType $proposedCompanyName
     * @param CompanyReserveStructureType $structure
     * @param formType $formType
     */
    public function __construct($proposedCompanyName, $structure, $formType)
    {
      $this->proposedCompanyName = $proposedCompanyName;
      $this->structure = $structure;
      $this->formType = $formType;
    }

    /**
     * @return nniNameType
     */
    public function getProposedCompanyName()
    {
      return $this->proposedCompanyName;
    }

    /**
     * @param nniNameType $proposedCompanyName
     * @return \App\Asic\ReservationDetailsType
     */
    public function setProposedCompanyName($proposedCompanyName)
    {
      $this->proposedCompanyName = $proposedCompanyName;
      return $this;
    }

    /**
     * @return CompanyReserveStructureType
     */
    public function getStructure()
    {
      return $this->structure;
    }

    /**
     * @param CompanyReserveStructureType $structure
     * @return \App\Asic\ReservationDetailsType
     */
    public function setStructure($structure)
    {
      $this->structure = $structure;
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
     * @return \App\Asic\ReservationDetailsType
     */
    public function setIdenticalBusinessNamesOwned($identicalBusinessNamesOwned)
    {
      $this->identicalBusinessNamesOwned = $identicalBusinessNamesOwned;
      return $this;
    }

    /**
     * @return formType
     */
    public function getFormType()
    {
      return $this->formType;
    }

    /**
     * @param formType $formType
     * @return \App\Asic\ReservationDetailsType
     */
    public function setFormType($formType)
    {
      $this->formType = $formType;
      return $this;
    }

}
