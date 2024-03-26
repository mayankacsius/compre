<?php

namespace App\Asic;

class abnUpdateType
{

    /**
     * @var action $action
     */
    protected $action = null;

    /**
     * @var abnReferenceNumber $abnReferenceNumber
     */
    protected $abnReferenceNumber = null;

    /**
     * @var abnType $abn
     */
    protected $abn = null;

    /**
     * @var nniNumberType $nniNumber
     */
    protected $nniNumber = null;

    /**
     * @var baseAbrEntityType $abrEntity
     */
    protected $abrEntity = null;

    /**
     * @param action $action
     * @param abnReferenceNumber $abnReferenceNumber
     * @param abnType $abn
     * @param nniNumberType $nniNumber
     */
    public function __construct($action, $abnReferenceNumber, $abn, $nniNumber)
    {
      $this->action = $action;
      $this->abnReferenceNumber = $abnReferenceNumber;
      $this->abn = $abn;
      $this->nniNumber = $nniNumber;
    }

    /**
     * @return action
     */
    public function getAction()
    {
      return $this->action;
    }

    /**
     * @param action $action
     * @return \App\Asic\abnUpdateType
     */
    public function setAction($action)
    {
      $this->action = $action;
      return $this;
    }

    /**
     * @return abnReferenceNumber
     */
    public function getAbnReferenceNumber()
    {
      return $this->abnReferenceNumber;
    }

    /**
     * @param abnReferenceNumber $abnReferenceNumber
     * @return \App\Asic\abnUpdateType
     */
    public function setAbnReferenceNumber($abnReferenceNumber)
    {
      $this->abnReferenceNumber = $abnReferenceNumber;
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
     * @return \App\Asic\abnUpdateType
     */
    public function setAbn($abn)
    {
      $this->abn = $abn;
      return $this;
    }

    /**
     * @return nniNumberType
     */
    public function getNniNumber()
    {
      return $this->nniNumber;
    }

    /**
     * @param nniNumberType $nniNumber
     * @return \App\Asic\abnUpdateType
     */
    public function setNniNumber($nniNumber)
    {
      $this->nniNumber = $nniNumber;
      return $this;
    }

    /**
     * @return baseAbrEntityType
     */
    public function getAbrEntity()
    {
      return $this->abrEntity;
    }

    /**
     * @param baseAbrEntityType $abrEntity
     * @return \App\Asic\abnUpdateType
     */
    public function setAbrEntity($abrEntity)
    {
      $this->abrEntity = $abrEntity;
      return $this;
    }

}
