<?php

namespace App\Asic;

class BusinessNameDetailType
{

    /**
     * @var nniNameType $businessName
     */
    protected $businessName = null;

    /**
     * @var abnType $abn
     */
    protected $abn = null;

    /**
     * @var prevBusinessIdentifier[] $prevBusinessIdentifier
     */
    protected $prevBusinessIdentifier = null;

    /**
     * @param nniNameType $businessName
     * @param abnType $abn
     * @param prevBusinessIdentifier[] $prevBusinessIdentifier
     */
    public function __construct($businessName, $abn, array $prevBusinessIdentifier)
    {
      $this->businessName = $businessName;
      $this->abn = $abn;
      $this->prevBusinessIdentifier = $prevBusinessIdentifier;
    }

    /**
     * @return nniNameType
     */
    public function getBusinessName()
    {
      return $this->businessName;
    }

    /**
     * @param nniNameType $businessName
     * @return \App\Asic\BusinessNameDetailType
     */
    public function setBusinessName($businessName)
    {
      $this->businessName = $businessName;
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
     * @return \App\Asic\BusinessNameDetailType
     */
    public function setAbn($abn)
    {
      $this->abn = $abn;
      return $this;
    }

    /**
     * @return prevBusinessIdentifier[]
     */
    public function getPrevBusinessIdentifier()
    {
      return $this->prevBusinessIdentifier;
    }

    /**
     * @param prevBusinessIdentifier[] $prevBusinessIdentifier
     * @return \App\Asic\BusinessNameDetailType
     */
    public function setPrevBusinessIdentifier(array $prevBusinessIdentifier)
    {
      $this->prevBusinessIdentifier = $prevBusinessIdentifier;
      return $this;
    }

}
