<?php

namespace App\Asic;

class company
{

    /**
     * @var trueType $registeredOffice
     */
    protected $registeredOffice = null;

    /**
     * @var trueType $principalPlaceOfBusiness
     */
    protected $principalPlaceOfBusiness = null;

    /**
     * @var trueType $officeholders
     */
    protected $officeholders = null;

    /**
     * @var trueType $shareHolders
     */
    protected $shareHolders = null;

    /**
     * @param trueType $registeredOffice
     * @param trueType $principalPlaceOfBusiness
     * @param trueType $officeholders
     * @param trueType $shareHolders
     */
    public function __construct($registeredOffice, $principalPlaceOfBusiness, $officeholders, $shareHolders)
    {
      $this->registeredOffice = $registeredOffice;
      $this->principalPlaceOfBusiness = $principalPlaceOfBusiness;
      $this->officeholders = $officeholders;
      $this->shareHolders = $shareHolders;
    }

    /**
     * @return trueType
     */
    public function getRegisteredOffice()
    {
      return $this->registeredOffice;
    }

    /**
     * @param trueType $registeredOffice
     * @return \App\Asic\company
     */
    public function setRegisteredOffice($registeredOffice)
    {
      $this->registeredOffice = $registeredOffice;
      return $this;
    }

    /**
     * @return trueType
     */
    public function getPrincipalPlaceOfBusiness()
    {
      return $this->principalPlaceOfBusiness;
    }

    /**
     * @param trueType $principalPlaceOfBusiness
     * @return \App\Asic\company
     */
    public function setPrincipalPlaceOfBusiness($principalPlaceOfBusiness)
    {
      $this->principalPlaceOfBusiness = $principalPlaceOfBusiness;
      return $this;
    }

    /**
     * @return trueType
     */
    public function getOfficeholders()
    {
      return $this->officeholders;
    }

    /**
     * @param trueType $officeholders
     * @return \App\Asic\company
     */
    public function setOfficeholders($officeholders)
    {
      $this->officeholders = $officeholders;
      return $this;
    }

    /**
     * @return trueType
     */
    public function getShareHolders()
    {
      return $this->shareHolders;
    }

    /**
     * @param trueType $shareHolders
     * @return \App\Asic\company
     */
    public function setShareHolders($shareHolders)
    {
      $this->shareHolders = $shareHolders;
      return $this;
    }

}
