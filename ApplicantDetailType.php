<?php

namespace App\Asic;

class ApplicantDetailType extends EntityNameType
{

    /**
     * @var addressType $address
     */
    protected $address = null;

    /**
     * @param organisationDetail $organisationDetail
     * @param personNameType $personDetail
     * @param addressType $address
     */
    public function __construct($organisationDetail, $personDetail, $address)
    {
      parent::__construct($organisationDetail, $personDetail);
      $this->address = $address;
    }

    /**
     * @return addressType
     */
    public function getAddress()
    {
      return $this->address;
    }

    /**
     * @param addressType $address
     * @return \App\Asic\ApplicantDetailType
     */
    public function setAddress($address)
    {
      $this->address = $address;
      return $this;
    }

}
