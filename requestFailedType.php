<?php

namespace App\Asic;

class requestFailedType
{

    /**
     * @var trueType $transient
     */
    protected $transient = null;

    /**
     * @var trueType $permanent
     */
    protected $permanent = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return trueType
     */
    public function getTransient()
    {
      return $this->transient;
    }

    /**
     * @param trueType $transient
     * @return \App\Asic\requestFailedType
     */
    public function setTransient($transient)
    {
      $this->transient = $transient;
      return $this;
    }

    /**
     * @return trueType
     */
    public function getPermanent()
    {
      return $this->permanent;
    }

    /**
     * @param trueType $permanent
     * @return \App\Asic\requestFailedType
     */
    public function setPermanent($permanent)
    {
      $this->permanent = $permanent;
      return $this;
    }

}
