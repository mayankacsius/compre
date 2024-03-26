<?php

namespace App\Asic;

class messageIdentifierType
{

    /**
     * @var documentIdentifierType $asicIdentifier
     */
    protected $asicIdentifier = null;

    /**
     * @var customerIdentifier $customerIdentifier
     */
    protected $customerIdentifier = null;

    /**
     * @param documentIdentifierType $asicIdentifier
     * @param customerIdentifier $customerIdentifier
     */
    public function __construct($asicIdentifier, $customerIdentifier)
    {
      $this->asicIdentifier = $asicIdentifier;
      $this->customerIdentifier = $customerIdentifier;
    }

    /**
     * @return documentIdentifierType
     */
    public function getAsicIdentifier()
    {
      return $this->asicIdentifier;
    }

    /**
     * @param documentIdentifierType $asicIdentifier
     * @return \App\Asic\messageIdentifierType
     */
    public function setAsicIdentifier($asicIdentifier)
    {
      $this->asicIdentifier = $asicIdentifier;
      return $this;
    }

    /**
     * @return customerIdentifier
     */
    public function getCustomerIdentifier()
    {
      return $this->customerIdentifier;
    }

    /**
     * @param customerIdentifier $customerIdentifier
     * @return \App\Asic\messageIdentifierType
     */
    public function setCustomerIdentifier($customerIdentifier)
    {
      $this->customerIdentifier = $customerIdentifier;
      return $this;
    }

}
