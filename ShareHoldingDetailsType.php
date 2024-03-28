<?php

namespace App\Asic;

class ShareHoldingDetailsType
{

    /**
     * @var agreedHoldingNumber $agreedHoldingNumber
     */
    protected $agreedHoldingNumber = null;

    /**
     * @var boolean $isShareFullyPaid
     */
    protected $isShareFullyPaid = null;

    /**
     * @var boolean $isMemberBeneficialOwner
     */
    protected $isMemberBeneficialOwner = null;

    /**
     * @var amountType $totalAmountPaidOrOwing
     */
    protected $totalAmountPaidOrOwing = null;

    /**
     * @var amountType $totalAmountUnpaid
     */
    protected $totalAmountUnpaid = null;

    /**
     * @var amountType $amountPaidPerShare
     */
    protected $amountPaidPerShare = null;

    /**
     * @var amountType $amountDuePerShare
     */
    protected $amountDuePerShare = null;

    /**
     * @var members $members
     */
    protected $members = null;

    /**
     * @param agreedHoldingNumber $agreedHoldingNumber
     * @param boolean $isShareFullyPaid
     * @param boolean $isMemberBeneficialOwner
     * @param amountType $totalAmountPaidOrOwing
     * @param amountType $totalAmountUnpaid
     * @param amountType $amountPaidPerShare
     * @param amountType $amountDuePerShare
     * @param members $members
     */
    public function __construct($agreedHoldingNumber, $isShareFullyPaid, $isMemberBeneficialOwner, $totalAmountPaidOrOwing, $totalAmountUnpaid, $amountPaidPerShare, $amountDuePerShare, $members)
    {
      $this->agreedHoldingNumber = $agreedHoldingNumber;
      $this->isShareFullyPaid = $isShareFullyPaid;
      $this->isMemberBeneficialOwner = $isMemberBeneficialOwner;
      $this->totalAmountPaidOrOwing = $totalAmountPaidOrOwing;
      $this->totalAmountUnpaid = $totalAmountUnpaid;
      $this->amountPaidPerShare = $amountPaidPerShare;
      $this->amountDuePerShare = $amountDuePerShare;
      $this->members = $members;
    }

    /**
     * @return agreedHoldingNumber
     */
    public function getAgreedHoldingNumber()
    {
      return $this->agreedHoldingNumber;
    }

    /**
     * @param agreedHoldingNumber $agreedHoldingNumber
     * @return \App\Asic\ShareHoldingDetailsType
     */
    public function setAgreedHoldingNumber($agreedHoldingNumber)
    {
      $this->agreedHoldingNumber = $agreedHoldingNumber;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsShareFullyPaid()
    {
      return $this->isShareFullyPaid;
    }

    /**
     * @param boolean $isShareFullyPaid
     * @return \App\Asic\ShareHoldingDetailsType
     */
    public function setIsShareFullyPaid($isShareFullyPaid)
    {
      $this->isShareFullyPaid = $isShareFullyPaid;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsMemberBeneficialOwner()
    {
      return $this->isMemberBeneficialOwner;
    }

    /**
     * @param boolean $isMemberBeneficialOwner
     * @return \App\Asic\ShareHoldingDetailsType
     */
    public function setIsMemberBeneficialOwner($isMemberBeneficialOwner)
    {
      $this->isMemberBeneficialOwner = $isMemberBeneficialOwner;
      return $this;
    }

    /**
     * @return amountType
     */
    public function getTotalAmountPaidOrOwing()
    {
      return $this->totalAmountPaidOrOwing;
    }

    /**
     * @param amountType $totalAmountPaidOrOwing
     * @return \App\Asic\ShareHoldingDetailsType
     */
    public function setTotalAmountPaidOrOwing($totalAmountPaidOrOwing)
    {
      $this->totalAmountPaidOrOwing = $totalAmountPaidOrOwing;
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
     * @return \App\Asic\ShareHoldingDetailsType
     */
    public function setTotalAmountUnpaid($totalAmountUnpaid)
    {
      $this->totalAmountUnpaid = $totalAmountUnpaid;
      return $this;
    }

    /**
     * @return amountType
     */
    public function getAmountPaidPerShare()
    {
      return $this->amountPaidPerShare;
    }

    /**
     * @param amountType $amountPaidPerShare
     * @return \App\Asic\ShareHoldingDetailsType
     */
    public function setAmountPaidPerShare($amountPaidPerShare)
    {
      $this->amountPaidPerShare = $amountPaidPerShare;
      return $this;
    }

    /**
     * @return amountType
     */
    public function getAmountDuePerShare()
    {
      return $this->amountDuePerShare;
    }

    /**
     * @param amountType $amountDuePerShare
     * @return \App\Asic\ShareHoldingDetailsType
     */
    public function setAmountDuePerShare($amountDuePerShare)
    {
      $this->amountDuePerShare = $amountDuePerShare;
      return $this;
    }

    /**
     * @return members
     */
    public function getMembers()
    {
      return $this->members;
    }

    /**
     * @param members $members
     * @return \App\Asic\ShareHoldingDetailsType
     */
    public function setMembers($members)
    {
      $this->members = $members;
      return $this;
    }

}
