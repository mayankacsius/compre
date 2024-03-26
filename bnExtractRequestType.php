<?php

namespace App\Asic;

class bnExtractRequestType
{

    /**
     * @var abn $abn
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
     * @var bnReferenceNumberType $bnReferenceNumber
     */
    protected $bnReferenceNumber = null;

    /**
     * @var stateTerritory $stateTerritory
     */
    protected $stateTerritory = null;

    /**
     * @var trueType $summaryDetailsOnly
     */
    protected $summaryDetailsOnly = null;

    /**
     * @var int $maxDocuments
     */
    protected $maxDocuments = null;

    /**
     * @var boolean $showHistory
     */
    protected $showHistory = null;

    /**
     * @param abn $abn
     * @param string $orgNumber
     * @param string $nniNumber
     * @param stateTerritory $stateTerritory
     */
    public function __construct($abn, $orgNumber, $nniNumber, $stateTerritory)
    {
      $this->abn = $abn;
      $this->orgNumber = $orgNumber;
      $this->nniNumber = $nniNumber;
      $this->stateTerritory = $stateTerritory;
    }

    /**
     * @return abn
     */
    public function getAbn()
    {
      return $this->abn;
    }

    /**
     * @param abn $abn
     * @return \App\Asic\bnExtractRequestType
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
     * @return \App\Asic\bnExtractRequestType
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
     * @return \App\Asic\bnExtractRequestType
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
     * @return \App\Asic\bnExtractRequestType
     */
    public function setBnReferenceNumber($bnReferenceNumber)
    {
      $this->bnReferenceNumber = $bnReferenceNumber;
      return $this;
    }

    /**
     * @return stateTerritory
     */
    public function getStateTerritory()
    {
      return $this->stateTerritory;
    }

    /**
     * @param stateTerritory $stateTerritory
     * @return \App\Asic\bnExtractRequestType
     */
    public function setStateTerritory($stateTerritory)
    {
      $this->stateTerritory = $stateTerritory;
      return $this;
    }

    /**
     * @return trueType
     */
    public function getSummaryDetailsOnly()
    {
      return $this->summaryDetailsOnly;
    }

    /**
     * @param trueType $summaryDetailsOnly
     * @return \App\Asic\bnExtractRequestType
     */
    public function setSummaryDetailsOnly($summaryDetailsOnly)
    {
      $this->summaryDetailsOnly = $summaryDetailsOnly;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxDocuments()
    {
      return $this->maxDocuments;
    }

    /**
     * @param int $maxDocuments
     * @return \App\Asic\bnExtractRequestType
     */
    public function setMaxDocuments($maxDocuments)
    {
      $this->maxDocuments = $maxDocuments;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowHistory()
    {
      return $this->showHistory;
    }

    /**
     * @param boolean $showHistory
     * @return \App\Asic\bnExtractRequestType
     */
    public function setShowHistory($showHistory)
    {
      $this->showHistory = $showHistory;
      return $this;
    }

}
