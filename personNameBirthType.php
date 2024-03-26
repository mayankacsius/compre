<?php

namespace App\Asic;

class personNameBirthType
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
     * @var personNameType $formerName
     */
    protected $formerName = null;

    /**
     * @var birthDetailsType $birthDetails
     */
    protected $birthDetails = null;

    /**
     * @param string $personId
     * @param personNameType $name
     */
    public function __construct($personId, $name)
    {
      $this->personId = $personId;
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
     * @return \App\Asic\personNameBirthType
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
     * @return \App\Asic\personNameBirthType
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return personNameType
     */
    public function getFormerName()
    {
      return $this->formerName;
    }

    /**
     * @param personNameType $formerName
     * @return \App\Asic\personNameBirthType
     */
    public function setFormerName($formerName)
    {
      $this->formerName = $formerName;
      return $this;
    }

    /**
     * @return birthDetailsType
     */
    public function getBirthDetails()
    {
      return $this->birthDetails;
    }

    /**
     * @param birthDetailsType $birthDetails
     * @return \App\Asic\personNameBirthType
     */
    public function setBirthDetails($birthDetails)
    {
      $this->birthDetails = $birthDetails;
      return $this;
    }

}
