<?php

namespace App\Asic;

class personWithRolesType extends personNameBirthType
{

    /**
     * @var role[] $role
     */
    protected $role = null;

    /**
     * @param string $personId
     * @param personNameType $name
     */
    public function __construct($personId, $name)
    {
      parent::__construct($personId, $name);
    }

    /**
     * @return role[]
     */
    public function getRole()
    {
      return $this->role;
    }

    /**
     * @param role[] $role
     * @return \App\Asic\personWithRolesType
     */
    public function setRole(array $role = null)
    {
      $this->role = $role;
      return $this;
    }

}
