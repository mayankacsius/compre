<?php

namespace App\Asic;

class reservation
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
     * @var statusReason $statusReason
     */
    protected $statusReason = null;

    /**
     * @var asicTransactionNumber $asicTransactionNumber
     */
    protected $asicTransactionNumber = null;

    /**
     * @var companyDetails $companyDetails
     */
    protected $companyDetails = null;

    /**
     * @var BusinessNameDetailType $identicalBusinessNamesOwned
     */
    protected $identicalBusinessNamesOwned = null;

    /**
     * @var trueType $willRequestManualDetermination
     */
    protected $willRequestManualDetermination = null;

    /**
     * @var amountType $calculatedFee
     */
    protected $calculatedFee = null;

    /**
     * @param nniNameType $reservedName
     * @param feeType $fees
     * @param lodgementStatus $lodgementStatus
     * @param statusReason $statusReason
     * @param asicTransactionNumber $asicTransactionNumber
     * @param companyDetails $companyDetails
     * @param BusinessNameDetailType $identicalBusinessNamesOwned
     * @param trueType $willRequestManualDetermination
     * @param amountType $calculatedFee
     */
    public function __construct($reservedName = null, $fees = null, $lodgementStatus = null, $statusReason = null, $asicTransactionNumber = null, $companyDetails = null, $identicalBusinessNamesOwned = null, $willRequestManualDetermination = null, $calculatedFee = null)
    {
      $this->reservedName = $reservedName;
      $this->fees = $fees;
      $this->lodgementStatus = $lodgementStatus;
      $this->statusReason = $statusReason;
      $this->asicTransactionNumber = $asicTransactionNumber;

      $this->companyDetails = $companyDetails;
      $this->identicalBusinessNamesOwned = $identicalBusinessNamesOwned;
      $this->willRequestManualDetermination = $willRequestManualDetermination;
      $this->calculatedFee = $calculatedFee;
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
     * @return \App\Asic\reservation
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
     * @return \App\Asic\reservation
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
     * @return \App\Asic\reservation
     */
    public function setLodgementStatus($lodgementStatus)
    {
      $this->lodgementStatus = $lodgementStatus;
      return $this;
    }

    /**
     * @return statusReason
     */
    public function getStatusReason()
    {
      return $this->statusReason;
    }

    /**
     * @param statusReason $statusReason
     * @return \App\Asic\reservation
     */
    public function setStatusReason($statusReason)
    {
      $this->statusReason = $statusReason;
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
     * @return \App\Asic\reservation
     */
    public function setAsicTransactionNumber($asicTransactionNumber)
    {
      $this->asicTransactionNumber = $asicTransactionNumber;
      return $this;
    }

    /**
     * @return companyDetails
     */
    public function getCompanyDetails()
    {
      return $this->companyDetails;
    }

    /**
     * @param companyDetails $companyDetails
     * @return \App\Asic\reservation
     */
    public function setCompanyDetails($companyDetails)
    {
      $this->companyDetails = $companyDetails;
      return $this;
    }

    /**
     * @return BusinessNameDetailType
     */
    public function getIdenticalBusinessNamesOwned()
    {
      return $this->identicalBusinessNamesOwned;
    }

    /**
     * @param BusinessNameDetailType $identicalBusinessNamesOwned
     * @return \App\Asic\reservation
     */
    public function setIdenticalBusinessNamesOwned($identicalBusinessNamesOwned)
    {
      $this->identicalBusinessNamesOwned = $identicalBusinessNamesOwned;
      return $this;
    }

    /**
     * @return trueType
     */
    public function getWillRequestManualDetermination()
    {
      return $this->willRequestManualDetermination;
    }

    /**
     * @param trueType $willRequestManualDetermination
     * @return \App\Asic\reservation
     */
    public function setWillRequestManualDetermination($willRequestManualDetermination)
    {
      $this->willRequestManualDetermination = $willRequestManualDetermination;
      return $this;
    }

    /**
     * @return amountType
     */
    public function getCalculatedFee()
    {
      return $this->calculatedFee;
    }

    /**
     * @param amountType $calculatedFee
     * @return \App\Asic\reservation
     */
    public function setCalculatedFee($calculatedFee)
    {
      $this->calculatedFee = $calculatedFee;
      return $this;
    }

}
