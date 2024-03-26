<?php

namespace App\Asic;

class bnCancelFormType
{

    /**
     * @var bnIdentifier $businessName
     */
    protected $businessName = null;

    /**
     * @var boolean $transfer
     */
    protected $transfer = null;

    /**
     * @var signatoryType $signatory
     */
    protected $signatory = null;

    /**
     * @var fileNotesType $fileNotes
     */
    protected $fileNotes = null;

    /**
     * @var trueType $returnExtract
     */
    protected $returnExtract = null;

    /**
     * @param bnIdentifier $businessName
     */
    public function __construct($businessName)
    {
      $this->businessName = $businessName;
    }

    /**
     * @return bnIdentifier
     */
    public function getBusinessName()
    {
      return $this->businessName;
    }

    /**
     * @param bnIdentifier $businessName
     * @return \App\Asic\bnCancelFormType
     */
    public function setBusinessName($businessName)
    {
      $this->businessName = $businessName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTransfer()
    {
      return $this->transfer;
    }

    /**
     * @param boolean $transfer
     * @return \App\Asic\bnCancelFormType
     */
    public function setTransfer($transfer)
    {
      $this->transfer = $transfer;
      return $this;
    }

    /**
     * @return signatoryType
     */
    public function getSignatory()
    {
      return $this->signatory;
    }

    /**
     * @param signatoryType $signatory
     * @return \App\Asic\bnCancelFormType
     */
    public function setSignatory($signatory)
    {
      $this->signatory = $signatory;
      return $this;
    }

    /**
     * @return fileNotesType
     */
    public function getFileNotes()
    {
      return $this->fileNotes;
    }

    /**
     * @param fileNotesType $fileNotes
     * @return \App\Asic\bnCancelFormType
     */
    public function setFileNotes($fileNotes)
    {
      $this->fileNotes = $fileNotes;
      return $this;
    }

    /**
     * @return trueType
     */
    public function getReturnExtract()
    {
      return $this->returnExtract;
    }

    /**
     * @param trueType $returnExtract
     * @return \App\Asic\bnCancelFormType
     */
    public function setReturnExtract($returnExtract)
    {
      $this->returnExtract = $returnExtract;
      return $this;
    }

}
