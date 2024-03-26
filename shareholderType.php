<?php

namespace App\Asic;

class shareholderType
{

    /**
     * @var organisationType $organisation
     */
    protected $organisation = null;

    /**
     * @var individualType $individual
     */
    protected $individual = null;

    /**
     * @param organisationType $organisation
     * @param individualType $individual
     */
    public function __construct($organisation, $individual)
    {
      $this->organisation = $organisation;
      $this->individual = $individual;
    }

    /**
     * @return organisationType
     */
    public function getOrganisation()
    {
      return $this->organisation;
    }

    /**
     * @param organisationType $organisation
     * @return \App\Asic\shareholderType
     */
    public function setOrganisation($organisation)
    {
      $this->organisation = $organisation;
      return $this;
    }

    /**
     * @return individualType
     */
    public function getIndividual()
    {
      return $this->individual;
    }

    /**
     * @param individualType $individual
     * @return \App\Asic\shareholderType
     */
    public function setIndividual($individual)
    {
      $this->individual = $individual;
      return $this;
    }

}
