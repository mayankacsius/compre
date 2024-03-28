<?php

namespace App\Asic;

class OccupiedByType
{

    /**
     * @var boolean $isOccupiedByCompany
     */
    protected $isOccupiedByCompany = null;

    /**
     * @var nameOfOccupier $nameOfOccupier
     */
    protected $nameOfOccupier = null;

    /**
     * @var boolean $isOwnersConsentSought
     */
    protected $isOwnersConsentSought = null;

    /**
     * @param boolean $isOccupiedByCompany
     */
    public function __construct($isOccupiedByCompany)
    {
      $this->isOccupiedByCompany = $isOccupiedByCompany;
    }

    /**
     * @return boolean
     */
    public function getIsOccupiedByCompany()
    {
      return $this->isOccupiedByCompany;
    }

    /**
     * @param boolean $isOccupiedByCompany
     * @return \App\Asic\OccupiedByType
     */
    public function setIsOccupiedByCompany($isOccupiedByCompany)
    {
      $this->isOccupiedByCompany = $isOccupiedByCompany;
      return $this;
    }

    /**
     * @return nameOfOccupier
     */
    public function getNameOfOccupier()
    {
      return $this->nameOfOccupier;
    }

    /**
     * @param nameOfOccupier $nameOfOccupier
     * @return \App\Asic\OccupiedByType
     */
    public function setNameOfOccupier($nameOfOccupier)
    {
      $this->nameOfOccupier = $nameOfOccupier;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsOwnersConsentSought()
    {
      return $this->isOwnersConsentSought;
    }

    /**
     * @param boolean $isOwnersConsentSought
     * @return \App\Asic\OccupiedByType
     */
    public function setIsOwnersConsentSought($isOwnersConsentSought)
    {
      $this->isOwnersConsentSought = $isOwnersConsentSought;
      return $this;
    }

}
