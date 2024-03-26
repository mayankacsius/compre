<?php

namespace App\Asic;

class searchNniRequestType
{

    /**
     * @var searchType $searchType
     */
    protected $searchType = null;

    /**
     * @var searchScope $searchScope
     */
    protected $searchScope = null;

    /**
     * @var organisation $organisation
     */
    protected $organisation = null;

    /**
     * @var int $maxResult
     */
    protected $maxResult = null;

    /**
     * @param searchType $searchType
     * @param searchScope $searchScope
     * @param organisation $organisation
     */
    public function __construct($searchType, $searchScope, $organisation)
    {
      $this->searchType = $searchType;
      $this->searchScope = $searchScope;
      $this->organisation = $organisation;
    }

    /**
     * @return searchType
     */
    public function getSearchType()
    {
      return $this->searchType;
    }

    /**
     * @param searchType $searchType
     * @return \App\Asic\searchNniRequestType
     */
    public function setSearchType($searchType)
    {
      $this->searchType = $searchType;
      return $this;
    }

    /**
     * @return searchScope
     */
    public function getSearchScope()
    {
      return $this->searchScope;
    }

    /**
     * @param searchScope $searchScope
     * @return \App\Asic\searchNniRequestType
     */
    public function setSearchScope($searchScope)
    {
      $this->searchScope = $searchScope;
      return $this;
    }

    /**
     * @return organisation
     */
    public function getOrganisation()
    {
      return $this->organisation;
    }

    /**
     * @param organisation $organisation
     * @return \App\Asic\searchNniRequestType
     */
    public function setOrganisation($organisation)
    {
      $this->organisation = $organisation;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxResult()
    {
      return $this->maxResult;
    }

    /**
     * @param int $maxResult
     * @return \App\Asic\searchNniRequestType
     */
    public function setMaxResult($maxResult)
    {
      $this->maxResult = $maxResult;
      return $this;
    }

}
