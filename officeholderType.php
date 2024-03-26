<?php

namespace App\Asic;

class officeholderType
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
     * @var officeholderRole $role
     */
    protected $role = null;

    /**
     * @param organisationType $organisation
     * @param individualType $individual
     * @param officeholderRole $role
     */
    public function __construct($organisation, $individual, $role)
    {
      $this->organisation = $organisation;
      $this->individual = $individual;
      $this->role = $role;
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
     * @return \App\Asic\officeholderType
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
     * @return \App\Asic\officeholderType
     */
    public function setIndividual($individual)
    {
      $this->individual = $individual;
      return $this;
    }

    /**
     * @return officeholderRole
     */
    public function getRole()
    {
      return $this->role;
    }

    /**
     * @param officeholderRole $role
     * @return \App\Asic\officeholderType
     */
    public function setRole($role)
    {
      $this->role = $role;
      return $this;
    }

}
