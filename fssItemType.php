<?php

namespace App\Asic;

class fssItemType
{

    /**
     * @var fssAccountType $reportingParty
     */
    protected $reportingParty = null;

    /**
     * @var feeType $fee
     */
    protected $fee = null;

    /**
     * @var date $dateProcessed
     */
    protected $dateProcessed = null;

    /**
     * @var date $dateEffective
     */
    protected $dateEffective = null;

    /**
     * @var date $dateLastEffective
     */
    protected $dateLastEffective = null;

    /**
     * @var boolean $reversalIndicator
     */
    protected $reversalIndicator = null;

    /**
     * @var documentNoType $registryDocumentNumber
     */
    protected $registryDocumentNumber = null;

    /**
     * @var amountType $amount
     */
    protected $amount = null;

    /**
     * @var amountType $taxAmount
     */
    protected $taxAmount = null;

    /**
     * @var taxCode $taxCode
     */
    protected $taxCode = null;

    /**
     * @var channel $channel
     */
    protected $channel = null;

    /**
     * @var quantity $quantity
     */
    protected $quantity = null;

    /**
     * @var suffix $suffix
     */
    protected $suffix = null;

    /**
     * @param feeType $fee
     * @param date $dateProcessed
     * @param date $dateEffective
     * @param channel $channel
     */
    public function __construct($fee, $dateProcessed, $dateEffective, $channel)
    {
      $this->fee = $fee;
      $this->dateProcessed = $dateProcessed;
      $this->dateEffective = $dateEffective;
      $this->channel = $channel;
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
     * @return \App\Asic\fssItemType
     */
    public function setReportingParty($reportingParty)
    {
      $this->reportingParty = $reportingParty;
      return $this;
    }

    /**
     * @return feeType
     */
    public function getFee()
    {
      return $this->fee;
    }

    /**
     * @param feeType $fee
     * @return \App\Asic\fssItemType
     */
    public function setFee($fee)
    {
      $this->fee = $fee;
      return $this;
    }

    /**
     * @return date
     */
    public function getDateProcessed()
    {
      return $this->dateProcessed;
    }

    /**
     * @param date $dateProcessed
     * @return \App\Asic\fssItemType
     */
    public function setDateProcessed($dateProcessed)
    {
      $this->dateProcessed = $dateProcessed;
      return $this;
    }

    /**
     * @return date
     */
    public function getDateEffective()
    {
      return $this->dateEffective;
    }

    /**
     * @param date $dateEffective
     * @return \App\Asic\fssItemType
     */
    public function setDateEffective($dateEffective)
    {
      $this->dateEffective = $dateEffective;
      return $this;
    }

    /**
     * @return date
     */
    public function getDateLastEffective()
    {
      return $this->dateLastEffective;
    }

    /**
     * @param date $dateLastEffective
     * @return \App\Asic\fssItemType
     */
    public function setDateLastEffective($dateLastEffective)
    {
      $this->dateLastEffective = $dateLastEffective;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReversalIndicator()
    {
      return $this->reversalIndicator;
    }

    /**
     * @param boolean $reversalIndicator
     * @return \App\Asic\fssItemType
     */
    public function setReversalIndicator($reversalIndicator)
    {
      $this->reversalIndicator = $reversalIndicator;
      return $this;
    }

    /**
     * @return documentNoType
     */
    public function getRegistryDocumentNumber()
    {
      return $this->registryDocumentNumber;
    }

    /**
     * @param documentNoType $registryDocumentNumber
     * @return \App\Asic\fssItemType
     */
    public function setRegistryDocumentNumber($registryDocumentNumber)
    {
      $this->registryDocumentNumber = $registryDocumentNumber;
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
     * @return \App\Asic\fssItemType
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
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
     * @return \App\Asic\fssItemType
     */
    public function setTaxAmount($taxAmount)
    {
      $this->taxAmount = $taxAmount;
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
     * @return \App\Asic\fssItemType
     */
    public function setTaxCode($taxCode)
    {
      $this->taxCode = $taxCode;
      return $this;
    }

    /**
     * @return channel
     */
    public function getChannel()
    {
      return $this->channel;
    }

    /**
     * @param channel $channel
     * @return \App\Asic\fssItemType
     */
    public function setChannel($channel)
    {
      $this->channel = $channel;
      return $this;
    }

    /**
     * @return quantity
     */
    public function getQuantity()
    {
      return $this->quantity;
    }

    /**
     * @param quantity $quantity
     * @return \App\Asic\fssItemType
     */
    public function setQuantity($quantity)
    {
      $this->quantity = $quantity;
      return $this;
    }

    /**
     * @return suffix
     */
    public function getSuffix()
    {
      return $this->suffix;
    }

    /**
     * @param suffix $suffix
     * @return \App\Asic\fssItemType
     */
    public function setSuffix($suffix)
    {
      $this->suffix = $suffix;
      return $this;
    }

}
