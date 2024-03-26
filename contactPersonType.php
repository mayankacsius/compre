<?php

namespace App\Asic;

class contactPersonType
{

    /**
     * @var personNameLodgeType $name
     */
    protected $name = null;

    /**
     * @var telephoneNumberType $phoneNumber
     */
    protected $phoneNumber = null;

    /**
     * @var emailAddress $emailAddress
     */
    protected $emailAddress = null;

    
    public function __construct()
    {
    
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
     * @return \App\Asic\contactPersonType
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return telephoneNumberType
     */
    public function getPhoneNumber()
    {
      return $this->phoneNumber;
    }

    /**
     * @param telephoneNumberType $phoneNumber
     * @return \App\Asic\contactPersonType
     */
    public function setPhoneNumber($phoneNumber)
    {
      $this->phoneNumber = $phoneNumber;
      return $this;
    }

    /**
     * @return emailAddress
     */
    public function getEmailAddress()
    {
      return $this->emailAddress;
    }

    /**
     * @param emailAddress $emailAddress
     * @return \App\Asic\contactPersonType
     */
    public function setEmailAddress($emailAddress)
    {
      $this->emailAddress = $emailAddress;
      return $this;
    }

}
