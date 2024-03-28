<?php

namespace App\Asic;

class applicantName
{

    /**
     * @var personNameLodgeType $person
     */
    protected $person = null;

    /**
     * @var organisation $organisation
     */
    protected $organisation = null;

    /**
     * @param personNameLodgeType $person
     * @param organisation $organisation
     */
    public function __construct($person, $organisation)
    {
      $this->person = $person;
      $this->organisation = $organisation;
    }

    /**
     * @return personNameLodgeType
     */
    public function getPerson()
    {
      return $this->person;
    }

    /**
     * @param personNameLodgeType $person
     * @return \App\Asic\applicantName
     */
    public function setPerson($person)
    {
      $this->person = $person;
      return $this;
    }

    /**
     * @return organisation
     */
    public function getOrganisation()
    {
      return $this->organisation;
    }

    /**
     * @param organisation $organisation
     * @return \App\Asic\applicantName
     */
    public function setOrganisation($organisation)
    {
      $this->organisation = $organisation;
      return $this;
    }

}
