<?php

namespace App\Asic;

class registrations
{

    /**
     * @var companyIncorporation $companyIncorporation
     */
    protected $companyIncorporation = null;

    /**
     * @var businessRegistration $businessRegistration
     */
    protected $businessRegistration = null;

    /**
     * @param companyIncorporation $companyIncorporation
     * @param businessRegistration $businessRegistration
     */
    public function __construct($companyIncorporation, $businessRegistration)
    {
      $this->companyIncorporation = $companyIncorporation;
      $this->businessRegistration = $businessRegistration;
    }

    /**
     * @return companyIncorporation
     */
    public function getCompanyIncorporation()
    {
      return $this->companyIncorporation;
    }

    /**
     * @param companyIncorporation $companyIncorporation
     * @return \App\Asic\registrations
     */
    public function setCompanyIncorporation($companyIncorporation)
    {
      $this->companyIncorporation = $companyIncorporation;
      return $this;
    }

    /**
     * @return businessRegistration
     */
    public function getBusinessRegistration()
    {
      return $this->businessRegistration;
    }

    /**
     * @param businessRegistration $businessRegistration
     * @return \App\Asic\registrations
     */
    public function setBusinessRegistration($businessRegistration)
    {
      $this->businessRegistration = $businessRegistration;
      return $this;
    }

}
