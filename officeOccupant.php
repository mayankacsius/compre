<?php

namespace App\Asic;

class officeOccupant
{

    /**
     * @var isOccupiedByCompany $isOccupiedByCompany
     */
    protected $isOccupiedByCompany = null;

    /**
     * @var thirdParty $thirdParty
     */
    protected $thirdParty = null;

    /**
     * @param isOccupiedByCompany $isOccupiedByCompany
     * @param thirdParty $thirdParty
     */
    public function __construct($isOccupiedByCompany, $thirdParty)
    {
      $this->isOccupiedByCompany = $isOccupiedByCompany;
      $this->thirdParty = $thirdParty;
    }

    /**
     * @return isOccupiedByCompany
     */
    public function getIsOccupiedByCompany()
    {
      return $this->isOccupiedByCompany;
    }

    /**
     * @param isOccupiedByCompany $isOccupiedByCompany
     * @return \App\Asic\officeOccupant
     */
    public function setIsOccupiedByCompany($isOccupiedByCompany)
    {
      $this->isOccupiedByCompany = $isOccupiedByCompany;
      return $this;
    }

    /**
     * @return thirdParty
     */
    public function getThirdParty()
    {
      return $this->thirdParty;
    }

    /**
     * @param thirdParty $thirdParty
     * @return \App\Asic\officeOccupant
     */
    public function setThirdParty($thirdParty)
    {
      $this->thirdParty = $thirdParty;
      return $this;
    }

}
