<?php

namespace App\Asic;

class stateTerritory
{

    /**
     * @var previousStateNumber $previousStateNumber
     */
    protected $previousStateNumber = null;

    /**
     * @var stateTerritoryCodeType $issuingStateTerritory
     */
    protected $issuingStateTerritory = null;

    /**
     * @param previousStateNumber $previousStateNumber
     * @param stateTerritoryCodeType $issuingStateTerritory
     */
    public function __construct($previousStateNumber, $issuingStateTerritory)
    {
      $this->previousStateNumber = $previousStateNumber;
      $this->issuingStateTerritory = $issuingStateTerritory;
    }

    /**
     * @return previousStateNumber
     */
    public function getPreviousStateNumber()
    {
      return $this->previousStateNumber;
    }

    /**
     * @param previousStateNumber $previousStateNumber
     * @return \App\Asic\stateTerritory
     */
    public function setPreviousStateNumber($previousStateNumber)
    {
      $this->previousStateNumber = $previousStateNumber;
      return $this;
    }

    /**
     * @return stateTerritoryCodeType
     */
    public function getIssuingStateTerritory()
    {
      return $this->issuingStateTerritory;
    }

    /**
     * @param stateTerritoryCodeType $issuingStateTerritory
     * @return \App\Asic\stateTerritory
     */
    public function setIssuingStateTerritory($issuingStateTerritory)
    {
      $this->issuingStateTerritory = $issuingStateTerritory;
      return $this;
    }

}
