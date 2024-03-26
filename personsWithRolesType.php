<?php

namespace App\Asic;

class personsWithRolesType
{

    /**
     * @var personWithRolesType[] $person
     */
    protected $person = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return personWithRolesType[]
     */
    public function getPerson()
    {
      return $this->person;
    }

    /**
     * @param personWithRolesType[] $person
     * @return \App\Asic\personsWithRolesType
     */
    public function setPerson(array $person = null)
    {
      $this->person = $person;
      return $this;
    }

}
