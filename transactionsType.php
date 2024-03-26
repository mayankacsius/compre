<?php

namespace App\Asic;

class transactionsType
{

    /**
     * @var transactionType[] $transaction
     */
    protected $transaction = null;

    /**
     * @var amountType $total
     */
    protected $total = null;

    /**
     * @var date $dateDue
     */
    protected $dateDue = null;

    /**
     * @param transactionType[] $transaction
     * @param amountType $total
     */
    public function __construct(array $transaction, $total)
    {
      $this->transaction = $transaction;
      $this->total = $total;
    }

    /**
     * @return transactionType[]
     */
    public function getTransaction()
    {
      return $this->transaction;
    }

    /**
     * @param transactionType[] $transaction
     * @return \App\Asic\transactionsType
     */
    public function setTransaction(array $transaction)
    {
      $this->transaction = $transaction;
      return $this;
    }

    /**
     * @return amountType
     */
    public function getTotal()
    {
      return $this->total;
    }

    /**
     * @param amountType $total
     * @return \App\Asic\transactionsType
     */
    public function setTotal($total)
    {
      $this->total = $total;
      return $this;
    }

    /**
     * @return date
     */
    public function getDateDue()
    {
      return $this->dateDue;
    }

    /**
     * @param date $dateDue
     * @return \App\Asic\transactionsType
     */
    public function setDateDue($dateDue)
    {
      $this->dateDue = $dateDue;
      return $this;
    }

}
