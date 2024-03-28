<?php

namespace App\Asic;

class ShareStructureType
{

    /**
     * @var shareClassCode $shareClassCode
     */
    protected $shareClassCode = null;

    /**
     * @var shareFullTitle $shareFullTitle
     */
    protected $shareFullTitle = null;

    /**
     * @var countSharesIssued $countSharesIssued
     */
    protected $countSharesIssued = null;

    /**
     * @var amountType $totalAmountPaid
     */
    protected $totalAmountPaid = null;

    /**
     * @var amountType $totalAmountUnpaid
     */
    protected $totalAmountUnpaid = null;

    /**
     * @param shareClassCode $shareClassCode
     * @param shareFullTitle $shareFullTitle
     * @param countSharesIssued $countSharesIssued
     * @param amountType $totalAmountPaid
     * @param amountType $totalAmountUnpaid
     */
    public function __construct($shareClassCode, $shareFullTitle, $countSharesIssued, $totalAmountPaid, $totalAmountUnpaid)
    {
      $this->shareClassCode = $shareClassCode;
      $this->shareFullTitle = $shareFullTitle;
      $this->countSharesIssued = $countSharesIssued;
      $this->totalAmountPaid = $totalAmountPaid;
      $this->totalAmountUnpaid = $totalAmountUnpaid;
    }

    /**
     * @return shareClassCode
     */
    public function getShareClassCode()
    {
      return $this->shareClassCode;
    }

    /**
     * @param shareClassCode $shareClassCode
     * @return \App\Asic\ShareStructureType
     */
    public function setShareClassCode($shareClassCode)
    {
      $this->shareClassCode = $shareClassCode;
      return $this;
    }

    /**
     * @return shareFullTitle
     */
    public function getShareFullTitle()
    {
      return $this->shareFullTitle;
    }

    /**
     * @param shareFullTitle $shareFullTitle
     * @return \App\Asic\ShareStructureType
     */
    public function setShareFullTitle($shareFullTitle)
    {
      $this->shareFullTitle = $shareFullTitle;
      return $this;
    }

    /**
     * @return countSharesIssued
     */
    public function getCountSharesIssued()
    {
      return $this->countSharesIssued;
    }

    /**
     * @param countSharesIssued $countSharesIssued
     * @return \App\Asic\ShareStructureType
     */
    public function setCountSharesIssued($countSharesIssued)
    {
      $this->countSharesIssued = $countSharesIssued;
      return $this;
    }

    /**
     * @return amountType
     */
    public function getTotalAmountPaid()
    {
      return $this->totalAmountPaid;
    }

    /**
     * @param amountType $totalAmountPaid
     * @return \App\Asic\ShareStructureType
     */
    public function setTotalAmountPaid($totalAmountPaid)
    {
      $this->totalAmountPaid = $totalAmountPaid;
      return $this;
    }

    /**
     * @return amountType
     */
    public function getTotalAmountUnpaid()
    {
      return $this->totalAmountUnpaid;
    }

    /**
     * @param amountType $totalAmountUnpaid
     * @return \App\Asic\ShareStructureType
     */
    public function setTotalAmountUnpaid($totalAmountUnpaid)
    {
      $this->totalAmountUnpaid = $totalAmountUnpaid;
      return $this;
    }

}
