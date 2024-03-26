<?php

namespace App\Asic;

class nniEntityWithAgentType extends nameIndexEntityType
{

    /**
     * @var agent $agent
     */
    protected $agent = null;

    /**
     * @var outboundBusinessNameType[] $businessNames
     */
    protected $businessNames = null;

    /**
     * @param identifierType $identifier
     * @param distinguishedNameType $name
     * @param nniTypeType $type
     * @param statusType $status
     */
    public function __construct($identifier, $name, $type, $status)
    {
      parent::__construct($identifier, $name, $type, $status);
    }

    /**
     * @return agent
     */
    public function getAgent()
    {
      return $this->agent;
    }

    /**
     * @param agent $agent
     * @return \App\Asic\nniEntityWithAgentType
     */
    public function setAgent($agent)
    {
      $this->agent = $agent;
      return $this;
    }

    /**
     * @return outboundBusinessNameType[]
     */
    public function getBusinessNames()
    {
      return $this->businessNames;
    }

    /**
     * @param outboundBusinessNameType[] $businessNames
     * @return \App\Asic\nniEntityWithAgentType
     */
    public function setBusinessNames(array $businessNames = null)
    {
      $this->businessNames = $businessNames;
      return $this;
    }

}
