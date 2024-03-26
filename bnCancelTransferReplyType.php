<?php

namespace App\Asic;

class bnCancelTransferReplyType
{

    /**
     * @var nniNumberType $bnNumber
     */
    protected $bnNumber = null;

    /**
     * @var boolean $isTransfer
     */
    protected $isTransfer = null;

    /**
     * @var string $transferKey
     */
    protected $transferKey = null;

    /**
     * @param nniNumberType $bnNumber
     * @param boolean $isTransfer
     */
    public function __construct($bnNumber, $isTransfer)
    {
      $this->bnNumber = $bnNumber;
      $this->isTransfer = $isTransfer;
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
     * @return \App\Asic\bnCancelTransferReplyType
     */
    public function setBnNumber($bnNumber)
    {
      $this->bnNumber = $bnNumber;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTransfer()
    {
      return $this->isTransfer;
    }

    /**
     * @param boolean $isTransfer
     * @return \App\Asic\bnCancelTransferReplyType
     */
    public function setIsTransfer($isTransfer)
    {
      $this->isTransfer = $isTransfer;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransferKey()
    {
      return $this->transferKey;
    }

    /**
     * @param string $transferKey
     * @return \App\Asic\bnCancelTransferReplyType
     */
    public function setTransferKey($transferKey)
    {
      $this->transferKey = $transferKey;
      return $this;
    }

}
