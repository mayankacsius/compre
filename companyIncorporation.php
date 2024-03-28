<?php

namespace App\Asic;

class companyIncorporation
{

    /**
     * @var nniNameType $companyName
     */
    protected $companyName = null;

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
     * @var nniNumberType $ACN
     */
    protected $ACN = null;

    /**
     * @var abnType $ABN
     */
    protected $ABN = null;

    /**
     * @var certificateURL $certificateURL
     */
    protected $certificateURL = null;

    /**
     * @param nniNameType $companyName
     * @param feeType $fees
     * @param lodgementStatus $lodgementStatus
     * @param statusReason $statusReason
     * @param asicTransactionNumber $asicTransactionNumber
     * @param nniNumberType $ACN
     * @param abnType $ABN
     * @param certificateURL $certificateURL
     */
    public function __construct($companyName, $fees, $lodgementStatus, $statusReason, $asicTransactionNumber, $ACN, $ABN, $certificateURL)
    {
      $this->companyName = $companyName;
      $this->fees = $fees;
      $this->lodgementStatus = $lodgementStatus;
      $this->statusReason = $statusReason;
      $this->asicTransactionNumber = $asicTransactionNumber;
      $this->ACN = $ACN;
      $this->ABN = $ABN;
      $this->certificateURL = $certificateURL;
    }

    /**
     * @return nniNameType
     */
    public function getCompanyName()
    {
      return $this->companyName;
    }

    /**
     * @param nniNameType $companyName
     * @return \App\Asic\companyIncorporation
     */
    public function setCompanyName($companyName)
    {
      $this->companyName = $companyName;
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
     * @return \App\Asic\companyIncorporation
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
     * @return \App\Asic\companyIncorporation
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
     * @return \App\Asic\companyIncorporation
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
     * @return \App\Asic\companyIncorporation
     */
    public function setAsicTransactionNumber($asicTransactionNumber)
    {
      $this->asicTransactionNumber = $asicTransactionNumber;
      return $this;
    }

    /**
     * @return nniNumberType
     */
    public function getACN()
    {
      return $this->ACN;
    }

    /**
     * @param nniNumberType $ACN
     * @return \App\Asic\companyIncorporation
     */
    public function setACN($ACN)
    {
      $this->ACN = $ACN;
      return $this;
    }

    /**
     * @return abnType
     */
    public function getABN()
    {
      return $this->ABN;
    }

    /**
     * @param abnType $ABN
     * @return \App\Asic\companyIncorporation
     */
    public function setABN($ABN)
    {
      $this->ABN = $ABN;
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
     * @return \App\Asic\companyIncorporation
     */
    public function setCertificateURL($certificateURL)
    {
      $this->certificateURL = $certificateURL;
      return $this;
    }

}
