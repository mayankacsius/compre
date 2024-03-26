<?php

namespace App\Asic;

class item
{

    /**
     * @var description $description
     */
    protected $description = null;

    /**
     * @var amountType $amount
     */
    protected $amount = null;

    /**
     * @var taxCode $taxCode
     */
    protected $taxCode = null;

    /**
     * @var amountType $taxAmount
     */
    protected $taxAmount = null;

    /**
     * @var referenceNo $referenceNo
     */
    protected $referenceNo = null;

    /**
     * @param description $description
     * @param amountType $amount
     * @param taxCode $taxCode
     * @param amountType $taxAmount
     * @param referenceNo $referenceNo
     */
    public function __construct($description, $amount, $taxCode, $taxAmount, $referenceNo)
    {
      $this->description = $description;
      $this->amount = $amount;
      $this->taxCode = $taxCode;
      $this->taxAmount = $taxAmount;
      $this->referenceNo = $referenceNo;
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
     * @return \App\Asic\item
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return amountType
     */
    public function getAmount()
    {
      return $this->amount;
    }

    /**
     * @param amountType $amount
     * @return \App\Asic\item
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

    /**
     * @return taxCode
     */
    public function getTaxCode()
    {
      return $this->taxCode;
    }

    /**
     * @param taxCode $taxCode
     * @return \App\Asic\item
     */
    public function setTaxCode($taxCode)
    {
      $this->taxCode = $taxCode;
      return $this;
    }

    /**
     * @return amountType
     */
    public function getTaxAmount()
    {
      return $this->taxAmount;
    }

    /**
     * @param amountType $taxAmount
     * @return \App\Asic\item
     */
    public function setTaxAmount($taxAmount)
    {
      $this->taxAmount = $taxAmount;
      return $this;
    }

    /**
     * @return referenceNo
     */
    public function getReferenceNo()
    {
      return $this->referenceNo;
    }

    /**
     * @param referenceNo $referenceNo
     * @return \App\Asic\item
     */
    public function setReferenceNo($referenceNo)
    {
      $this->referenceNo = $referenceNo;
      return $this;
    }

}
