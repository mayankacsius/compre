<?php

namespace App\Asic;

class abrEntityType
{

    /**
     * @var abnType $abn
     */
    protected $abn = null;

    /**
     * @var abnApplicationReferenceNumberType $abnReferenceNumber
     */
    protected $abnReferenceNumber = null;

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
     * @param abnApplicationReferenceNumberType $abnReferenceNumber
     */
    public function __construct($abn, $abnReferenceNumber)
    {
      $this->abn = $abn;
      $this->abnReferenceNumber = $abnReferenceNumber;
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
     * @return \App\Asic\abrEntityType
     */
    public function setAbn($abn)
    {
      $this->abn = $abn;
      return $this;
    }

    /**
     * @return abnApplicationReferenceNumberType
     */
    public function getAbnReferenceNumber()
    {
      return $this->abnReferenceNumber;
    }

    /**
     * @param abnApplicationReferenceNumberType $abnReferenceNumber
     * @return \App\Asic\abrEntityType
     */
    public function setAbnReferenceNumber($abnReferenceNumber)
    {
      $this->abnReferenceNumber = $abnReferenceNumber;
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
     * @return \App\Asic\abrEntityType
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
     * @return \App\Asic\abrEntityType
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
     * @return \App\Asic\abrEntityType
     */
    public function setEffectiveDate($effectiveDate)
    {
      $this->effectiveDate = $effectiveDate;
      return $this;
    }

}
