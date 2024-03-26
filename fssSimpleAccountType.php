<?php

namespace App\Asic;

class fssSimpleAccountType
{

    /**
     * @var ledgerNumber $ledgerNumber
     */
    protected $ledgerNumber = null;

    /**
     * @var asicIdentifier $asicIdentifier
     */
    protected $asicIdentifier = null;

    /**
     * @param ledgerNumber $ledgerNumber
     * @param asicIdentifier $asicIdentifier
     */
    public function __construct($ledgerNumber, $asicIdentifier)
    {
      $this->ledgerNumber = $ledgerNumber;
      $this->asicIdentifier = $asicIdentifier;
    }

    /**
     * @return ledgerNumber
     */
    public function getLedgerNumber()
    {
      return $this->ledgerNumber;
    }

    /**
     * @param ledgerNumber $ledgerNumber
     * @return \App\Asic\fssSimpleAccountType
     */
    public function setLedgerNumber($ledgerNumber)
    {
      $this->ledgerNumber = $ledgerNumber;
      return $this;
    }

    /**
     * @return asicIdentifier
     */
    public function getAsicIdentifier()
    {
      return $this->asicIdentifier;
    }

    /**
     * @param asicIdentifier $asicIdentifier
     * @return \App\Asic\fssSimpleAccountType
     */
    public function setAsicIdentifier($asicIdentifier)
    {
      $this->asicIdentifier = $asicIdentifier;
      return $this;
    }

}
