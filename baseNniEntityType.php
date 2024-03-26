<?php

namespace App\Asic;

class baseNniEntityType
{

    /**
     * @var identifierType $identifier
     */
    protected $identifier = null;

    /**
     * @var bnReferenceNumberType $bnReferenceNumber
     */
    protected $bnReferenceNumber = null;

    /**
     * @var distinguishedNameType $name
     */
    protected $name = null;

    /**
     * @var nniTypeType $type
     */
    protected $type = null;

    /**
     * @var classType $class
     */
    protected $class = null;

    /**
     * @var classType $subClass
     */
    protected $subClass = null;

    /**
     * @var statusType $status
     */
    protected $status = null;

    /**
     * @var stateTerritoryCodeType $incorporationState
     */
    protected $incorporationState = null;

    /**
     * @var placeOfIncorporation $placeOfIncorporation
     */
    protected $placeOfIncorporation = null;

    /**
     * @var previousStateTerritoryType $previousStateTerritory
     */
    protected $previousStateTerritory = null;

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
     * @var date $dateReview
     */
    protected $dateReview = null;

    /**
     * @var jurisdiction $jurisdiction
     */
    protected $jurisdiction = null;

    /**
     * @var addressType[] $address
     */
    protected $address = null;

    /**
     * @var formerName[] $formerName
     */
    protected $formerName = null;

    /**
     * @var documentType[] $recentDocument
     */
    protected $recentDocument = null;

    /**
     * @param identifierType $identifier
     * @param distinguishedNameType $name
     * @param nniTypeType $type
     * @param statusType $status
     */
    public function __construct($identifier, $name, $type, $status)
    {
      $this->identifier = $identifier;
      $this->name = $name;
      $this->type = $type;
      $this->status = $status;
    }

    /**
     * @return identifierType
     */
    public function getIdentifier()
    {
      return $this->identifier;
    }

    /**
     * @param identifierType $identifier
     * @return \App\Asic\baseNniEntityType
     */
    public function setIdentifier($identifier)
    {
      $this->identifier = $identifier;
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
     * @return \App\Asic\baseNniEntityType
     */
    public function setBnReferenceNumber($bnReferenceNumber)
    {
      $this->bnReferenceNumber = $bnReferenceNumber;
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
     * @return \App\Asic\baseNniEntityType
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return nniTypeType
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param nniTypeType $type
     * @return \App\Asic\baseNniEntityType
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return classType
     */
    public function getClass()
    {
      return $this->class;
    }

    /**
     * @param classType $class
     * @return \App\Asic\baseNniEntityType
     */
    public function setClass($class)
    {
      $this->class = $class;
      return $this;
    }

    /**
     * @return classType
     */
    public function getSubClass()
    {
      return $this->subClass;
    }

    /**
     * @param classType $subClass
     * @return \App\Asic\baseNniEntityType
     */
    public function setSubClass($subClass)
    {
      $this->subClass = $subClass;
      return $this;
    }

    /**
     * @return statusType
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param statusType $status
     * @return \App\Asic\baseNniEntityType
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return stateTerritoryCodeType
     */
    public function getIncorporationState()
    {
      return $this->incorporationState;
    }

    /**
     * @param stateTerritoryCodeType $incorporationState
     * @return \App\Asic\baseNniEntityType
     */
    public function setIncorporationState($incorporationState)
    {
      $this->incorporationState = $incorporationState;
      return $this;
    }

    /**
     * @return placeOfIncorporation
     */
    public function getPlaceOfIncorporation()
    {
      return $this->placeOfIncorporation;
    }

    /**
     * @param placeOfIncorporation $placeOfIncorporation
     * @return \App\Asic\baseNniEntityType
     */
    public function setPlaceOfIncorporation($placeOfIncorporation)
    {
      $this->placeOfIncorporation = $placeOfIncorporation;
      return $this;
    }

    /**
     * @return previousStateTerritoryType
     */
    public function getPreviousStateTerritory()
    {
      return $this->previousStateTerritory;
    }

    /**
     * @param previousStateTerritoryType $previousStateTerritory
     * @return \App\Asic\baseNniEntityType
     */
    public function setPreviousStateTerritory($previousStateTerritory)
    {
      $this->previousStateTerritory = $previousStateTerritory;
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
     * @return \App\Asic\baseNniEntityType
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
     * @return \App\Asic\baseNniEntityType
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
     * @return \App\Asic\baseNniEntityType
     */
    public function setDateDeregistered($dateDeregistered)
    {
      $this->dateDeregistered = $dateDeregistered;
      return $this;
    }

    /**
     * @return date
     */
    public function getDateReview()
    {
      return $this->dateReview;
    }

    /**
     * @param date $dateReview
     * @return \App\Asic\baseNniEntityType
     */
    public function setDateReview($dateReview)
    {
      $this->dateReview = $dateReview;
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
     * @return \App\Asic\baseNniEntityType
     */
    public function setJurisdiction($jurisdiction)
    {
      $this->jurisdiction = $jurisdiction;
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
     * @return \App\Asic\baseNniEntityType
     */
    public function setAddress(array $address = null)
    {
      $this->address = $address;
      return $this;
    }

    /**
     * @return formerName[]
     */
    public function getFormerName()
    {
      return $this->formerName;
    }

    /**
     * @param formerName[] $formerName
     * @return \App\Asic\baseNniEntityType
     */
    public function setFormerName(array $formerName = null)
    {
      $this->formerName = $formerName;
      return $this;
    }

    /**
     * @return documentType[]
     */
    public function getRecentDocument()
    {
      return $this->recentDocument;
    }

    /**
     * @param documentType[] $recentDocument
     * @return \App\Asic\baseNniEntityType
     */
    public function setRecentDocument(array $recentDocument = null)
    {
      $this->recentDocument = $recentDocument;
      return $this;
    }

}
