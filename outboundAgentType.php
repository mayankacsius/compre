<?php

namespace App\Asic;

class outboundAgentType
{

    /**
     * @var abnType $agentAbn
     */
    protected $agentAbn = null;

    /**
     * @var asicNumericIdType $agentNo
     */
    protected $agentNo = null;

    /**
     * @var agentNameType $agentName
     */
    protected $agentName = null;

    /**
     * @var nameIndexEntityType $organisation
     */
    protected $organisation = null;

    /**
     * @var individualType $person
     */
    protected $person = null;

    /**
     * @var business[] $business
     */
    protected $business = null;

    /**
     * @param asicNumericIdType $agentNo
     * @param nameIndexEntityType $organisation
     * @param individualType $person
     */
    public function __construct($agentNo, $organisation, $person)
    {
      $this->agentNo = $agentNo;
      $this->organisation = $organisation;
      $this->person = $person;
    }

    /**
     * @return abnType
     */
    public function getAgentAbn()
    {
      return $this->agentAbn;
    }

    /**
     * @param abnType $agentAbn
     * @return \App\Asic\outboundAgentType
     */
    public function setAgentAbn($agentAbn)
    {
      $this->agentAbn = $agentAbn;
      return $this;
    }

    /**
     * @return asicNumericIdType
     */
    public function getAgentNo()
    {
      return $this->agentNo;
    }

    /**
     * @param asicNumericIdType $agentNo
     * @return \App\Asic\outboundAgentType
     */
    public function setAgentNo($agentNo)
    {
      $this->agentNo = $agentNo;
      return $this;
    }

    /**
     * @return agentNameType
     */
    public function getAgentName()
    {
      return $this->agentName;
    }

    /**
     * @param agentNameType $agentName
     * @return \App\Asic\outboundAgentType
     */
    public function setAgentName($agentName)
    {
      $this->agentName = $agentName;
      return $this;
    }

    /**
     * @return nameIndexEntityType
     */
    public function getOrganisation()
    {
      return $this->organisation;
    }

    /**
     * @param nameIndexEntityType $organisation
     * @return \App\Asic\outboundAgentType
     */
    public function setOrganisation($organisation)
    {
      $this->organisation = $organisation;
      return $this;
    }

    /**
     * @return individualType
     */
    public function getPerson()
    {
      return $this->person;
    }

    /**
     * @param individualType $person
     * @return \App\Asic\outboundAgentType
     */
    public function setPerson($person)
    {
      $this->person = $person;
      return $this;
    }

    /**
     * @return business[]
     */
    public function getBusiness()
    {
      return $this->business;
    }

    /**
     * @param business[] $business
     * @return \App\Asic\outboundAgentType
     */
    public function setBusiness(array $business = null)
    {
      $this->business = $business;
      return $this;
    }

}
