<?php

namespace App\Asic;

class lodgement
{

    /**
     * @var ReservationDetailsType $reservationDetail
     */
    protected $reservationDetail = null;

    /**
     * @var applicantDetail $applicantDetail
     */
    protected $applicantDetail = null;

    /**
     * @var ReservationAdministrativeDetailType $administrativeDetail
     */
    protected $administrativeDetail = null;

    /**
     * @var paymentDetail $paymentDetail
     */
    protected $paymentDetail = null;

    /**
     * @var signatoryType $signature
     */
    protected $signature = null;

    /**
     * @param ReservationDetailsType $reservationDetail
     * @param applicantDetail $applicantDetail
     * @param ReservationAdministrativeDetailType $administrativeDetail
     * @param paymentDetail $paymentDetail
     * @param signatoryType $signature
     */
    public function __construct($reservationDetail, $applicantDetail, $administrativeDetail, $paymentDetail, $signature)
    {
      $this->reservationDetail = $reservationDetail;
      $this->applicantDetail = $applicantDetail;
      $this->administrativeDetail = $administrativeDetail;
      $this->paymentDetail = $paymentDetail;
      $this->signature = $signature;
    }

    /**
     * @return ReservationDetailsType
     */
    public function getReservationDetail()
    {
      return $this->reservationDetail;
    }

    /**
     * @param ReservationDetailsType $reservationDetail
     * @return \App\Asic\lodgement
     */
    public function setReservationDetail($reservationDetail)
    {
      $this->reservationDetail = $reservationDetail;
      return $this;
    }

    /**
     * @return applicantDetail
     */
    public function getApplicantDetail()
    {
      return $this->applicantDetail;
    }

    /**
     * @param applicantDetail $applicantDetail
     * @return \App\Asic\lodgement
     */
    public function setApplicantDetail($applicantDetail)
    {
      $this->applicantDetail = $applicantDetail;
      return $this;
    }

    /**
     * @return ReservationAdministrativeDetailType
     */
    public function getAdministrativeDetail()
    {
      return $this->administrativeDetail;
    }

    /**
     * @param ReservationAdministrativeDetailType $administrativeDetail
     * @return \App\Asic\lodgement
     */
    public function setAdministrativeDetail($administrativeDetail)
    {
      $this->administrativeDetail = $administrativeDetail;
      return $this;
    }

    /**
     * @return paymentDetail
     */
    public function getPaymentDetail()
    {
      return $this->paymentDetail;
    }

    /**
     * @param paymentDetail $paymentDetail
     * @return \App\Asic\lodgement
     */
    public function setPaymentDetail($paymentDetail)
    {
      $this->paymentDetail = $paymentDetail;
      return $this;
    }

    /**
     * @return signatoryType
     */
    public function getSignature()
    {
      return $this->signature;
    }

    /**
     * @param signatoryType $signature
     * @return \App\Asic\lodgement
     */
    public function setSignature($signature)
    {
      $this->signature = $signature;
      return $this;
    }

}
