<?php

namespace App\Asic;

class bnUpdateFormType
{

    /**
     * @var bnIdentifier $number
     */
    protected $number = null;

    /**
     * @var distinguishedNameType $name
     */
    protected $name = null;

    /**
     * @var termType $term
     */
    protected $term = null;

    /**
     * @var date $dateRegistered
     */
    protected $dateRegistered = null;

    /**
     * @var date $dateRenewal
     */
    protected $dateRenewal = null;

    /**
     * @var addressType[] $address
     */
    protected $address = null;

    /**
     * @var emailType $emailAddress
     */
    protected $emailAddress = null;

    /**
     * @var smsNumber $smsNumber
     */
    protected $smsNumber = null;

    /**
     * @var representativeType[] $representative
     */
    protected $representative = null;

    /**
     * @var businessEntityType $businessEntity
     */
    protected $businessEntity = null;

    /**
     * @var signatoryType $signatory
     */
    protected $signatory = null;

    /**
     * @param bnIdentifier $number
     * @param distinguishedNameType $name
     * @param signatoryType $signatory
     */
    public function __construct($number, $name, $signatory)
    {
      $this->number = $number;
      $this->name = $name;
      $this->signatory = $signatory;
    }

    /**
     * @return bnIdentifier
     */
    public function getNumber()
    {
      return $this->number;
    }

    /**
     * @param bnIdentifier $number
     * @return \App\Asic\bnUpdateFormType
     */
    public function setNumber($number)
    {
      $this->number = $number;
      return $this;
    }

    /**
     * @return distinguishedNameType
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param distinguishedNameType $name
     * @return \App\Asic\bnUpdateFormType
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return termType
     */
    public function getTerm()
    {
      return $this->term;
    }

    /**
     * @param termType $term
     * @return \App\Asic\bnUpdateFormType
     */
    public function setTerm($term)
    {
      $this->term = $term;
      return $this;
    }

    /**
     * @return date
     */
    public function getDateRegistered()
    {
      return $this->dateRegistered;
    }

    /**
     * @param date $dateRegistered
     * @return \App\Asic\bnUpdateFormType
     */
    public function setDateRegistered($dateRegistered)
    {
      $this->dateRegistered = $dateRegistered;
      return $this;
    }

    /**
     * @return date
     */
    public function getDateRenewal()
    {
      return $this->dateRenewal;
    }

    /**
     * @param date $dateRenewal
     * @return \App\Asic\bnUpdateFormType
     */
    public function setDateRenewal($dateRenewal)
    {
      $this->dateRenewal = $dateRenewal;
      return $this;
    }

    /**
     * @return addressType[]
     */
    public function getAddress()
    {
      return $this->address;
    }

    /**
     * @param addressType[] $address
     * @return \App\Asic\bnUpdateFormType
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
     * @return \App\Asic\bnUpdateFormType
     */
    public function setEmailAddress($emailAddress)
    {
      $this->emailAddress = $emailAddress;
      return $this;
    }

    /**
     * @return smsNumber
     */
    public function getSmsNumber()
    {
      return $this->smsNumber;
    }

    /**
     * @param smsNumber $smsNumber
     * @return \App\Asic\bnUpdateFormType
     */
    public function setSmsNumber($smsNumber)
    {
      $this->smsNumber = $smsNumber;
      return $this;
    }

    /**
     * @return representativeType[]
     */
    public function getRepresentative()
    {
      return $this->representative;
    }

    /**
     * @param representativeType[] $representative
     * @return \App\Asic\bnUpdateFormType
     */
    public function setRepresentative(array $representative = null)
    {
      $this->representative = $representative;
      return $this;
    }

    /**
     * @return businessEntityType
     */
    public function getBusinessEntity()
    {
      return $this->businessEntity;
    }

    /**
     * @param businessEntityType $businessEntity
     * @return \App\Asic\bnUpdateFormType
     */
    public function setBusinessEntity($businessEntity)
    {
      $this->businessEntity = $businessEntity;
      return $this;
    }

    /**
     * @return signatoryType
     */
    public function getSignatory()
    {
      return $this->signatory;
    }

    /**
     * @param signatoryType $signatory
     * @return \App\Asic\bnUpdateFormType
     */
    public function setSignatory($signatory)
    {
      $this->signatory = $signatory;
      return $this;
    }

}
