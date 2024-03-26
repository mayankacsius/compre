<?php

namespace App\Asic;

class outboundBusinessNameType
{

    /**
     * @var string $nniNumber
     */
    protected $nniNumber = null;

    /**
     * @var bnReferenceNumberType $bnReferenceNumber
     */
    protected $bnReferenceNumber = null;

    /**
     * @var distinguishedNameExtType $name
     */
    protected $name = null;

    /**
     * @var intervalStatusType[] $status
     */
    protected $status = null;

    /**
     * @var termType $term
     */
    protected $term = null;

    /**
     * @var previousStateTerritoryType $previousStateOrTerritory
     */
    protected $previousStateOrTerritory = null;

    /**
     * @var jurisdiction $jurisdiction
     */
    protected $jurisdiction = null;

    /**
     * @var date $dateRegistered
     */
    protected $dateRegistered = null;

    /**
     * @var date $dateRenewal
     */
    protected $dateRenewal = null;

    /**
     * @var date $dateDeregistered
     */
    protected $dateDeregistered = null;

    /**
     * @var addressExtType[] $address
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
     * @param string $nniNumber
     * @param distinguishedNameExtType $name
     * @param intervalStatusType[] $status
     */
    public function __construct($nniNumber, $name, array $status)
    {
      $this->nniNumber = $nniNumber;
      $this->name = $name;
      $this->status = $status;
    }

    /**
     * @return string
     */
    public function getNniNumber()
    {
      return $this->nniNumber;
    }

    /**
     * @param string $nniNumber
     * @return \App\Asic\outboundBusinessNameType
     */
    public function setNniNumber($nniNumber)
    {
      $this->nniNumber = $nniNumber;
      return $this;
    }

    /**
     * @return bnReferenceNumberType
     */
    public function getBnReferenceNumber()
    {
      return $this->bnReferenceNumber;
    }

    /**
     * @param bnReferenceNumberType $bnReferenceNumber
     * @return \App\Asic\outboundBusinessNameType
     */
    public function setBnReferenceNumber($bnReferenceNumber)
    {
      $this->bnReferenceNumber = $bnReferenceNumber;
      return $this;
    }

    /**
     * @return distinguishedNameExtType
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param distinguishedNameExtType $name
     * @return \App\Asic\outboundBusinessNameType
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return intervalStatusType[]
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param intervalStatusType[] $status
     * @return \App\Asic\outboundBusinessNameType
     */
    public function setStatus(array $status)
    {
      $this->status = $status;
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
     * @return \App\Asic\outboundBusinessNameType
     */
    public function setTerm($term)
    {
      $this->term = $term;
      return $this;
    }

    /**
     * @return previousStateTerritoryType
     */
    public function getPreviousStateOrTerritory()
    {
      return $this->previousStateOrTerritory;
    }

    /**
     * @param previousStateTerritoryType $previousStateOrTerritory
     * @return \App\Asic\outboundBusinessNameType
     */
    public function setPreviousStateOrTerritory($previousStateOrTerritory)
    {
      $this->previousStateOrTerritory = $previousStateOrTerritory;
      return $this;
    }

    /**
     * @return jurisdiction
     */
    public function getJurisdiction()
    {
      return $this->jurisdiction;
    }

    /**
     * @param jurisdiction $jurisdiction
     * @return \App\Asic\outboundBusinessNameType
     */
    public function setJurisdiction($jurisdiction)
    {
      $this->jurisdiction = $jurisdiction;
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
     * @return \App\Asic\outboundBusinessNameType
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
     * @return \App\Asic\outboundBusinessNameType
     */
    public function setDateRenewal($dateRenewal)
    {
      $this->dateRenewal = $dateRenewal;
      return $this;
    }

    /**
     * @return date
     */
    public function getDateDeregistered()
    {
      return $this->dateDeregistered;
    }

    /**
     * @param date $dateDeregistered
     * @return \App\Asic\outboundBusinessNameType
     */
    public function setDateDeregistered($dateDeregistered)
    {
      $this->dateDeregistered = $dateDeregistered;
      return $this;
    }

    /**
     * @return addressExtType[]
     */
    public function getAddress()
    {
      return $this->address;
    }

    /**
     * @param addressExtType[] $address
     * @return \App\Asic\outboundBusinessNameType
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
     * @return \App\Asic\outboundBusinessNameType
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
     * @return \App\Asic\outboundBusinessNameType
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
     * @return \App\Asic\outboundBusinessNameType
     */
    public function setRepresentative(array $representative = null)
    {
      $this->representative = $representative;
      return $this;
    }

}
