<?php

namespace App\Asic;

class streetType
{

    /**
     * @var string $streetNumber
     */
    protected $streetNumber = null;

    /**
     * @var string $streetName
     */
    protected $streetName = null;

    /**
     * @var string $streetType
     */
    protected $streetType = null;

    /**
     * @param string $streetNumber
     * @param string $streetName
     * @param string $streetType
     */
    public function __construct($streetNumber, $streetName, $streetType)
    {
      $this->streetNumber = $streetNumber;
      $this->streetName = $streetName;
      $this->streetType = $streetType;
    }

    /**
     * @return string
     */
    public function getStreetNumber()
    {
      return $this->streetNumber;
    }

    /**
     * @param string $streetNumber
     * @return \App\Asic\streetType
     */
    public function setStreetNumber($streetNumber)
    {
      $this->streetNumber = $streetNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getStreetName()
    {
      return $this->streetName;
    }

    /**
     * @param string $streetName
     * @return \App\Asic\streetType
     */
    public function setStreetName($streetName)
    {
      $this->streetName = $streetName;
      return $this;
    }

    /**
     * @return string
     */
    public function getStreetType()
    {
      return $this->streetType;
    }

    /**
     * @param string $streetType
     * @return \App\Asic\streetType
     */
    public function setStreetType($streetType)
    {
      $this->streetType = $streetType;
      return $this;
    }

}
