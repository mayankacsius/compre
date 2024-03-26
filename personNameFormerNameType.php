<?php

namespace App\Asic;

class personNameFormerNameType
{

    /**
     * @var string $personId
     */
    protected $personId = null;

    /**
     * @var personNameType $name
     */
    protected $name = null;

    /**
     * @var personNameType[] $formerName
     */
    protected $formerName = null;

    /**
     * @param personNameType $name
     */
    public function __construct($name)
    {
      $this->name = $name;
    }

    /**
     * @return string
     */
    public function getPersonId()
    {
      return $this->personId;
    }

    /**
     * @param string $personId
     * @return \App\Asic\personNameFormerNameType
     */
    public function setPersonId($personId)
    {
      $this->personId = $personId;
      return $this;
    }

    /**
     * @return personNameType
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param personNameType $name
     * @return \App\Asic\personNameFormerNameType
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return personNameType[]
     */
    public function getFormerName()
    {
      return $this->formerName;
    }

    /**
     * @param personNameType[] $formerName
     * @return \App\Asic\personNameFormerNameType
     */
    public function setFormerName(array $formerName = null)
    {
      $this->formerName = $formerName;
      return $this;
    }

}
