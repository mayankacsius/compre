<?php

namespace App\Asic;

class replyDataType
{

    /**
     * @var nameIndexAcncEntityType[] $nniEntity
     */
    protected $nniEntity = null;

    /**
     * @var boolean $valid
     */
    protected $valid = null;

    /**
     * @param boolean $valid
     * @param nameIndexAcncEntityType[] $nniEntity
     */
    public function __construct($valid = null, array $nniEntity = null)
    {
      $this->valid = $valid;
      $this->nniEntity = $nniEntity;
    }

    /**
     * @return nameIndexAcncEntityType[]
     */
    public function getNniEntity()
    {
      return $this->nniEntity;
    }

    /**
     * @param nameIndexAcncEntityType[] $nniEntity
     * @return \App\Asic\replyDataType
     */
    public function setNniEntity(array $nniEntity)
    {
      $this->nniEntity = $nniEntity;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getValid()
    {
      return $this->valid;
    }

    /**
     * @param boolean $valid
     * @return \App\Asic\replyDataType
     */
    public function setValid($valid)
    {
      $this->valid = $valid;
      return $this;
    }

}
