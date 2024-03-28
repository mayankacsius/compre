<?php

namespace App\Asic;

class registrations
{

    /**
     * @var companyRegistration $companyRegistration
     */
    protected $companyRegistration = null;

    /**
     * @var businessRegistration $businessRegistration
     */
    protected $businessRegistration = null;

    /**
     * @param companyRegistration $companyRegistration
     * @param businessRegistration $businessRegistration
     */
    public function __construct($companyRegistration, $businessRegistration)
    {
      $this->companyRegistration = $companyRegistration;
      $this->businessRegistration = $businessRegistration;
    }

    /**
     * @return companyRegistration
     */
    public function getCompanyRegistration()
    {
      return $this->companyRegistration;
    }

    /**
     * @param companyRegistration $companyRegistration
     * @return \App\Asic\registrations
     */
    public function setCompanyRegistration($companyRegistration)
    {
      $this->companyRegistration = $companyRegistration;
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
