<?php

namespace App\Asic;

class asicPaymentDetails
{

    /**
     * @var abnType $abn
     */
    protected $abn = null;

    /**
     * @var titleForPayment $titleForPayment
     */
    protected $titleForPayment = null;

    /**
     * @var addressForPayment $addressForPayment
     */
    protected $addressForPayment = null;

    /**
     * @var phoneForQueries $phoneForQueries
     */
    protected $phoneForQueries = null;

    /**
     * @var barcode $barcode
     */
    protected $barcode = null;

    /**
     * @var bpay $bpay
     */
    protected $bpay = null;

    /**
     * @var postBillpay $postBillpay
     */
    protected $postBillpay = null;

    /**
     * @var int $eftReferenceNumber
     */
    protected $eftReferenceNumber = null;

    /**
     * @param abnType $abn
     * @param titleForPayment $titleForPayment
     * @param addressForPayment $addressForPayment
     * @param phoneForQueries $phoneForQueries
     * @param barcode $barcode
     * @param bpay $bpay
     * @param postBillpay $postBillpay
     * @param int $eftReferenceNumber
     */
    public function __construct($abn, $titleForPayment, $addressForPayment, $phoneForQueries, $barcode, $bpay, $postBillpay, $eftReferenceNumber)
    {
      $this->abn = $abn;
      $this->titleForPayment = $titleForPayment;
      $this->addressForPayment = $addressForPayment;
      $this->phoneForQueries = $phoneForQueries;
      $this->barcode = $barcode;
      $this->bpay = $bpay;
      $this->postBillpay = $postBillpay;
      $this->eftReferenceNumber = $eftReferenceNumber;
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
     * @return \App\Asic\asicPaymentDetails
     */
    public function setAbn($abn)
    {
      $this->abn = $abn;
      return $this;
    }

    /**
     * @return titleForPayment
     */
    public function getTitleForPayment()
    {
      return $this->titleForPayment;
    }

    /**
     * @param titleForPayment $titleForPayment
     * @return \App\Asic\asicPaymentDetails
     */
    public function setTitleForPayment($titleForPayment)
    {
      $this->titleForPayment = $titleForPayment;
      return $this;
    }

    /**
     * @return addressForPayment
     */
    public function getAddressForPayment()
    {
      return $this->addressForPayment;
    }

    /**
     * @param addressForPayment $addressForPayment
     * @return \App\Asic\asicPaymentDetails
     */
    public function setAddressForPayment($addressForPayment)
    {
      $this->addressForPayment = $addressForPayment;
      return $this;
    }

    /**
     * @return phoneForQueries
     */
    public function getPhoneForQueries()
    {
      return $this->phoneForQueries;
    }

    /**
     * @param phoneForQueries $phoneForQueries
     * @return \App\Asic\asicPaymentDetails
     */
    public function setPhoneForQueries($phoneForQueries)
    {
      $this->phoneForQueries = $phoneForQueries;
      return $this;
    }

    /**
     * @return barcode
     */
    public function getBarcode()
    {
      return $this->barcode;
    }

    /**
     * @param barcode $barcode
     * @return \App\Asic\asicPaymentDetails
     */
    public function setBarcode($barcode)
    {
      $this->barcode = $barcode;
      return $this;
    }

    /**
     * @return bpay
     */
    public function getBpay()
    {
      return $this->bpay;
    }

    /**
     * @param bpay $bpay
     * @return \App\Asic\asicPaymentDetails
     */
    public function setBpay($bpay)
    {
      $this->bpay = $bpay;
      return $this;
    }

    /**
     * @return postBillpay
     */
    public function getPostBillpay()
    {
      return $this->postBillpay;
    }

    /**
     * @param postBillpay $postBillpay
     * @return \App\Asic\asicPaymentDetails
     */
    public function setPostBillpay($postBillpay)
    {
      $this->postBillpay = $postBillpay;
      return $this;
    }

    /**
     * @return int
     */
    public function getEftReferenceNumber()
    {
      return $this->eftReferenceNumber;
    }

    /**
     * @param int $eftReferenceNumber
     * @return \App\Asic\asicPaymentDetails
     */
    public function setEftReferenceNumber($eftReferenceNumber)
    {
      $this->eftReferenceNumber = $eftReferenceNumber;
      return $this;
    }

}
