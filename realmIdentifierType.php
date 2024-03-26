<?php

namespace App\Asic;

class realmIdentifierType
{

    /**
     * @var realmQualifierType $realm
     */
    protected $realm = null;

    /**
     * @param realmQualifierType $realm
     */
    public function __construct($realm)
    {
      $this->realm = $realm;
    }

    /**
     * @return realmQualifierType
     */
    public function getRealm()
    {
      return $this->realm;
    }

    /**
     * @param realmQualifierType $realm
     * @return \App\Asic\realmIdentifierType
     */
    public function setRealm($realm)
    {
      $this->realm = $realm;
      return $this;
    }

}
