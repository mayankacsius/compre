<?php

namespace App\Asic;

class requestDataType
{
    /**
     * @var abnType $abn
     */
    protected $abn = null;

    /**
     * @var nniNumberType $nniNumber
     */
    protected $nniNumber = null;

    /**
     * @var previousStateTerritoryType $previousStateTerritory
     */
    protected $previousStateTerritory = null;

    /**
     * @var bnReferenceNumberType $bnReferenceNumber
     */
    protected $bnReferenceNumber = null;

    /**
     * @var document $document
     */
    protected $document = null;

    /**
     * @var addressLodgeType $address
     */
    protected $address = null;

    /**
     * @var searchType $searchType
     */
    protected $searchType = null;

    /**
     * @var searchScope $searchScope
     */
    protected $searchScope = null;

    /**
     * @var organisation $organisation
     */
    protected $organisation = null;

    /**
     * @var int $maxResult
     */
    protected $maxResult = null;

    /**
     * @param abnType $abn
     * @param nniNumberType $nniNumber
     * @param previousStateTerritoryType $previousStateTerritory
     * @param bnReferenceNumberType $bnReferenceNumber
     * @param addressLodgeType $address
     * @param searchType $searchType
     * @param searchScope $searchScope
     * @param organisation $organisation
     */
    public function __construct($abn = null, $nniNumber = null, $previousStateTerritory = null, $bnReferenceNumber = null, $address = null, $searchType = null, $searchScope = null, $organisation = null)
    {
      $this->abn = $abn;
      $this->nniNumber = $nniNumber;
      $this->previousStateTerritory = $previousStateTerritory;
      $this->bnReferenceNumber = $bnReferenceNumber;
      $this->address = $address;
      $this->searchType = $searchType;
      $this->searchScope = $searchScope;
      $this->organisation = $organisation;
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
     * @return \App\Asic\requestDataType
     */
    public function setAbn($abn)
    {
      $this->abn = $abn;
      return $this;
    }

    /**
     * @return nniNumberType
     */
    public function getNniNumber()
    {
      return $this->nniNumber;
    }

    /**
     * @param nniNumberType $nniNumber
     * @return \App\Asic\requestDataType
     */
    public function setNniNumber($nniNumber)
    {
      $this->nniNumber = $nniNumber;
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
     * @return \App\Asic\requestDataType
     */
    public function setPreviousStateTerritory($previousStateTerritory)
    {
      $this->previousStateTerritory = $previousStateTerritory;
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
     * @return \App\Asic\requestDataType
     */
    public function setBnReferenceNumber($bnReferenceNumber)
    {
      $this->bnReferenceNumber = $bnReferenceNumber;
      return $this;
    }

    /**
     * @return document
     */
    public function getDocument()
    {
      return $this->document;
    }

    /**
     * @param document $document
     * @return \App\Asic\requestDataType
     */
    public function setDocument($document)
    {
      $this->document = $document;
      return $this;
    }

    /**
     * @return addressLodgeType
     */
    public function getAddress()
    {
      return $this->address;
    }

    /**
     * @param addressLodgeType $address
     * @return \App\Asic\requestDataType
     */
    public function setAddress($address)
    {
      $this->address = $address;
      return $this;
    }

    /**
     * @return searchType
     */
    public function getSearchType()
    {
      return $this->searchType;
    }

    /**
     * @param searchType $searchType
     * @return \App\Asic\requestDataType
     */
    public function setSearchType($searchType)
    {
      $this->searchType = $searchType;
      return $this;
    }

    /**
     * @return searchScope
     */
    public function getSearchScope()
    {
      return $this->searchScope;
    }

    /**
     * @param searchScope $searchScope
     * @return \App\Asic\requestDataType
     */
    public function setSearchScope($searchScope)
    {
      $this->searchScope = $searchScope;
      return $this;
    }

    /**
     * @return organisation
     */
    public function getOrganisation()
    {
      return $this->organisation;
    }

    /**
     * @param organisation $organisation
     * @return \App\Asic\requestDataType
     */
    public function setOrganisation($organisation)
    {
      $this->organisation = $organisation;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxResult()
    {
      return $this->maxResult;
    }

    /**
     * @param int $maxResult
     * @return \App\Asic\requestDataType
     */
    public function setMaxResult($maxResult)
    {
      $this->maxResult = $maxResult;
      return $this;
    }

}
