<?php

namespace App\Asic;

class bnCancelTransferType
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
     * @var distinguishedNameType $businessName
     */
    protected $businessName = null;

    /**
     * @var asicKey $asicKey
     */
    protected $asicKey = null;

    /**
     * @var boolean $isTransfer
     */
    protected $isTransfer = null;

    /**
     * @var signatoryType $signatory
     */
    protected $signatory = null;

    /**
     * @param abnType $abn
     * @param nniNumberType $nniNumber
     * @param previousStateTerritoryType $previousStateTerritory
     * @param distinguishedNameType $businessName
     * @param asicKey $asicKey
     * @param boolean $isTransfer
     * @param signatoryType $signatory
     */
    public function __construct($abn, $nniNumber, $previousStateTerritory, $businessName, $asicKey, $isTransfer, $signatory)
    {
      $this->abn = $abn;
      $this->nniNumber = $nniNumber;
      $this->previousStateTerritory = $previousStateTerritory;
      $this->businessName = $businessName;
      $this->asicKey = $asicKey;
      $this->isTransfer = $isTransfer;
      $this->signatory = $signatory;
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
     * @return \App\Asic\bnCancelTransferType
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
     * @return \App\Asic\bnCancelTransferType
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
     * @return \App\Asic\bnCancelTransferType
     */
    public function setPreviousStateTerritory($previousStateTerritory)
    {
      $this->previousStateTerritory = $previousStateTerritory;
      return $this;
    }

    /**
     * @return distinguishedNameType
     */
    public function getBusinessName()
    {
      return $this->businessName;
    }

    /**
     * @param distinguishedNameType $businessName
     * @return \App\Asic\bnCancelTransferType
     */
    public function setBusinessName($businessName)
    {
      $this->businessName = $businessName;
      return $this;
    }

    /**
     * @return asicKey
     */
    public function getAsicKey()
    {
      return $this->asicKey;
    }

    /**
     * @param asicKey $asicKey
     * @return \App\Asic\bnCancelTransferType
     */
    public function setAsicKey($asicKey)
    {
      $this->asicKey = $asicKey;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTransfer()
    {
      return $this->isTransfer;
    }

    /**
     * @param boolean $isTransfer
     * @return \App\Asic\bnCancelTransferType
     */
    public function setIsTransfer($isTransfer)
    {
      $this->isTransfer = $isTransfer;
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
     * @return \App\Asic\bnCancelTransferType
     */
    public function setSignatory($signatory)
    {
      $this->signatory = $signatory;
      return $this;
    }

}
