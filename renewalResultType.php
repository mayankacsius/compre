<?php

namespace App\Asic;

class renewalResultType
{

    /**
     * @var date $renewalTo
     */
    protected $renewalTo = null;

    /**
     * @var trueType $renewalFailed
     */
    protected $renewalFailed = null;

    /**
     * @param date $renewalTo
     * @param trueType $renewalFailed
     */
    public function __construct($renewalTo, $renewalFailed)
    {
      $this->renewalTo = $renewalTo;
      $this->renewalFailed = $renewalFailed;
    }

    /**
     * @return date
     */
    public function getRenewalTo()
    {
      return $this->renewalTo;
    }

    /**
     * @param date $renewalTo
     * @return \App\Asic\renewalResultType
     */
    public function setRenewalTo($renewalTo)
    {
      $this->renewalTo = $renewalTo;
      return $this;
    }

    /**
     * @return trueType
     */
    public function getRenewalFailed()
    {
      return $this->renewalFailed;
    }

    /**
     * @param trueType $renewalFailed
     * @return \App\Asic\renewalResultType
     */
    public function setRenewalFailed($renewalFailed)
    {
      $this->renewalFailed = $renewalFailed;
      return $this;
    }

}
