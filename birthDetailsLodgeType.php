<?php

namespace App\Asic;

class birthDetailsLodgeType
{

    /**
     * @var date $date
     */
    protected $date = null;

    /**
     * @var string $cityTown
     */
    protected $cityTown = null;

    /**
     * @var stateTerritoryCodeType $state
     */
    protected $state = null;

    /**
     * @var countryOfBirth $countryOfBirth
     */
    protected $countryOfBirth = null;

    /**
     * @param date $date
     * @param countryOfBirth $countryOfBirth
     */
    public function __construct($date, $countryOfBirth)
    {
      $this->date = $date;
      $this->countryOfBirth = $countryOfBirth;
    }

    /**
     * @return date
     */
    public function getDate()
    {
      return $this->date;
    }

    /**
     * @param date $date
     * @return \App\Asic\birthDetailsLodgeType
     */
    public function setDate($date)
    {
      $this->date = $date;
      return $this;
    }

    /**
     * @return string
     */
    public function getCityTown()
    {
      return $this->cityTown;
    }

    /**
     * @param string $cityTown
     * @return \App\Asic\birthDetailsLodgeType
     */
    public function setCityTown($cityTown)
    {
      $this->cityTown = $cityTown;
      return $this;
    }

    /**
     * @return stateTerritoryCodeType
     */
    public function getState()
    {
      return $this->state;
    }

    /**
     * @param stateTerritoryCodeType $state
     * @return \App\Asic\birthDetailsLodgeType
     */
    public function setState($state)
    {
      $this->state = $state;
      return $this;
    }

    /**
     * @return countryOfBirth
     */
    public function getCountryOfBirth()
    {
      return $this->countryOfBirth;
    }

    /**
     * @param countryOfBirth $countryOfBirth
     * @return \App\Asic\birthDetailsLodgeType
     */
    public function setCountryOfBirth($countryOfBirth)
    {
      $this->countryOfBirth = $countryOfBirth;
      return $this;
    }

}
