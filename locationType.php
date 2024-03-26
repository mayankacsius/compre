<?php

namespace App\Asic;

class locationType
{

    /**
     * @var postCode $postCode
     */
    protected $postCode = null;

    /**
     * @var localityState $localityState
     */
    protected $localityState = null;

    /**
     * @param postCode $postCode
     * @param localityState $localityState
     */
    public function __construct($postCode, $localityState)
    {
      $this->postCode = $postCode;
      $this->localityState = $localityState;
    }

    /**
     * @return postCode
     */
    public function getPostCode()
    {
      return $this->postCode;
    }

    /**
     * @param postCode $postCode
     * @return \App\Asic\locationType
     */
    public function setPostCode($postCode)
    {
      $this->postCode = $postCode;
      return $this;
    }

    /**
     * @return localityState
     */
    public function getLocalityState()
    {
      return $this->localityState;
    }

    /**
     * @param localityState $localityState
     * @return \App\Asic\locationType
     */
    public function setLocalityState($localityState)
    {
      $this->localityState = $localityState;
      return $this;
    }

}
