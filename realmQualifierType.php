<?php

namespace App\Asic;

class realmQualifierType
{

    /**
     * @var typeIdentifier $typeIdentifier
     */
    protected $typeIdentifier = null;

    /**
     * @var qualifier $qualifier
     */
    protected $qualifier = null;

    /**
     * @var nniNameType $name
     */
    protected $name = null;

    /**
     * @param typeIdentifier $typeIdentifier
     * @param qualifier $qualifier
     */
    public function __construct($typeIdentifier, $qualifier)
    {
      $this->typeIdentifier = $typeIdentifier;
      $this->qualifier = $qualifier;
    }

    /**
     * @return typeIdentifier
     */
    public function getTypeIdentifier()
    {
      return $this->typeIdentifier;
    }

    /**
     * @param typeIdentifier $typeIdentifier
     * @return \App\Asic\realmQualifierType
     */
    public function setTypeIdentifier($typeIdentifier)
    {
      $this->typeIdentifier = $typeIdentifier;
      return $this;
    }

    /**
     * @return qualifier
     */
    public function getQualifier()
    {
      return $this->qualifier;
    }

    /**
     * @param qualifier $qualifier
     * @return \App\Asic\realmQualifierType
     */
    public function setQualifier($qualifier)
    {
      $this->qualifier = $qualifier;
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
     * @return \App\Asic\realmQualifierType
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
