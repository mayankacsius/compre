<?php

namespace App\Asic;

class creditCardType
{

    /**
     * @var brand $brand
     */
    protected $brand = null;

    /**
     * @var encrypted $encrypted
     */
    protected $encrypted = null;

    /**
     * @param brand $brand
     * @param encrypted $encrypted
     */
    public function __construct($brand, $encrypted)
    {
      $this->brand = $brand;
      $this->encrypted = $encrypted;
    }

    /**
     * @return brand
     */
    public function getBrand()
    {
      return $this->brand;
    }

    /**
     * @param brand $brand
     * @return \App\Asic\creditCardType
     */
    public function setBrand($brand)
    {
      $this->brand = $brand;
      return $this;
    }

    /**
     * @return encrypted
     */
    public function getEncrypted()
    {
      return $this->encrypted;
    }

    /**
     * @param encrypted $encrypted
     * @return \App\Asic\creditCardType
     */
    public function setEncrypted($encrypted)
    {
      $this->encrypted = $encrypted;
      return $this;
    }

}
