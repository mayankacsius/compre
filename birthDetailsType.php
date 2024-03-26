<?php

namespace App\Asic;

class birthDetailsType
{

    /**
     * @var date $date
     */
    protected $date = null;

    /**
     * @var cityTown $cityTown
     */
    protected $cityTown = null;

    /**
     * @var stateTerritoryCodeType $state
     */
    protected $state = null;

    /**
     * @var iso3166CountryCode $iso3166CountryCode
     */
    protected $iso3166CountryCode = null;

    /**
     * @var countryOfBirth $countryOfBirth
     */
    protected $countryOfBirth = null;

    /**
     * @param iso3166CountryCode $iso3166CountryCode
     * @param countryOfBirth $countryOfBirth
     */
    public function __construct($iso3166CountryCode, $countryOfBirth)
    {
      $this->iso3166CountryCode = $iso3166CountryCode;
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
     * @return \App\Asic\birthDetailsType
     */
    public function setDate($date)
    {
      $this->date = $date;
      return $this;
    }

    /**
     * @return cityTown
     */
    public function getCityTown()
    {
      return $this->cityTown;
    }

    /**
     * @param cityTown $cityTown
     * @return \App\Asic\birthDetailsType
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
     * @return \App\Asic\birthDetailsType
     */
    public function setState($state)
    {
      $this->state = $state;
      return $this;
    }

    /**
     * @return iso3166CountryCode
     */
    public function getIso3166CountryCode()
    {
      return $this->iso3166CountryCode;
    }

    /**
     * @param iso3166CountryCode $iso3166CountryCode
     * @return \App\Asic\birthDetailsType
     */
    public function setIso3166CountryCode($iso3166CountryCode)
    {
      $this->iso3166CountryCode = $iso3166CountryCode;
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
     * @return \App\Asic\birthDetailsType
     */
    public function setCountryOfBirth($countryOfBirth)
    {
      $this->countryOfBirth = $countryOfBirth;
      return $this;
    }

}
