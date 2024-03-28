<?php

namespace App\Asic;

class SharesDetailType extends ShareStructureType
{

    /**
     * @var shareStructure[] $shareStructure
     */
    protected $shareStructure = null;

    /**
     * @var boolean $isSharesIssuedForNonCashConsideration
     */
    protected $isSharesIssuedForNonCashConsideration = null;

    /**
     * @param shareClassCode $shareClassCode
     * @param shareFullTitle $shareFullTitle
     * @param countSharesIssued $countSharesIssued
     * @param amountType $totalAmountPaid
     * @param amountType $totalAmountUnpaid
     */
    public function __construct($shareClassCode, $shareFullTitle, $countSharesIssued, $totalAmountPaid, $totalAmountUnpaid)
    {
      parent::__construct($shareClassCode, $shareFullTitle, $countSharesIssued, $totalAmountPaid, $totalAmountUnpaid);
    }

    /**
     * @return shareStructure[]
     */
    public function getShareStructure()
    {
      return $this->shareStructure;
    }

    /**
     * @param shareStructure[] $shareStructure
     * @return \App\Asic\SharesDetailType
     */
    public function setShareStructure(array $shareStructure = null)
    {
      $this->shareStructure = $shareStructure;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSharesIssuedForNonCashConsideration()
    {
      return $this->isSharesIssuedForNonCashConsideration;
    }

    /**
     * @param boolean $isSharesIssuedForNonCashConsideration
     * @return \App\Asic\SharesDetailType
     */
    public function setIsSharesIssuedForNonCashConsideration($isSharesIssuedForNonCashConsideration)
    {
      $this->isSharesIssuedForNonCashConsideration = $isSharesIssuedForNonCashConsideration;
      return $this;
    }

}
