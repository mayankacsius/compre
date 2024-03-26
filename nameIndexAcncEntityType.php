<?php

namespace App\Asic;

class nameIndexAcncEntityType extends nameIndexEntityType
{

    /**
     * @var boolean $acncFlag
     */
    protected $acncFlag = null;

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
     * @return boolean
     */
    public function getAcncFlag()
    {
      return $this->acncFlag;
    }

    /**
     * @param boolean $acncFlag
     * @return \App\Asic\nameIndexAcncEntityType
     */
    public function setAcncFlag($acncFlag)
    {
      $this->acncFlag = $acncFlag;
      return $this;
    }

}
