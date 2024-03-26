<?php

namespace App\Asic;

class feeWithAmountType
{

    /**
     * @var type $type
     */
    protected $type = null;

    /**
     * @var subType $subType
     */
    protected $subType = null;

    /**
     * @var description $description
     */
    protected $description = null;

    /**
     * @var amountType $amount
     */
    protected $amount = null;

    /**
     * @param type $type
     * @param amountType $amount
     */
    public function __construct($type, $amount)
    {
      $this->type = $type;
      $this->amount = $amount;
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
     * @return \App\Asic\feeWithAmountType
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return subType
     */
    public function getSubType()
    {
      return $this->subType;
    }

    /**
     * @param subType $subType
     * @return \App\Asic\feeWithAmountType
     */
    public function setSubType($subType)
    {
      $this->subType = $subType;
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
     * @return \App\Asic\feeWithAmountType
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
     * @return \App\Asic\feeWithAmountType
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

}
