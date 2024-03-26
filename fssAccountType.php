<?php

namespace App\Asic;

class fssAccountType
{

    /**
     * @var asicType $asicType
     */
    protected $asicType = null;

    /**
     * @var ledgerNumber $ledgerNumber
     */
    protected $ledgerNumber = null;

    /**
     * @var asicIdentifier $asicIdentifier
     */
    protected $asicIdentifier = null;

    /**
     * @param asicType $asicType
     * @param ledgerNumber $ledgerNumber
     * @param asicIdentifier $asicIdentifier
     */
    public function __construct($asicType, $ledgerNumber, $asicIdentifier)
    {
      $this->asicType = $asicType;
      $this->ledgerNumber = $ledgerNumber;
      $this->asicIdentifier = $asicIdentifier;
    }

    /**
     * @return asicType
     */
    public function getAsicType()
    {
      return $this->asicType;
    }

    /**
     * @param asicType $asicType
     * @return \App\Asic\fssAccountType
     */
    public function setAsicType($asicType)
    {
      $this->asicType = $asicType;
      return $this;
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
     * @return \App\Asic\fssAccountType
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
     * @return \App\Asic\fssAccountType
     */
    public function setAsicIdentifier($asicIdentifier)
    {
      $this->asicIdentifier = $asicIdentifier;
      return $this;
    }

}
