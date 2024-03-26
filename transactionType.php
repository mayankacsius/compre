<?php

namespace App\Asic;

class transactionType
{

    /**
     * @var fssAccountType $reportingParty
     */
    protected $reportingParty = null;

    /**
     * @var date $date
     */
    protected $date = null;

    /**
     * @var code $code
     */
    protected $code = null;

    /**
     * @var descriptionLine1 $descriptionLine1
     */
    protected $descriptionLine1 = null;

    /**
     * @var descriptionLine2 $descriptionLine2
     */
    protected $descriptionLine2 = null;

    /**
     * @var reference $reference
     */
    protected $reference = null;

    /**
     * @var amountType $amount
     */
    protected $amount = null;

    /**
     * @param fssAccountType $reportingParty
     * @param date $date
     * @param descriptionLine1 $descriptionLine1
     * @param reference $reference
     * @param amountType $amount
     */
    public function __construct($reportingParty, $date, $descriptionLine1, $reference, $amount)
    {
      $this->reportingParty = $reportingParty;
      $this->date = $date;
      $this->descriptionLine1 = $descriptionLine1;
      $this->reference = $reference;
      $this->amount = $amount;
    }

    /**
     * @return fssAccountType
     */
    public function getReportingParty()
    {
      return $this->reportingParty;
    }

    /**
     * @param fssAccountType $reportingParty
     * @return \App\Asic\transactionType
     */
    public function setReportingParty($reportingParty)
    {
      $this->reportingParty = $reportingParty;
      return $this;
    }

    /**
     * @return date
     */
    public function getDate()
    {
      return $this->date;
    }

    /**
     * @param date $date
     * @return \App\Asic\transactionType
     */
    public function setDate($date)
    {
      $this->date = $date;
      return $this;
    }

    /**
     * @return code
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param code $code
     * @return \App\Asic\transactionType
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return descriptionLine1
     */
    public function getDescriptionLine1()
    {
      return $this->descriptionLine1;
    }

    /**
     * @param descriptionLine1 $descriptionLine1
     * @return \App\Asic\transactionType
     */
    public function setDescriptionLine1($descriptionLine1)
    {
      $this->descriptionLine1 = $descriptionLine1;
      return $this;
    }

    /**
     * @return descriptionLine2
     */
    public function getDescriptionLine2()
    {
      return $this->descriptionLine2;
    }

    /**
     * @param descriptionLine2 $descriptionLine2
     * @return \App\Asic\transactionType
     */
    public function setDescriptionLine2($descriptionLine2)
    {
      $this->descriptionLine2 = $descriptionLine2;
      return $this;
    }

    /**
     * @return reference
     */
    public function getReference()
    {
      return $this->reference;
    }

    /**
     * @param reference $reference
     * @return \App\Asic\transactionType
     */
    public function setReference($reference)
    {
      $this->reference = $reference;
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
     * @return \App\Asic\transactionType
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

}
