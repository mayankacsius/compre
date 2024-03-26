<?php

namespace App\Asic;

class businessType
{

    /**
     * @var abrEntityType $abrEntity
     */
    protected $abrEntity = null;

    /**
     * @var baseNniEntityType $organisation
     */
    protected $organisation = null;

    /**
     * @var individualType $individual
     */
    protected $individual = null;

    /**
     * @var outboundBusinessNameType[] $businessName
     */
    protected $businessName = null;

    /**
     * @var agentType $agent
     */
    protected $agent = null;

    /**
     * @param baseNniEntityType $organisation
     * @param individualType $individual
     */
    public function __construct($organisation, $individual)
    {
      $this->organisation = $organisation;
      $this->individual = $individual;
    }

    /**
     * @return abrEntityType
     */
    public function getAbrEntity()
    {
      return $this->abrEntity;
    }

    /**
     * @param abrEntityType $abrEntity
     * @return \App\Asic\businessType
     */
    public function setAbrEntity($abrEntity)
    {
      $this->abrEntity = $abrEntity;
      return $this;
    }

    /**
     * @return baseNniEntityType
     */
    public function getOrganisation()
    {
      return $this->organisation;
    }

    /**
     * @param baseNniEntityType $organisation
     * @return \App\Asic\businessType
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
     * @return \App\Asic\businessType
     */
    public function setIndividual($individual)
    {
      $this->individual = $individual;
      return $this;
    }

    /**
     * @return outboundBusinessNameType[]
     */
    public function getBusinessName()
    {
      return $this->businessName;
    }

    /**
     * @param outboundBusinessNameType[] $businessName
     * @return \App\Asic\businessType
     */
    public function setBusinessName(array $businessName = null)
    {
      $this->businessName = $businessName;
      return $this;
    }

    /**
     * @return agentType
     */
    public function getAgent()
    {
      return $this->agent;
    }

    /**
     * @param agentType $agent
     * @return \App\Asic\businessType
     */
    public function setAgent($agent)
    {
      $this->agent = $agent;
      return $this;
    }

}
