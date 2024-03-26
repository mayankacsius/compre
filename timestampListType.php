<?php

namespace App\Asic;

class timestampListType
{

    /**
     * @var timestampType[] $timestamp
     */
    protected $timestamp = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return timestampType[]
     */
    public function getTimestamp()
    {
      return $this->timestamp;
    }

    /**
     * @param timestampType[] $timestamp
     * @return \App\Asic\timestampListType
     */
    public function setTimestamp(array $timestamp = null)
    {
      $this->timestamp = $timestamp;
      return $this;
    }

}
