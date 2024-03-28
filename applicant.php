<?php

namespace App\Asic;

class applicant
{

    /**
     * @var EntityNameType $name
     */
    protected $name = null;

    /**
     * @var addressLodgeStrictType $address
     */
    protected $address = null;

    /**
     * @var emailAddress $emailAddress
     */
    protected $emailAddress = null;

    /**
     * @var telephoneNumberType $telephoneNum
     */
    protected $telephoneNum = null;

    /**
     * @param EntityNameType $name
     * @param addressLodgeStrictType $address
     * @param emailAddress $emailAddress
     * @param telephoneNumberType $telephoneNum
     */
    public function __construct($name, $address, $emailAddress, $telephoneNum)
    {
      $this->name = $name;
      $this->address = $address;
      $this->emailAddress = $emailAddress;
      $this->telephoneNum = $telephoneNum;
    }

    /**
     * @return EntityNameType
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param EntityNameType $name
     * @return \App\Asic\applicant
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return addressLodgeStrictType
     */
    public function getAddress()
    {
      return $this->address;
    }

    /**
     * @param addressLodgeStrictType $address
     * @return \App\Asic\applicant
     */
    public function setAddress($address)
    {
      $this->address = $address;
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
     * @return \App\Asic\applicant
     */
    public function setEmailAddress($emailAddress)
    {
      $this->emailAddress = $emailAddress;
      return $this;
    }

    /**
     * @return telephoneNumberType
     */
    public function getTelephoneNum()
    {
      return $this->telephoneNum;
    }

    /**
     * @param telephoneNumberType $telephoneNum
     * @return \App\Asic\applicant
     */
    public function setTelephoneNum($telephoneNum)
    {
      $this->telephoneNum = $telephoneNum;
      return $this;
    }

}
