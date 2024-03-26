<?php

namespace App\Asic;

class legalName
{

    /**
     * @var individual $individual
     */
    protected $individual = null;

    /**
     * @var organisation $organisation
     */
    protected $organisation = null;

    /**
     * @param individual $individual
     * @param organisation $organisation
     */
    public function __construct($individual, $organisation)
    {
      $this->individual = $individual;
      $this->organisation = $organisation;
    }

    /**
     * @return individual
     */
    public function getIndividual()
    {
      return $this->individual;
    }

    /**
     * @param individual $individual
     * @return \App\Asic\legalName
     */
    public function setIndividual($individual)
    {
      $this->individual = $individual;
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
     * @return \App\Asic\legalName
     */
    public function setOrganisation($organisation)
    {
      $this->organisation = $organisation;
      return $this;
    }

}
