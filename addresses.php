<?php

namespace App\Asic;

class addresses
{

    /**
     * @var registeredOffice $registeredOffice
     */
    protected $registeredOffice = null;

    /**
     * @var ppob $ppob
     */
    protected $ppob = null;

    /**
     * @var emailAddress $emailAddress
     */
    protected $emailAddress = null;

    /**
     * @var telephoneNum $telephoneNum
     */
    protected $telephoneNum = null;

    /**
     * @param registeredOffice $registeredOffice
     * @param ppob $ppob
     * @param emailAddress $emailAddress
     * @param telephoneNum $telephoneNum
     */
    public function __construct($registeredOffice, $ppob, $emailAddress, $telephoneNum)
    {
      $this->registeredOffice = $registeredOffice;
      $this->ppob = $ppob;
      $this->emailAddress = $emailAddress;
      $this->telephoneNum = $telephoneNum;
    }

    /**
     * @return registeredOffice
     */
    public function getRegisteredOffice()
    {
      return $this->registeredOffice;
    }

    /**
     * @param registeredOffice $registeredOffice
     * @return \App\Asic\addresses
     */
    public function setRegisteredOffice($registeredOffice)
    {
      $this->registeredOffice = $registeredOffice;
      return $this;
    }

    /**
     * @return ppob
     */
    public function getPpob()
    {
      return $this->ppob;
    }

    /**
     * @param ppob $ppob
     * @return \App\Asic\addresses
     */
    public function setPpob($ppob)
    {
      $this->ppob = $ppob;
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
     * @return \App\Asic\addresses
     */
    public function setEmailAddress($emailAddress)
    {
      $this->emailAddress = $emailAddress;
      return $this;
    }

    /**
     * @return telephoneNum
     */
    public function getTelephoneNum()
    {
      return $this->telephoneNum;
    }

    /**
     * @param telephoneNum $telephoneNum
     * @return \App\Asic\addresses
     */
    public function setTelephoneNum($telephoneNum)
    {
      $this->telephoneNum = $telephoneNum;
      return $this;
    }

}
