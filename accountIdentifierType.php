<?php

namespace App\Asic;

class accountIdentifierType extends realmIdentifierType
{

    /**
     * @var accountIdentifier $accountIdentifier
     */
    protected $accountIdentifier = null;

    /**
     * @param realmQualifierType $realm
     * @param accountIdentifier $accountIdentifier
     */
    public function __construct($realm, $accountIdentifier)
    {
      parent::__construct($realm);
      $this->accountIdentifier = $accountIdentifier;
    }

    /**
     * @return accountIdentifier
     */
    public function getAccountIdentifier()
    {
      return $this->accountIdentifier;
    }

    /**
     * @param accountIdentifier $accountIdentifier
     * @return \App\Asic\accountIdentifierType
     */
    public function setAccountIdentifier($accountIdentifier)
    {
      $this->accountIdentifier = $accountIdentifier;
      return $this;
    }

}
