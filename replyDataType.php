<?php

namespace App\Asic;

class replyDataType
{

    /**
     * @var nameIndexAcncEntityType[] $nniEntity
     */
    protected $nniEntity = null;

    /**
     * @param nameIndexAcncEntityType[] $nniEntity
     */
    public function __construct(array $nniEntity)
    {
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

}
