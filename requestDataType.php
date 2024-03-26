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
     * @param abnType $abn
     * @param nniNumberType $nniNumber
     * @param previousStateTerritoryType $previousStateTerritory
     * @param bnReferenceNumberType $bnReferenceNumber
     */
    public function __construct($abn, $nniNumber, $previousStateTerritory, $bnReferenceNumber)
    {
      $this->abn = $abn;
      $this->nniNumber = $nniNumber;
      $this->previousStateTerritory = $previousStateTerritory;
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

}
