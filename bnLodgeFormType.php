<?php

namespace App\Asic;

class bnLodgeFormType
{

    /**
     * @var distinguishedNameType $name
     */
    protected $name = null;

    /**
     * @var termType $term
     */
    protected $term = null;

    /**
     * @var date $dateRenewal
     */
    protected $dateRenewal = null;

    /**
     * @var addressLodgeType[] $address
     */
    protected $address = null;

    /**
     * @var emailType $emailAddress
     */
    protected $emailAddress = null;

    /**
     * @var string $smsNumber
     */
    protected $smsNumber = null;

    /**
     * @var businessEntityLodgeType $businessEntity
     */
    protected $businessEntity = null;

    /**
     * @var string $transferKey
     */
    protected $transferKey = null;

    /**
     * @var contactPersonType $contact
     */
    protected $contact = null;

    /**
     * @var signatoryType $signatory
     */
    protected $signatory = null;

    /**
     * @param distinguishedNameType $name
     * @param termType $term
     * @param signatoryType $signatory
     */
    public function __construct($name, $term, $signatory)
    {
      $this->name = $name;
      $this->term = $term;
      $this->signatory = $signatory;
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
     * @return \App\Asic\bnLodgeFormType
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
     * @return \App\Asic\bnLodgeFormType
     */
    public function setTerm($term)
    {
      $this->term = $term;
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
     * @return \App\Asic\bnLodgeFormType
     */
    public function setDateRenewal($dateRenewal)
    {
      $this->dateRenewal = $dateRenewal;
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
     * @return \App\Asic\bnLodgeFormType
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
     * @return \App\Asic\bnLodgeFormType
     */
    public function setEmailAddress($emailAddress)
    {
      $this->emailAddress = $emailAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getSmsNumber()
    {
      return $this->smsNumber;
    }

    /**
     * @param string $smsNumber
     * @return \App\Asic\bnLodgeFormType
     */
    public function setSmsNumber($smsNumber)
    {
      $this->smsNumber = $smsNumber;
      return $this;
    }

    /**
     * @return businessEntityLodgeType
     */
    public function getBusinessEntity()
    {
      return $this->businessEntity;
    }

    /**
     * @param businessEntityLodgeType $businessEntity
     * @return \App\Asic\bnLodgeFormType
     */
    public function setBusinessEntity($businessEntity)
    {
      $this->businessEntity = $businessEntity;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransferKey()
    {
      return $this->transferKey;
    }

    /**
     * @param string $transferKey
     * @return \App\Asic\bnLodgeFormType
     */
    public function setTransferKey($transferKey)
    {
      $this->transferKey = $transferKey;
      return $this;
    }

    /**
     * @return contactPersonType
     */
    public function getContact()
    {
      return $this->contact;
    }

    /**
     * @param contactPersonType $contact
     * @return \App\Asic\bnLodgeFormType
     */
    public function setContact($contact)
    {
      $this->contact = $contact;
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
     * @return \App\Asic\bnLodgeFormType
     */
    public function setSignatory($signatory)
    {
      $this->signatory = $signatory;
      return $this;
    }

}
