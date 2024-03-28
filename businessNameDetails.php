<?php

namespace App\Asic;

class businessNameDetails
{

    /**
     * @var nniNameType $proposedBusinessName
     */
    protected $proposedBusinessName = null;

    /**
     * @var termType $term
     */
    protected $term = null;

    /**
     * @param nniNameType $proposedBusinessName
     * @param termType $term
     */
    public function __construct($proposedBusinessName, $term)
    {
      $this->proposedBusinessName = $proposedBusinessName;
      $this->term = $term;
    }

    /**
     * @return nniNameType
     */
    public function getProposedBusinessName()
    {
      return $this->proposedBusinessName;
    }

    /**
     * @param nniNameType $proposedBusinessName
     * @return \App\Asic\businessNameDetails
     */
    public function setProposedBusinessName($proposedBusinessName)
    {
      $this->proposedBusinessName = $proposedBusinessName;
      return $this;
    }

    /**
     * @return termType
     */
    public function getTerm()
    {
      return $this->term;
    }

    /**
     * @param termType $term
     * @return \App\Asic\businessNameDetails
     */
    public function setTerm($term)
    {
      $this->term = $term;
      return $this;
    }

}
