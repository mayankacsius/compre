<?php

namespace App\Asic;

class requestRejectedType
{

    /**
     * @var trueType $rejected
     */
    protected $rejected = null;

    /**
     * @param trueType $rejected
     */
    public function __construct($rejected)
    {
      $this->rejected = $rejected;
    }

    /**
     * @return trueType
     */
    public function getRejected()
    {
      return $this->rejected;
    }

    /**
     * @param trueType $rejected
     * @return \App\Asic\requestRejectedType
     */
    public function setRejected($rejected)
    {
      $this->rejected = $rejected;
      return $this;
    }

}
