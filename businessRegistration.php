<?php

namespace App\Asic;

class businessRegistration
{

    /**
     * @var nniNameType $businessName
     */
    protected $businessName = null;

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
     * @var certificateURL $certificateURL
     */
    protected $certificateURL = null;

    /**
     * @var businessNameDetails $businessNameDetails
     */
    protected $businessNameDetails = null;

    /**
     * @var proprietor $proprietor
     */
    protected $proprietor = null;

    /**
     * @var amountType $calculatedFee
     */
    protected $calculatedFee = null;

    /**
     * @param nniNameType $businessName
     * @param feeType $fees
     * @param lodgementStatus $lodgementStatus
     * @param statusReason $statusReason
     * @param asicTransactionNumber $asicTransactionNumber
     * @param certificateURL $certificateURL
     * @param businessNameDetails $businessNameDetails
     * @param proprietor $proprietor
     * @param amountType $calculatedFee
     */
    public function __construct($businessName = null, $fees = null, $lodgementStatus = null, $statusReason = null, $asicTransactionNumber = null, $certificateURL = null, $businessNameDetails = null, $proprietor = null, $calculatedFee = null)
    {
      $this->businessName = $businessName;
      $this->fees = $fees;
      $this->lodgementStatus = $lodgementStatus;
      $this->statusReason = $statusReason;
      $this->asicTransactionNumber = $asicTransactionNumber;
      $this->certificateURL = $certificateURL;

      $this->businessNameDetails = $businessNameDetails;
      $this->proprietor = $proprietor;
      $this->calculatedFee = $calculatedFee;
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
     * @return \App\Asic\businessRegistration
     */
    public function setBusinessName($businessName)
    {
      $this->businessName = $businessName;
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
     * @return \App\Asic\businessRegistration
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
     * @return \App\Asic\businessRegistration
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
     * @return \App\Asic\businessRegistration
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
     * @return \App\Asic\businessRegistration
     */
    public function setAsicTransactionNumber($asicTransactionNumber)
    {
      $this->asicTransactionNumber = $asicTransactionNumber;
      return $this;
    }

    /**
     * @return certificateURL
     */
    public function getCertificateURL()
    {
      return $this->certificateURL;
    }

    /**
     * @param certificateURL $certificateURL
     * @return \App\Asic\businessRegistration
     */
    public function setCertificateURL($certificateURL)
    {
      $this->certificateURL = $certificateURL;
      return $this;
    }

    /**
     * @return businessNameDetails
     */
    public function getBusinessNameDetails()
    {
      return $this->businessNameDetails;
    }

    /**
     * @param businessNameDetails $businessNameDetails
     * @return \App\Asic\businessRegistration
     */
    public function setBusinessNameDetails($businessNameDetails)
    {
      $this->businessNameDetails = $businessNameDetails;
      return $this;
    }

    /**
     * @return proprietor
     */
    public function getProprietor()
    {
      return $this->proprietor;
    }

    /**
     * @param proprietor $proprietor
     * @return \App\Asic\businessRegistration
     */
    public function setProprietor($proprietor)
    {
      $this->proprietor = $proprietor;
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
     * @return \App\Asic\businessRegistration
     */
    public function setCalculatedFee($calculatedFee)
    {
      $this->calculatedFee = $calculatedFee;
      return $this;
    }

}
