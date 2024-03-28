<?php

namespace App\Asic;

class thirdParty
{

    /**
     * @var occupierName $occupierName
     */
    protected $occupierName = null;

    /**
     * @var occupierConsents $occupierConsents
     */
    protected $occupierConsents = null;

    /**
     * @param occupierName $occupierName
     * @param occupierConsents $occupierConsents
     */
    public function __construct($occupierName, $occupierConsents)
    {
      $this->occupierName = $occupierName;
      $this->occupierConsents = $occupierConsents;
    }

    /**
     * @return occupierName
     */
    public function getOccupierName()
    {
      return $this->occupierName;
    }

    /**
     * @param occupierName $occupierName
     * @return \App\Asic\thirdParty
     */
    public function setOccupierName($occupierName)
    {
      $this->occupierName = $occupierName;
      return $this;
    }

    /**
     * @return occupierConsents
     */
    public function getOccupierConsents()
    {
      return $this->occupierConsents;
    }

    /**
     * @param occupierConsents $occupierConsents
     * @return \App\Asic\thirdParty
     */
    public function setOccupierConsents($occupierConsents)
    {
      $this->occupierConsents = $occupierConsents;
      return $this;
    }

}
