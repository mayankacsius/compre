<?php

namespace App\Asic;

class debtorType
{

    /**
     * @var fssAccountType $account
     */
    protected $account = null;

    /**
     * @var nniNameType $name
     */
    protected $name = null;

    /**
     * @var abnType $abn
     */
    protected $abn = null;

    /**
     * @var abnReferenceNumber $abnReferenceNumber
     */
    protected $abnReferenceNumber = null;

    /**
     * @var addressType $address
     */
    protected $address = null;

    /**
     * @param fssAccountType $account
     * @param nniNameType $name
     * @param addressType $address
     */
    public function __construct($account, $name, $address)
    {
      $this->account = $account;
      $this->name = $name;
      $this->address = $address;
    }

    /**
     * @return fssAccountType
     */
    public function getAccount()
    {
      return $this->account;
    }

    /**
     * @param fssAccountType $account
     * @return \App\Asic\debtorType
     */
    public function setAccount($account)
    {
      $this->account = $account;
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
     * @return \App\Asic\debtorType
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
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
     * @return \App\Asic\debtorType
     */
    public function setAbn($abn)
    {
      $this->abn = $abn;
      return $this;
    }

    /**
     * @return abnReferenceNumber
     */
    public function getAbnReferenceNumber()
    {
      return $this->abnReferenceNumber;
    }

    /**
     * @param abnReferenceNumber $abnReferenceNumber
     * @return \App\Asic\debtorType
     */
    public function setAbnReferenceNumber($abnReferenceNumber)
    {
      $this->abnReferenceNumber = $abnReferenceNumber;
      return $this;
    }

    /**
     * @return addressType
     */
    public function getAddress()
    {
      return $this->address;
    }

    /**
     * @param addressType $address
     * @return \App\Asic\debtorType
     */
    public function setAddress($address)
    {
      $this->address = $address;
      return $this;
    }

}
