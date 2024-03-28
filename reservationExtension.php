<?php

namespace App\Asic;

class reservationExtension
{

    /**
     * @var nniNameType $reservedName
     */
    protected $reservedName = null;

    /**
     * @var feeType $fees
     */
    protected $fees = null;

    /**
     * @var lodgementStatus $lodgementStatus
     */
    protected $lodgementStatus = null;

    /**
     * @var asicTransactionNumber $asicTransactionNumber
     */
    protected $asicTransactionNumber = null;

    /**
     * @param nniNameType $reservedName
     * @param feeType $fees
     * @param lodgementStatus $lodgementStatus
     * @param asicTransactionNumber $asicTransactionNumber
     */
    public function __construct($reservedName, $fees, $lodgementStatus, $asicTransactionNumber)
    {
      $this->reservedName = $reservedName;
      $this->fees = $fees;
      $this->lodgementStatus = $lodgementStatus;
      $this->asicTransactionNumber = $asicTransactionNumber;
    }

    /**
     * @return nniNameType
     */
    public function getReservedName()
    {
      return $this->reservedName;
    }

    /**
     * @param nniNameType $reservedName
     * @return \App\Asic\reservationExtension
     */
    public function setReservedName($reservedName)
    {
      $this->reservedName = $reservedName;
      return $this;
    }

    /**
     * @return feeType
     */
    public function getFees()
    {
      return $this->fees;
    }

    /**
     * @param feeType $fees
     * @return \App\Asic\reservationExtension
     */
    public function setFees($fees)
    {
      $this->fees = $fees;
      return $this;
    }

    /**
     * @return lodgementStatus
     */
    public function getLodgementStatus()
    {
      return $this->lodgementStatus;
    }

    /**
     * @param lodgementStatus $lodgementStatus
     * @return \App\Asic\reservationExtension
     */
    public function setLodgementStatus($lodgementStatus)
    {
      $this->lodgementStatus = $lodgementStatus;
      return $this;
    }

    /**
     * @return asicTransactionNumber
     */
    public function getAsicTransactionNumber()
    {
      return $this->asicTransactionNumber;
    }

    /**
     * @param asicTransactionNumber $asicTransactionNumber
     * @return \App\Asic\reservationExtension
     */
    public function setAsicTransactionNumber($asicTransactionNumber)
    {
      $this->asicTransactionNumber = $asicTransactionNumber;
      return $this;
    }

}
