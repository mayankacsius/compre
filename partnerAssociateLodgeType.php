<?php

namespace App\Asic;

class partnerAssociateLodgeType
{

    /**
     * @var individualLodgeType $individual
     */
    protected $individual = null;

    /**
     * @var organisationLodgeType $organisation
     */
    protected $organisation = null;

    /**
     * @param individualLodgeType $individual
     * @param organisationLodgeType $organisation
     */
    public function __construct($individual, $organisation)
    {
      $this->individual = $individual;
      $this->organisation = $organisation;
    }

    /**
     * @return individualLodgeType
     */
    public function getIndividual()
    {
      return $this->individual;
    }

    /**
     * @param individualLodgeType $individual
     * @return \App\Asic\partnerAssociateLodgeType
     */
    public function setIndividual($individual)
    {
      $this->individual = $individual;
      return $this;
    }

    /**
     * @return organisationLodgeType
     */
    public function getOrganisation()
    {
      return $this->organisation;
    }

    /**
     * @param organisationLodgeType $organisation
     * @return \App\Asic\partnerAssociateLodgeType
     */
    public function setOrganisation($organisation)
    {
      $this->organisation = $organisation;
      return $this;
    }

}
