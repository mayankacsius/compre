<?php

namespace App\Asic;

class localityState
{

    /**
     * @var string $locality
     */
    protected $locality = null;

    /**
     * @var stateTerritoryCodeType $state
     */
    protected $state = null;

    /**
     * @param string $locality
     * @param stateTerritoryCodeType $state
     */
    public function __construct($locality, $state)
    {
      $this->locality = $locality;
      $this->state = $state;
    }

    /**
     * @return string
     */
    public function getLocality()
    {
      return $this->locality;
    }

    /**
     * @param string $locality
     * @return \App\Asic\localityState
     */
    public function setLocality($locality)
    {
      $this->locality = $locality;
      return $this;
    }

    /**
     * @return stateTerritoryCodeType
     */
    public function getState()
    {
      return $this->state;
    }

    /**
     * @param stateTerritoryCodeType $state
     * @return \App\Asic\localityState
     */
    public function setState($state)
    {
      $this->state = $state;
      return $this;
    }

}
