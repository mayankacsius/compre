<?php

namespace App\Asic;

class organisationNamePlusIdType
{

    /**
     * @var organisationIdentifierType $identifier
     */
    protected $identifier = null;

    /**
     * @var nniNameType $name
     */
    protected $name = null;

    /**
     * @var type $type
     */
    protected $type = null;

    /**
     * @param organisationIdentifierType $identifier
     * @param nniNameType $name
     */
    public function __construct($identifier, $name)
    {
      $this->identifier = $identifier;
      $this->name = $name;
    }

    /**
     * @return organisationIdentifierType
     */
    public function getIdentifier()
    {
      return $this->identifier;
    }

    /**
     * @param organisationIdentifierType $identifier
     * @return \App\Asic\organisationNamePlusIdType
     */
    public function setIdentifier($identifier)
    {
      $this->identifier = $identifier;
      return $this;
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
     * @return \App\Asic\organisationNamePlusIdType
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
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
     * @return \App\Asic\organisationNamePlusIdType
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}
