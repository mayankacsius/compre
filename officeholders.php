<?php

namespace App\Asic;

class officeHolders
{

    /**
     * @var boolean $isOfficeholdersAddressResidential
     */
    protected $isOfficeholdersAddressResidential = null;

    /**
     * @var OfficeHolderType $officeHolder
     */
    protected $officeHolder = null;

    /**
     * @param boolean $isOfficeholdersAddressResidential
     * @param OfficeHolderType $officeHolder
     */
    public function __construct($isOfficeholdersAddressResidential, $officeHolder)
    {
      $this->isOfficeholdersAddressResidential = $isOfficeholdersAddressResidential;
      $this->officeHolder = $officeHolder;
    }

    /**
     * @return boolean
     */
    public function getIsOfficeholdersAddressResidential()
    {
      return $this->isOfficeholdersAddressResidential;
    }

    /**
     * @param boolean $isOfficeholdersAddressResidential
     * @return \App\Asic\officeHolders
     */
    public function setIsOfficeholdersAddressResidential($isOfficeholdersAddressResidential)
    {
      $this->isOfficeholdersAddressResidential = $isOfficeholdersAddressResidential;
      return $this;
    }

    /**
     * @return OfficeHolderType
     */
    public function getOfficeHolder()
    {
      return $this->officeHolder;
    }

    /**
     * @param OfficeHolderType $officeHolder
     * @return \App\Asic\officeHolders
     */
    public function setOfficeHolder($officeHolder)
    {
      $this->officeHolder = $officeHolder;
      return $this;
    }

}
