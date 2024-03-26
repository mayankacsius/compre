<?php

namespace App\Asic;

class personNameWithRoleType extends personNameType
{

    /**
     * @var role $role
     */
    protected $role = null;

    /**
     * @param givenNames $givenNames
     * @param familyName $familyName
     */
    public function __construct($givenNames, $familyName)
    {
      parent::__construct($givenNames, $familyName);
    }

    /**
     * @return role
     */
    public function getRole()
    {
      return $this->role;
    }

    /**
     * @param role $role
     * @return \App\Asic\personNameWithRoleType
     */
    public function setRole($role)
    {
      $this->role = $role;
      return $this;
    }

}
