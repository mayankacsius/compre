<?php

namespace App\Asic;

class nameIndexEntityType extends baseNniEntityType
{

    /**
     * @var abrEntityType $abrEntity
     */
    protected $abrEntity = null;

    /**
     * @var trueType $agentAppointed
     */
    protected $agentAppointed = null;

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
     * @return abrEntityType
     */
    public function getAbrEntity()
    {
      return $this->abrEntity;
    }

    /**
     * @param abrEntityType $abrEntity
     * @return \App\Asic\nameIndexEntityType
     */
    public function setAbrEntity($abrEntity)
    {
      $this->abrEntity = $abrEntity;
      return $this;
    }

    /**
     * @return trueType
     */
    public function getAgentAppointed()
    {
      return $this->agentAppointed;
    }

    /**
     * @param trueType $agentAppointed
     * @return \App\Asic\nameIndexEntityType
     */
    public function setAgentAppointed($agentAppointed)
    {
      $this->agentAppointed = $agentAppointed;
      return $this;
    }

}
