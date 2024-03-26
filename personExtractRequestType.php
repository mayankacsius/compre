<?php

namespace App\Asic;

class personExtractRequestType
{

    /**
     * @var asicNumericIdType $searchId
     */
    protected $searchId = null;

    /**
     * @var personIds $personIds
     */
    protected $personIds = null;

    /**
     * @var trueType $showHistory
     */
    protected $showHistory = null;

    /**
     * @param personIds $personIds
     */
    public function __construct($personIds)
    {
      $this->personIds = $personIds;
    }

    /**
     * @return asicNumericIdType
     */
    public function getSearchId()
    {
      return $this->searchId;
    }

    /**
     * @param asicNumericIdType $searchId
     * @return \App\Asic\personExtractRequestType
     */
    public function setSearchId($searchId)
    {
      $this->searchId = $searchId;
      return $this;
    }

    /**
     * @return personIds
     */
    public function getPersonIds()
    {
      return $this->personIds;
    }

    /**
     * @param personIds $personIds
     * @return \App\Asic\personExtractRequestType
     */
    public function setPersonIds($personIds)
    {
      $this->personIds = $personIds;
      return $this;
    }

    /**
     * @return trueType
     */
    public function getShowHistory()
    {
      return $this->showHistory;
    }

    /**
     * @param trueType $showHistory
     * @return \App\Asic\personExtractRequestType
     */
    public function setShowHistory($showHistory)
    {
      $this->showHistory = $showHistory;
      return $this;
    }

}
