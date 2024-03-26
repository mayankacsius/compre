<?php

namespace App\Asic;

class fssCustomerType
{

    /**
     * @var fssAccountType $account
     */
    protected $account = null;

    /**
     * @var abnType $abn
     */
    protected $abn = null;

    /**
     * @var personNameType $person
     */
    protected $person = null;

    /**
     * @var nniNameType $organisationName
     */
    protected $organisationName = null;

    /**
     * @var name $name
     */
    protected $name = null;

    /**
     * @var correspondenceName $correspondenceName
     */
    protected $correspondenceName = null;

    /**
     * @var date $dateRegistration
     */
    protected $dateRegistration = null;

    /**
     * @var date $dateRenewalReview
     */
    protected $dateRenewalReview = null;

    /**
     * @var status $status
     */
    protected $status = null;

    /**
     * @var telephoneNumberType $phoneNumber
     */
    protected $phoneNumber = null;

    /**
     * @var telephoneNumberType $faxNumber
     */
    protected $faxNumber = null;

    /**
     * @var emailType $emailAddress
     */
    protected $emailAddress = null;

    /**
     * @var agent $agent
     */
    protected $agent = null;

    /**
     * @var amountType $creditLimit
     */
    protected $creditLimit = null;

    /**
     * @var billingAddress $billingAddress
     */
    protected $billingAddress = null;

    /**
     * @param fssAccountType $account
     * @param personNameType $person
     * @param nniNameType $organisationName
     * @param name $name
     * @param correspondenceName $correspondenceName
     * @param status $status
     */
    public function __construct($account, $person, $organisationName, $name, $correspondenceName, $status)
    {
      $this->account = $account;
      $this->person = $person;
      $this->organisationName = $organisationName;
      $this->name = $name;
      $this->correspondenceName = $correspondenceName;
      $this->status = $status;
    }

    /**
     * @return fssAccountType
     */
    public function getAccount()
    {
      return $this->account;
    }

    /**
     * @param fssAccountType $account
     * @return \App\Asic\fssCustomerType
     */
    public function setAccount($account)
    {
      $this->account = $account;
      return $this;
    }

    /**
     * @return abnType
     */
    public function getAbn()
    {
      return $this->abn;
    }

    /**
     * @param abnType $abn
     * @return \App\Asic\fssCustomerType
     */
    public function setAbn($abn)
    {
      $this->abn = $abn;
      return $this;
    }

    /**
     * @return personNameType
     */
    public function getPerson()
    {
      return $this->person;
    }

    /**
     * @param personNameType $person
     * @return \App\Asic\fssCustomerType
     */
    public function setPerson($person)
    {
      $this->person = $person;
      return $this;
    }

    /**
     * @return nniNameType
     */
    public function getOrganisationName()
    {
      return $this->organisationName;
    }

    /**
     * @param nniNameType $organisationName
     * @return \App\Asic\fssCustomerType
     */
    public function setOrganisationName($organisationName)
    {
      $this->organisationName = $organisationName;
      return $this;
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
     * @return \App\Asic\fssCustomerType
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return correspondenceName
     */
    public function getCorrespondenceName()
    {
      return $this->correspondenceName;
    }

    /**
     * @param correspondenceName $correspondenceName
     * @return \App\Asic\fssCustomerType
     */
    public function setCorrespondenceName($correspondenceName)
    {
      $this->correspondenceName = $correspondenceName;
      return $this;
    }

    /**
     * @return date
     */
    public function getDateRegistration()
    {
      return $this->dateRegistration;
    }

    /**
     * @param date $dateRegistration
     * @return \App\Asic\fssCustomerType
     */
    public function setDateRegistration($dateRegistration)
    {
      $this->dateRegistration = $dateRegistration;
      return $this;
    }

    /**
     * @return date
     */
    public function getDateRenewalReview()
    {
      return $this->dateRenewalReview;
    }

    /**
     * @param date $dateRenewalReview
     * @return \App\Asic\fssCustomerType
     */
    public function setDateRenewalReview($dateRenewalReview)
    {
      $this->dateRenewalReview = $dateRenewalReview;
      return $this;
    }

    /**
     * @return status
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param status $status
     * @return \App\Asic\fssCustomerType
     */
    public function setStatus($status)
    {
      $this->status = $status;
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
     * @return \App\Asic\fssCustomerType
     */
    public function setPhoneNumber($phoneNumber)
    {
      $this->phoneNumber = $phoneNumber;
      return $this;
    }

    /**
     * @return telephoneNumberType
     */
    public function getFaxNumber()
    {
      return $this->faxNumber;
    }

    /**
     * @param telephoneNumberType $faxNumber
     * @return \App\Asic\fssCustomerType
     */
    public function setFaxNumber($faxNumber)
    {
      $this->faxNumber = $faxNumber;
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
     * @return \App\Asic\fssCustomerType
     */
    public function setEmailAddress($emailAddress)
    {
      $this->emailAddress = $emailAddress;
      return $this;
    }

    /**
     * @return agent
     */
    public function getAgent()
    {
      return $this->agent;
    }

    /**
     * @param agent $agent
     * @return \App\Asic\fssCustomerType
     */
    public function setAgent($agent)
    {
      $this->agent = $agent;
      return $this;
    }

    /**
     * @return amountType
     */
    public function getCreditLimit()
    {
      return $this->creditLimit;
    }

    /**
     * @param amountType $creditLimit
     * @return \App\Asic\fssCustomerType
     */
    public function setCreditLimit($creditLimit)
    {
      $this->creditLimit = $creditLimit;
      return $this;
    }

    /**
     * @return billingAddress
     */
    public function getBillingAddress()
    {
      return $this->billingAddress;
    }

    /**
     * @param billingAddress $billingAddress
     * @return \App\Asic\fssCustomerType
     */
    public function setBillingAddress($billingAddress)
    {
      $this->billingAddress = $billingAddress;
      return $this;
    }

}
