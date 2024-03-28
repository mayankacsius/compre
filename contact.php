<?php

namespace App\Asic;

class contact
{

    /**
     * @var addressLodgeStrictType $address
     */
    protected $address = null;

    /**
     * @var telephoneNumberType $telephoneNum
     */
    protected $telephoneNum = null;

    /**
     * @var emailAddress $emailAddress
     */
    protected $emailAddress = null;

    /**
     * @param addressLodgeStrictType $address
     * @param telephoneNumberType $telephoneNum
     * @param emailAddress $emailAddress
     */
    public function __construct($address, $telephoneNum, $emailAddress)
    {
      $this->address = $address;
      $this->telephoneNum = $telephoneNum;
      $this->emailAddress = $emailAddress;
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
     * @return \App\Asic\contact
     */
    public function setAddress($address)
    {
      $this->address = $address;
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
     * @return \App\Asic\contact
     */
    public function setTelephoneNum($telephoneNum)
    {
      $this->telephoneNum = $telephoneNum;
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
     * @return \App\Asic\contact
     */
    public function setEmailAddress($emailAddress)
    {
      $this->emailAddress = $emailAddress;
      return $this;
    }

}
