<?php

namespace App\Asic;

class baseAbrEntityType
{

    /**
     * @var abnType $abn
     */
    protected $abn = null;

    /**
     * @var nniNameType $entityName
     */
    protected $entityName = null;

    /**
     * @var abrEntityTypeType $entityType
     */
    protected $entityType = null;

    /**
     * @var date $effectiveDate
     */
    protected $effectiveDate = null;

    /**
     * @param abnType $abn
     * @param nniNameType $entityName
     * @param abrEntityTypeType $entityType
     */
    public function __construct($abn, $entityName, $entityType)
    {
      $this->abn = $abn;
      $this->entityName = $entityName;
      $this->entityType = $entityType;
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
     * @return \App\Asic\baseAbrEntityType
     */
    public function setAbn($abn)
    {
      $this->abn = $abn;
      return $this;
    }

    /**
     * @return nniNameType
     */
    public function getEntityName()
    {
      return $this->entityName;
    }

    /**
     * @param nniNameType $entityName
     * @return \App\Asic\baseAbrEntityType
     */
    public function setEntityName($entityName)
    {
      $this->entityName = $entityName;
      return $this;
    }

    /**
     * @return abrEntityTypeType
     */
    public function getEntityType()
    {
      return $this->entityType;
    }

    /**
     * @param abrEntityTypeType $entityType
     * @return \App\Asic\baseAbrEntityType
     */
    public function setEntityType($entityType)
    {
      $this->entityType = $entityType;
      return $this;
    }

    /**
     * @return date
     */
    public function getEffectiveDate()
    {
      return $this->effectiveDate;
    }

    /**
     * @param date $effectiveDate
     * @return \App\Asic\baseAbrEntityType
     */
    public function setEffectiveDate($effectiveDate)
    {
      $this->effectiveDate = $effectiveDate;
      return $this;
    }

}
