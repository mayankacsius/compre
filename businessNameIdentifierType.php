<?php

namespace App\Asic;

class businessNameIdentifierType
{

    /**
     * @var nniNumberType $nniNumber
     */
    protected $nniNumber = null;

    /**
     * @var bnReferenceNumberType $bnReferenceNumber
     */
    protected $bnReferenceNumber = null;

    /**
     * @var nniNameType $name
     */
    protected $name = null;

    /**
     * @var abnType $abn
     */
    protected $abn = null;

    /**
     * @param nniNumberType $nniNumber
     * @param nniNameType $name
     */
    public function __construct($nniNumber, $name)
    {
      $this->nniNumber = $nniNumber;
      $this->name = $name;
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
     * @return \App\Asic\businessNameIdentifierType
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
     * @return \App\Asic\businessNameIdentifierType
     */
    public function setBnReferenceNumber($bnReferenceNumber)
    {
      $this->bnReferenceNumber = $bnReferenceNumber;
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
     * @return \App\Asic\businessNameIdentifierType
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
     * @return \App\Asic\businessNameIdentifierType
     */
    public function setAbn($abn)
    {
      $this->abn = $abn;
      return $this;
    }

}
