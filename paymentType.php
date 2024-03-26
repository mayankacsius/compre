<?php

namespace App\Asic;

class paymentType
{

    /**
     * @var trueType $directDebit
     */
    protected $directDebit = null;

    /**
     * @var creditCardType $creditCard
     */
    protected $creditCard = null;

    /**
     * @param trueType $directDebit
     * @param creditCardType $creditCard
     */
    public function __construct($directDebit, $creditCard)
    {
      $this->directDebit = $directDebit;
      $this->creditCard = $creditCard;
    }

    /**
     * @return trueType
     */
    public function getDirectDebit()
    {
      return $this->directDebit;
    }

    /**
     * @param trueType $directDebit
     * @return \App\Asic\paymentType
     */
    public function setDirectDebit($directDebit)
    {
      $this->directDebit = $directDebit;
      return $this;
    }

    /**
     * @return creditCardType
     */
    public function getCreditCard()
    {
      return $this->creditCard;
    }

    /**
     * @param creditCardType $creditCard
     * @return \App\Asic\paymentType
     */
    public function setCreditCard($creditCard)
    {
      $this->creditCard = $creditCard;
      return $this;
    }

}
