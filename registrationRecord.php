<?php

namespace App\Asic;

class registrationRecord
{

    /**
     * @var nniNumberType $bnReferenceNumber
     */
    protected $bnReferenceNumber = null;

    /**
     * @var nniNumberType $nniNumber
     */
    protected $nniNumber = null;

    /**
     * @param nniNumberType $bnReferenceNumber
     * @param nniNumberType $nniNumber
     */
    public function __construct($bnReferenceNumber, $nniNumber)
    {
      $this->bnReferenceNumber = $bnReferenceNumber;
      $this->nniNumber = $nniNumber;
    }

    /**
     * @return nniNumberType
     */
    public function getBnReferenceNumber()
    {
      return $this->bnReferenceNumber;
    }

    /**
     * @param nniNumberType $bnReferenceNumber
     * @return \App\Asic\registrationRecord
     */
    public function setBnReferenceNumber($bnReferenceNumber)
    {
      $this->bnReferenceNumber = $bnReferenceNumber;
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
     * @return \App\Asic\registrationRecord
     */
    public function setNniNumber($nniNumber)
    {
      $this->nniNumber = $nniNumber;
      return $this;
    }

}
