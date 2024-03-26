<?php

namespace App\Asic;

class bnChangeAddressType
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
     * @var bnAddressType[] $address
     */
    protected $address = null;

    /**
     * @var emailType $emailAddress
     */
    protected $emailAddress = null;

    /**
     * @var smsType $sms
     */
    protected $sms = null;

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
     * @param signatoryType $signatory
     */
    public function __construct($abn, $nniNumber, $previousStateTerritory, $businessName, $asicKey, $signatory)
    {
      $this->abn = $abn;
      $this->nniNumber = $nniNumber;
      $this->previousStateTerritory = $previousStateTerritory;
      $this->businessName = $businessName;
      $this->asicKey = $asicKey;
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
     * @return \App\Asic\bnChangeAddressType
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
     * @return \App\Asic\bnChangeAddressType
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
     * @return \App\Asic\bnChangeAddressType
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
     * @return \App\Asic\bnChangeAddressType
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
     * @return \App\Asic\bnChangeAddressType
     */
    public function setAsicKey($asicKey)
    {
      $this->asicKey = $asicKey;
      return $this;
    }

    /**
     * @return bnAddressType[]
     */
    public function getAddress()
    {
      return $this->address;
    }

    /**
     * @param bnAddressType[] $address
     * @return \App\Asic\bnChangeAddressType
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
     * @return \App\Asic\bnChangeAddressType
     */
    public function setEmailAddress($emailAddress)
    {
      $this->emailAddress = $emailAddress;
      return $this;
    }

    /**
     * @return smsType
     */
    public function getSms()
    {
      return $this->sms;
    }

    /**
     * @param smsType $sms
     * @return \App\Asic\bnChangeAddressType
     */
    public function setSms($sms)
    {
      $this->sms = $sms;
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
     * @return \App\Asic\bnChangeAddressType
     */
    public function setSignatory($signatory)
    {
      $this->signatory = $signatory;
      return $this;
    }

}
