<?php

namespace App\Asic;

class bpay
{

    /**
     * @var billerCode $billerCode
     */
    protected $billerCode = null;

    /**
     * @var ref $ref
     */
    protected $ref = null;

    /**
     * @param billerCode $billerCode
     * @param ref $ref
     */
    public function __construct($billerCode, $ref)
    {
      $this->billerCode = $billerCode;
      $this->ref = $ref;
    }

    /**
     * @return billerCode
     */
    public function getBillerCode()
    {
      return $this->billerCode;
    }

    /**
     * @param billerCode $billerCode
     * @return \App\Asic\bpay
     */
    public function setBillerCode($billerCode)
    {
      $this->billerCode = $billerCode;
      return $this;
    }

    /**
     * @return ref
     */
    public function getRef()
    {
      return $this->ref;
    }

    /**
     * @param ref $ref
     * @return \App\Asic\bpay
     */
    public function setRef($ref)
    {
      $this->ref = $ref;
      return $this;
    }

}
