<?php

namespace App\Asic;

class priceType
{

    /**
     * @var feeWithAmountType[] $fee
     */
    protected $fee = null;

    /**
     * @var amountType $totalAmount
     */
    protected $totalAmount = null;

    /**
     * @param feeWithAmountType[] $fee
     * @param amountType $totalAmount
     */
    public function __construct(array $fee, $totalAmount)
    {
      $this->fee = $fee;
      $this->totalAmount = $totalAmount;
    }

    /**
     * @return feeWithAmountType[]
     */
    public function getFee()
    {
      return $this->fee;
    }

    /**
     * @param feeWithAmountType[] $fee
     * @return \App\Asic\priceType
     */
    public function setFee(array $fee)
    {
      $this->fee = $fee;
      return $this;
    }

    /**
     * @return amountType
     */
    public function getTotalAmount()
    {
      return $this->totalAmount;
    }

    /**
     * @param amountType $totalAmount
     * @return \App\Asic\priceType
     */
    public function setTotalAmount($totalAmount)
    {
      $this->totalAmount = $totalAmount;
      return $this;
    }

}
