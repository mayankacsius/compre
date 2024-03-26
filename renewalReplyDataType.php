<?php

namespace App\Asic;

class renewalReplyDataType
{

    /**
     * @var nniNumberType $bnNumber
     */
    protected $bnNumber = null;

    /**
     * @var renewalResultType $renewalResult
     */
    protected $renewalResult = null;

    /**
     * @param nniNumberType $bnNumber
     * @param renewalResultType $renewalResult
     */
    public function __construct($bnNumber, $renewalResult)
    {
      $this->bnNumber = $bnNumber;
      $this->renewalResult = $renewalResult;
    }

    /**
     * @return nniNumberType
     */
    public function getBnNumber()
    {
      return $this->bnNumber;
    }

    /**
     * @param nniNumberType $bnNumber
     * @return \App\Asic\renewalReplyDataType
     */
    public function setBnNumber($bnNumber)
    {
      $this->bnNumber = $bnNumber;
      return $this;
    }

    /**
     * @return renewalResultType
     */
    public function getRenewalResult()
    {
      return $this->renewalResult;
    }

    /**
     * @param renewalResultType $renewalResult
     * @return \App\Asic\renewalReplyDataType
     */
    public function setRenewalResult($renewalResult)
    {
      $this->renewalResult = $renewalResult;
      return $this;
    }

}
