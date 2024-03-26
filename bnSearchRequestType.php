<?php

namespace App\Asic;

class bnSearchRequestType
{

    /**
     * @var search $search
     */
    protected $search = null;

    /**
     * @var filter $filter
     */
    protected $filter = null;

    /**
     * @var int $maxResult
     */
    protected $maxResult = null;

    /**
     * @param search $search
     */
    public function __construct($search)
    {
      $this->search = $search;
    }

    /**
     * @return search
     */
    public function getSearch()
    {
      return $this->search;
    }

    /**
     * @param search $search
     * @return \App\Asic\bnSearchRequestType
     */
    public function setSearch($search)
    {
      $this->search = $search;
      return $this;
    }

    /**
     * @return filter
     */
    public function getFilter()
    {
      return $this->filter;
    }

    /**
     * @param filter $filter
     * @return \App\Asic\bnSearchRequestType
     */
    public function setFilter($filter)
    {
      $this->filter = $filter;
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
     * @return \App\Asic\bnSearchRequestType
     */
    public function setMaxResult($maxResult)
    {
      $this->maxResult = $maxResult;
      return $this;
    }

}
