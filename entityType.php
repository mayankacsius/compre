<?php

namespace App\Asic;

class entityType
{

    /**
     * @var nniNameType $name
     */
    protected $name = null;

    /**
     * @var abnType $abn
     */
    protected $abn = null;

    /**
     * @var realmQualifierType $realmQualifier
     */
    protected $realmQualifier = null;

    /**
     * @var string $entityType
     */
    protected $entityType = null;

    /**
     * @var int $sourceId
     */
    protected $sourceId = null;

    /**
     * @param nniNameType $name
     */
    public function __construct($name)
    {
      $this->name = $name;
    }

    /**
     * @return nniNameType
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param nniNameType $name
     * @return \App\Asic\entityType
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return abnType
     */
    public function getAbn()
    {
      return $this->abn;
    }

    /**
     * @param abnType $abn
     * @return \App\Asic\entityType
     */
    public function setAbn($abn)
    {
      $this->abn = $abn;
      return $this;
    }

    /**
     * @return realmQualifierType
     */
    public function getRealmQualifier()
    {
      return $this->realmQualifier;
    }

    /**
     * @param realmQualifierType $realmQualifier
     * @return \App\Asic\entityType
     */
    public function setRealmQualifier($realmQualifier)
    {
      $this->realmQualifier = $realmQualifier;
      return $this;
    }

    /**
     * @return string
     */
    public function getEntityType()
    {
      return $this->entityType;
    }

    /**
     * @param string $entityType
     * @return \App\Asic\entityType
     */
    public function setEntityType($entityType)
    {
      $this->entityType = $entityType;
      return $this;
    }

    /**
     * @return int
     */
    public function getSourceId()
    {
      return $this->sourceId;
    }

    /**
     * @param int $sourceId
     * @return \App\Asic\entityType
     */
    public function setSourceId($sourceId)
    {
      $this->sourceId = $sourceId;
      return $this;
    }

}
