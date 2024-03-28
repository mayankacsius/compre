<?php

namespace App\Asic;

class companyRegistration
{

    /**
     * @var companyDetails $companyDetails
     */
    protected $companyDetails = null;

    /**
     * @var BusinessNameDetailType $identicalBusinessNamesOwned
     */
    protected $identicalBusinessNamesOwned = null;

    /**
     * @var reservationDetails $reservationDetails
     */
    protected $reservationDetails = null;

    /**
     * @var manualReview $manualReview
     */
    protected $manualReview = null;

    /**
     * @var amountType $calculatedFee
     */
    protected $calculatedFee = null;

    /**
     * @param companyDetails $companyDetails
     * @param BusinessNameDetailType $identicalBusinessNamesOwned
     * @param reservationDetails $reservationDetails
     * @param manualReview $manualReview
     * @param amountType $calculatedFee
     */
    public function __construct($companyDetails, $identicalBusinessNamesOwned, $reservationDetails, $manualReview, $calculatedFee)
    {
      $this->companyDetails = $companyDetails;
      $this->identicalBusinessNamesOwned = $identicalBusinessNamesOwned;
      $this->reservationDetails = $reservationDetails;
      $this->manualReview = $manualReview;
      $this->calculatedFee = $calculatedFee;
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
     * @return \App\Asic\companyRegistration
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
     * @return \App\Asic\companyRegistration
     */
    public function setIdenticalBusinessNamesOwned($identicalBusinessNamesOwned)
    {
      $this->identicalBusinessNamesOwned = $identicalBusinessNamesOwned;
      return $this;
    }

    /**
     * @return reservationDetails
     */
    public function getReservationDetails()
    {
      return $this->reservationDetails;
    }

    /**
     * @param reservationDetails $reservationDetails
     * @return \App\Asic\companyRegistration
     */
    public function setReservationDetails($reservationDetails)
    {
      $this->reservationDetails = $reservationDetails;
      return $this;
    }

    /**
     * @return manualReview
     */
    public function getManualReview()
    {
      return $this->manualReview;
    }

    /**
     * @param manualReview $manualReview
     * @return \App\Asic\companyRegistration
     */
    public function setManualReview($manualReview)
    {
      $this->manualReview = $manualReview;
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
     * @return \App\Asic\companyRegistration
     */
    public function setCalculatedFee($calculatedFee)
    {
      $this->calculatedFee = $calculatedFee;
      return $this;
    }

}
