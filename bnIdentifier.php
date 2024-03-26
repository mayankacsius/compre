<?php

namespace App\Asic;

class bnIdentifier
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
     * @param nniNumberType $nniNumber
     * @param bnReferenceNumberType $bnReferenceNumber
     */
    public function __construct($nniNumber, $bnReferenceNumber)
    {
      $this->nniNumber = $nniNumber;
      $this->bnReferenceNumber = $bnReferenceNumber;
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
     * @return \App\Asic\bnIdentifier
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
     * @return \App\Asic\bnIdentifier
     */
    public function setBnReferenceNumber($bnReferenceNumber)
    {
      $this->bnReferenceNumber = $bnReferenceNumber;
      return $this;
    }

}
