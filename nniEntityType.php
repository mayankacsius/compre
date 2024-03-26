<?php

namespace App\Asic;

class nniEntityType
{

    /**
     * @var abrEntityType $businessEntity
     */
    protected $businessEntity = null;

    /**
     * @var identifierType $identifier
     */
    protected $identifier = null;

    /**
     * @var nniNameType $name
     */
    protected $name = null;

    /**
     * @var nniTypeType $type
     */
    protected $type = null;

    /**
     * @var statusType $status
     */
    protected $status = null;

    /**
     * @var previousStateTerritoryType $previousStateTerritory
     */
    protected $previousStateTerritory = null;

    /**
     * @var date $dateRegistered
     */
    protected $dateRegistered = null;

    /**
     * @var date $dateDeregistered
     */
    protected $dateDeregistered = null;

    /**
     * @var date $dateRenewal
     */
    protected $dateRenewal = null;

    /**
     * @var date $dateReview
     */
    protected $dateReview = null;

    /**
     * @var jurisdiction $jurisdiction
     */
    protected $jurisdiction = null;

    /**
     * @var addressType $registeredAddress
     */
    protected $registeredAddress = null;

    /**
     * @var documentType[] $recentDocuments
     */
    protected $recentDocuments = null;

    /**
     * @param identifierType $identifier
     * @param nniNameType $name
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
     * @return abrEntityType
     */
    public function getBusinessEntity()
    {
      return $this->businessEntity;
    }

    /**
     * @param abrEntityType $businessEntity
     * @return \App\Asic\nniEntityType
     */
    public function setBusinessEntity($businessEntity)
    {
      $this->businessEntity = $businessEntity;
      return $this;
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
     * @return \App\Asic\nniEntityType
     */
    public function setIdentifier($identifier)
    {
      $this->identifier = $identifier;
      return $this;
    }

    /**
     * @return nniNameType
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param nniNameType $name
     * @return \App\Asic\nniEntityType
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
     * @return \App\Asic\nniEntityType
     */
    public function setType($type)
    {
      $this->type = $type;
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
     * @return \App\Asic\nniEntityType
     */
    public function setStatus($status)
    {
      $this->status = $status;
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
     * @return \App\Asic\nniEntityType
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
     * @return \App\Asic\nniEntityType
     */
    public function setDateRegistered($dateRegistered)
    {
      $this->dateRegistered = $dateRegistered;
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
     * @return \App\Asic\nniEntityType
     */
    public function setDateDeregistered($dateDeregistered)
    {
      $this->dateDeregistered = $dateDeregistered;
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
     * @return \App\Asic\nniEntityType
     */
    public function setDateRenewal($dateRenewal)
    {
      $this->dateRenewal = $dateRenewal;
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
     * @return \App\Asic\nniEntityType
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
     * @return \App\Asic\nniEntityType
     */
    public function setJurisdiction($jurisdiction)
    {
      $this->jurisdiction = $jurisdiction;
      return $this;
    }

    /**
     * @return addressType
     */
    public function getRegisteredAddress()
    {
      return $this->registeredAddress;
    }

    /**
     * @param addressType $registeredAddress
     * @return \App\Asic\nniEntityType
     */
    public function setRegisteredAddress($registeredAddress)
    {
      $this->registeredAddress = $registeredAddress;
      return $this;
    }

    /**
     * @return documentType[]
     */
    public function getRecentDocuments()
    {
      return $this->recentDocuments;
    }

    /**
     * @param documentType[] $recentDocuments
     * @return \App\Asic\nniEntityType
     */
    public function setRecentDocuments(array $recentDocuments = null)
    {
      $this->recentDocuments = $recentDocuments;
      return $this;
    }

}
