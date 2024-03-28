<?php

namespace App\Asic;

class legalName
{

    /**
     * @var organisation $organisation
     */
    protected $organisation = null;

    /**
     * @var individual $individual
     */
    protected $individual = null;

    /**
     * @param organisation $organisation
     * @param individual $individual
     */
    public function __construct($organisation, $individual)
    {
      $this->organisation = $organisation;
      $this->individual = $individual;
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

}
