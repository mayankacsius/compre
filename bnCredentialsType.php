<?php

namespace App\Asic;

class bnCredentialsType
{

    /**
     * @var nniNumberType $number
     */
    protected $number = null;

    /**
     * @var keyType $key
     */
    protected $key = null;

    /**
     * @param nniNumberType $number
     * @param keyType $key
     */
    public function __construct($number, $key)
    {
      $this->number = $number;
      $this->key = $key;
    }

    /**
     * @return nniNumberType
     */
    public function getNumber()
    {
      return $this->number;
    }

    /**
     * @param nniNumberType $number
     * @return \App\Asic\bnCredentialsType
     */
    public function setNumber($number)
    {
      $this->number = $number;
      return $this;
    }

    /**
     * @return keyType
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param keyType $key
     * @return \App\Asic\bnCredentialsType
     */
    public function setKey($key)
    {
      $this->key = $key;
      return $this;
    }

}
