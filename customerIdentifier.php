<?php

namespace App\Asic;

class customerIdentifier
{

    /**
     * @var accountIdentifierType $customer
     */
    protected $customer = null;

    /**
     * @var identifier $identifier
     */
    protected $identifier = null;

    /**
     * @param accountIdentifierType $customer
     * @param identifier $identifier
     */
    public function __construct($customer, $identifier)
    {
      $this->customer = $customer;
      $this->identifier = $identifier;
    }

    /**
     * @return accountIdentifierType
     */
    public function getCustomer()
    {
      return $this->customer;
    }

    /**
     * @param accountIdentifierType $customer
     * @return \App\Asic\customerIdentifier
     */
    public function setCustomer($customer)
    {
      $this->customer = $customer;
      return $this;
    }

    /**
     * @return identifier
     */
    public function getIdentifier()
    {
      return $this->identifier;
    }

    /**
     * @param identifier $identifier
     * @return \App\Asic\customerIdentifier
     */
    public function setIdentifier($identifier)
    {
      $this->identifier = $identifier;
      return $this;
    }

}
