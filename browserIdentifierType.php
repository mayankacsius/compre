<?php

namespace App\Asic;

class browserIdentifierType
{

    /**
     * @var transactionNo $transactionNo
     */
    protected $transactionNo = null;

    /**
     * @param transactionNo $transactionNo
     */
    public function __construct($transactionNo)
    {
      $this->transactionNo = $transactionNo;
    }

    /**
     * @return transactionNo
     */
    public function getTransactionNo()
    {
      return $this->transactionNo;
    }

    /**
     * @param transactionNo $transactionNo
     * @return \App\Asic\browserIdentifierType
     */
    public function setTransactionNo($transactionNo)
    {
      $this->transactionNo = $transactionNo;
      return $this;
    }

}
