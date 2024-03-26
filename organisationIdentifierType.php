<?php

namespace App\Asic;

class organisationIdentifierType
{

    /**
     * @var type $type
     */
    protected $type = null;

    /**
     * @var nniNumberType $value
     */
    protected $value = null;

    /**
     * @param nniNumberType $value
     */
    public function __construct($value)
    {
      $this->value = $value;
    }

    /**
     * @return type
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param type $type
     * @return \App\Asic\organisationIdentifierType
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return nniNumberType
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param nniNumberType $value
     * @return \App\Asic\organisationIdentifierType
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
