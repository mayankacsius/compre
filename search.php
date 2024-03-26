<?php

namespace App\Asic;

class search
{

    /**
     * @var abnType $abn
     */
    protected $abn = null;

    /**
     * @var string $orgNumber
     */
    protected $orgNumber = null;

    /**
     * @var string $nniNumber
     */
    protected $nniNumber = null;

    /**
     * @var organisation $organisation
     */
    protected $organisation = null;

    /**
     * @var previousStateTerritoryType $previousStateOrTerritory
     */
    protected $previousStateOrTerritory = null;

    /**
     * @var bnReferenceNumberType $bnReferenceNumber
     */
    protected $bnReferenceNumber = null;

    /**
     * @param abnType $abn
     * @param string $orgNumber
     * @param string $nniNumber
     * @param organisation $organisation
     * @param previousStateTerritoryType $previousStateOrTerritory
     * @param bnReferenceNumberType $bnReferenceNumber
     */
    public function __construct($abn, $orgNumber, $nniNumber, $organisation, $previousStateOrTerritory, $bnReferenceNumber)
    {
      $this->abn = $abn;
      $this->orgNumber = $orgNumber;
      $this->nniNumber = $nniNumber;
      $this->organisation = $organisation;
      $this->previousStateOrTerritory = $previousStateOrTerritory;
      $this->bnReferenceNumber = $bnReferenceNumber;
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
     * @return \App\Asic\search
     */
    public function setAbn($abn)
    {
      $this->abn = $abn;
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
     * @return \App\Asic\search
     */
    public function setOrgNumber($orgNumber)
    {
      $this->orgNumber = $orgNumber;
      return $this;
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
     * @return \App\Asic\search
     */
    public function setNniNumber($nniNumber)
    {
      $this->nniNumber = $nniNumber;
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
     * @return \App\Asic\search
     */
    public function setOrganisation($organisation)
    {
      $this->organisation = $organisation;
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
     * @return \App\Asic\search
     */
    public function setPreviousStateOrTerritory($previousStateOrTerritory)
    {
      $this->previousStateOrTerritory = $previousStateOrTerritory;
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
     * @return \App\Asic\search
     */
    public function setBnReferenceNumber($bnReferenceNumber)
    {
      $this->bnReferenceNumber = $bnReferenceNumber;
      return $this;
    }

}
