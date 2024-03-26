<?php

namespace App\Asic;

class organisation
{

     /**
     * @var name|nniNameType $name
     */
    protected $name = null;

    /**
     * @var nniTypeCodeType $type
     */
    protected $type = null;

    /**
     * @var searchStatusType $status
     */
    protected $status = null;

    /**
     * @param nniNameType|name $name
     * @param nniTypeCodeType $type
     * @param searchStatusType $status
     */
    public function __construct($name, $type = null, $status = null)
    {
      $this->name = $name;
      $this->type = $type;
      $this->status = $status;
    }
    

    /**
     * @return nniNameType|name
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param nniNameType|name $name
     * @return \App\Asic\organisation
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return nniTypeCodeType
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param nniTypeCodeType $type
     * @return \App\Asic\organisation
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return searchStatusType
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param searchStatusType $status
     * @return \App\Asic\organisation
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

}
