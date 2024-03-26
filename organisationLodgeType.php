<?php

namespace App\Asic;

class organisationLodgeType
{

    /**
     * @var name $name
     */
    protected $name = null;

    /**
     * @var nniNumberType $acn
     */
    protected $acn = null;

    /**
     * @var string $orgNumber
     */
    protected $orgNumber = null;

    /**
     * @var addressLodgeType[] $address
     */
    protected $address = null;

    /**
     * @var emailType $emailAddress
     */
    protected $emailAddress = null;

    /**
     * @var date $startDate
     */
    protected $startDate = null;

    /**
     * @var date $endDate
     */
    protected $endDate = null;

    /**
     * @param name $name
     */
    public function __construct($name)
    {
      $this->name = $name;
    }

    /**
     * @return name
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param name $name
     * @return \App\Asic\organisationLodgeType
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return nniNumberType
     */
    public function getAcn()
    {
      return $this->acn;
    }

    /**
     * @param nniNumberType $acn
     * @return \App\Asic\organisationLodgeType
     */
    public function setAcn($acn)
    {
      $this->acn = $acn;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrgNumber()
    {
      return $this->orgNumber;
    }

    /**
     * @param string $orgNumber
     * @return \App\Asic\organisationLodgeType
     */
    public function setOrgNumber($orgNumber)
    {
      $this->orgNumber = $orgNumber;
      return $this;
    }

    /**
     * @return addressLodgeType[]
     */
    public function getAddress()
    {
      return $this->address;
    }

    /**
     * @param addressLodgeType[] $address
     * @return \App\Asic\organisationLodgeType
     */
    public function setAddress(array $address = null)
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
     * @return \App\Asic\organisationLodgeType
     */
    public function setEmailAddress($emailAddress)
    {
      $this->emailAddress = $emailAddress;
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
     * @return \App\Asic\organisationLodgeType
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
     * @return \App\Asic\organisationLodgeType
     */
    public function setEndDate($endDate)
    {
      $this->endDate = $endDate;
      return $this;
    }

}
