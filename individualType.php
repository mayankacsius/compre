<?php

namespace App\Asic;

class individualType
{

    /**
     * @var personNameType $name
     */
    protected $name = null;

    /**
     * @var personNameType $previousName
     */
    protected $previousName = null;

    /**
     * @var birthDetailsType $birthDetails
     */
    protected $birthDetails = null;

    /**
     * @var addressExtType $address
     */
    protected $address = null;

    /**
     * @var emailType $emailAddress
     */
    protected $emailAddress = null;

    /**
     * @var boolean $changeOfIndividual
     */
    protected $changeOfIndividual = null;

    /**
     * @var date $startDate
     */
    protected $startDate = null;

    /**
     * @var date $endDate
     */
    protected $endDate = null;

    /**
     * @param personNameType $name
     */
    public function __construct($name)
    {
      $this->name = $name;
    }

    /**
     * @return personNameType
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param personNameType $name
     * @return \App\Asic\individualType
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return personNameType
     */
    public function getPreviousName()
    {
      return $this->previousName;
    }

    /**
     * @param personNameType $previousName
     * @return \App\Asic\individualType
     */
    public function setPreviousName($previousName)
    {
      $this->previousName = $previousName;
      return $this;
    }

    /**
     * @return birthDetailsType
     */
    public function getBirthDetails()
    {
      return $this->birthDetails;
    }

    /**
     * @param birthDetailsType $birthDetails
     * @return \App\Asic\individualType
     */
    public function setBirthDetails($birthDetails)
    {
      $this->birthDetails = $birthDetails;
      return $this;
    }

    /**
     * @return addressExtType
     */
    public function getAddress()
    {
      return $this->address;
    }

    /**
     * @param addressExtType $address
     * @return \App\Asic\individualType
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
     * @return \App\Asic\individualType
     */
    public function setEmailAddress($emailAddress)
    {
      $this->emailAddress = $emailAddress;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getChangeOfIndividual()
    {
      return $this->changeOfIndividual;
    }

    /**
     * @param boolean $changeOfIndividual
     * @return \App\Asic\individualType
     */
    public function setChangeOfIndividual($changeOfIndividual)
    {
      $this->changeOfIndividual = $changeOfIndividual;
      return $this;
    }

    /**
     * @return date
     */
    public function getStartDate()
    {
      return $this->startDate;
    }

    /**
     * @param date $startDate
     * @return \App\Asic\individualType
     */
    public function setStartDate($startDate)
    {
      $this->startDate = $startDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getEndDate()
    {
      return $this->endDate;
    }

    /**
     * @param date $endDate
     * @return \App\Asic\individualType
     */
    public function setEndDate($endDate)
    {
      $this->endDate = $endDate;
      return $this;
    }

}
