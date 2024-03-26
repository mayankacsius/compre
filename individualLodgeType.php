<?php

namespace App\Asic;

class individualLodgeType
{

    /**
     * @var personNameLodgeType $name
     */
    protected $name = null;

    /**
     * @var birthDetailsLodgeType $birthDetails
     */
    protected $birthDetails = null;

    /**
     * @var addressLodgeType $address
     */
    protected $address = null;

    /**
     * @var emailType $emailAddress
     */
    protected $emailAddress = null;

    /**
     * @param personNameLodgeType $name
     * @param birthDetailsLodgeType $birthDetails
     */
    public function __construct($name, $birthDetails)
    {
      $this->name = $name;
      $this->birthDetails = $birthDetails;
    }

    /**
     * @return personNameLodgeType
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param personNameLodgeType $name
     * @return \App\Asic\individualLodgeType
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return birthDetailsLodgeType
     */
    public function getBirthDetails()
    {
      return $this->birthDetails;
    }

    /**
     * @param birthDetailsLodgeType $birthDetails
     * @return \App\Asic\individualLodgeType
     */
    public function setBirthDetails($birthDetails)
    {
      $this->birthDetails = $birthDetails;
      return $this;
    }

    /**
     * @return addressLodgeType
     */
    public function getAddress()
    {
      return $this->address;
    }

    /**
     * @param addressLodgeType $address
     * @return \App\Asic\individualLodgeType
     */
    public function setAddress($address)
    {
      $this->address = $address;
      return $this;
    }

    /**
     * @return emailType
     */
    public function getEmailAddress()
    {
      return $this->emailAddress;
    }

    /**
     * @param emailType $emailAddress
     * @return \App\Asic\individualLodgeType
     */
    public function setEmailAddress($emailAddress)
    {
      $this->emailAddress = $emailAddress;
      return $this;
    }

}
