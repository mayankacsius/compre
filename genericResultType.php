<?php

namespace App\Asic;

class genericResultType
{

    /**
     * @var trueType $accepted
     */
    protected $accepted = null;

    /**
     * @var trueType $rejected
     */
    protected $rejected = null;

    /**
     * @var trueType $delayed
     */
    protected $delayed = null;

    /**
     * @var trueType $fault
     */
    protected $fault = null;

    /**
     * @param trueType $accepted
     * @param trueType $rejected
     * @param trueType $delayed
     * @param trueType $fault
     */
    public function __construct($accepted, $rejected, $delayed, $fault)
    {
      $this->accepted = $accepted;
      $this->rejected = $rejected;
      $this->delayed = $delayed;
      $this->fault = $fault;
    }

    /**
     * @return trueType
     */
    public function getAccepted()
    {
      return $this->accepted;
    }

    /**
     * @param trueType $accepted
     * @return \App\Asic\genericResultType
     */
    public function setAccepted($accepted)
    {
      $this->accepted = $accepted;
      return $this;
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
     * @return \App\Asic\genericResultType
     */
    public function setRejected($rejected)
    {
      $this->rejected = $rejected;
      return $this;
    }

    /**
     * @return trueType
     */
    public function getDelayed()
    {
      return $this->delayed;
    }

    /**
     * @param trueType $delayed
     * @return \App\Asic\genericResultType
     */
    public function setDelayed($delayed)
    {
      $this->delayed = $delayed;
      return $this;
    }

    /**
     * @return trueType
     */
    public function getFault()
    {
      return $this->fault;
    }

    /**
     * @param trueType $fault
     * @return \App\Asic\genericResultType
     */
    public function setFault($fault)
    {
      $this->fault = $fault;
      return $this;
    }

}
