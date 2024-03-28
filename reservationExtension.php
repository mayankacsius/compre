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
     * @var nniNameType $proposedCompanyName
     */
    protected $proposedCompanyName = null;

    /**
     * @var documentNoType $reservationDocumentNumber
     */
    protected $reservationDocumentNumber = null;

    /**
     * @var amountType $calculatedFee
     */
    protected $calculatedFee = null;

    /**
     * @param nniNameType $reservedName
     * @param feeType $fees
     * @param lodgementStatus $lodgementStatus
     * @param asicTransactionNumber $asicTransactionNumber
     * @param nniNameType $proposedCompanyName
     * @param documentNoType $reservationDocumentNumber
     * @param amountType $calculatedFee
     */
    public function __construct($reservedName = null, $fees = null, $lodgementStatus = null, $asicTransactionNumber = null, $proposedCompanyName = null, $reservationDocumentNumber = null, $calculatedFee = null)
    {
      $this->reservedName = $reservedName;
      $this->fees = $fees;
      $this->lodgementStatus = $lodgementStatus;
      $this->asicTransactionNumber = $asicTransactionNumber;

      $this->proposedCompanyName = $proposedCompanyName;
      $this->reservationDocumentNumber = $reservationDocumentNumber;
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

    /**
     * @return nniNameType
     */
    public function getProposedCompanyName()
    {
      return $this->proposedCompanyName;
    }

    /**
     * @param nniNameType $proposedCompanyName
     * @return \App\Asic\reservationExtension
     */
    public function setProposedCompanyName($proposedCompanyName)
    {
      $this->proposedCompanyName = $proposedCompanyName;
      return $this;
    }

    /**
     * @return documentNoType
     */
    public function getReservationDocumentNumber()
    {
      return $this->reservationDocumentNumber;
    }

    /**
     * @param documentNoType $reservationDocumentNumber
     * @return \App\Asic\reservationExtension
     */
    public function setReservationDocumentNumber($reservationDocumentNumber)
    {
      $this->reservationDocumentNumber = $reservationDocumentNumber;
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
     * @return \App\Asic\reservationExtension
     */
    public function setCalculatedFee($calculatedFee)
    {
      $this->calculatedFee = $calculatedFee;
      return $this;
    }

}
