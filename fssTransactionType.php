<?php

namespace App\Asic;

class fssTransactionType
{

    /**
     * @var date $dueDate
     */
    protected $dueDate = null;

    /**
     * @var type $type
     */
    protected $type = null;

    /**
     * @var description $description
     */
    protected $description = null;

    /**
     * @var referenceId $referenceId
     */
    protected $referenceId = null;

    /**
     * @var allocationReference $allocationReference
     */
    protected $allocationReference = null;

    /**
     * @var amountType $originalAmount
     */
    protected $originalAmount = null;

    /**
     * @var amountType $outstandingAmount
     */
    protected $outstandingAmount = null;

    /**
     * @param date $dueDate
     * @param type $type
     * @param description $description
     * @param referenceId $referenceId
     * @param amountType $originalAmount
     * @param amountType $outstandingAmount
     */
    public function __construct($dueDate, $type, $description, $referenceId, $originalAmount, $outstandingAmount)
    {
      $this->dueDate = $dueDate;
      $this->type = $type;
      $this->description = $description;
      $this->referenceId = $referenceId;
      $this->originalAmount = $originalAmount;
      $this->outstandingAmount = $outstandingAmount;
    }

    /**
     * @return date
     */
    public function getDueDate()
    {
      return $this->dueDate;
    }

    /**
     * @param date $dueDate
     * @return \App\Asic\fssTransactionType
     */
    public function setDueDate($dueDate)
    {
      $this->dueDate = $dueDate;
      return $this;
    }

    /**
     * @return type
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param type $type
     * @return \App\Asic\fssTransactionType
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return description
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param description $description
     * @return \App\Asic\fssTransactionType
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return referenceId
     */
    public function getReferenceId()
    {
      return $this->referenceId;
    }

    /**
     * @param referenceId $referenceId
     * @return \App\Asic\fssTransactionType
     */
    public function setReferenceId($referenceId)
    {
      $this->referenceId = $referenceId;
      return $this;
    }

    /**
     * @return allocationReference
     */
    public function getAllocationReference()
    {
      return $this->allocationReference;
    }

    /**
     * @param allocationReference $allocationReference
     * @return \App\Asic\fssTransactionType
     */
    public function setAllocationReference($allocationReference)
    {
      $this->allocationReference = $allocationReference;
      return $this;
    }

    /**
     * @return amountType
     */
    public function getOriginalAmount()
    {
      return $this->originalAmount;
    }

    /**
     * @param amountType $originalAmount
     * @return \App\Asic\fssTransactionType
     */
    public function setOriginalAmount($originalAmount)
    {
      $this->originalAmount = $originalAmount;
      return $this;
    }

    /**
     * @return amountType
     */
    public function getOutstandingAmount()
    {
      return $this->outstandingAmount;
    }

    /**
     * @param amountType $outstandingAmount
     * @return \App\Asic\fssTransactionType
     */
    public function setOutstandingAmount($outstandingAmount)
    {
      $this->outstandingAmount = $outstandingAmount;
      return $this;
    }

}
