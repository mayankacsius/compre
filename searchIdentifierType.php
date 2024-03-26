<?php

namespace App\Asic;

class searchIdentifierType
{

    /**
     * @var searchIdentifierTypeCodeType $identifierType
     */
    protected $identifierType = null;

    /**
     * @var identifierValueType $identifierValue
     */
    protected $identifierValue = null;

    /**
     * @var dateType $date
     */
    protected $date = null;

    /**
     * @var historyType $history
     */
    protected $history = null;

    /**
     * @param searchIdentifierTypeCodeType $identifierType
     * @param identifierValueType $identifierValue
     */
    public function __construct($identifierType, $identifierValue)
    {
      $this->identifierType = $identifierType;
      $this->identifierValue = $identifierValue;
    }

    /**
     * @return searchIdentifierTypeCodeType
     */
    public function getIdentifierType()
    {
      return $this->identifierType;
    }

    /**
     * @param searchIdentifierTypeCodeType $identifierType
     * @return \App\Asic\searchIdentifierType
     */
    public function setIdentifierType($identifierType)
    {
      $this->identifierType = $identifierType;
      return $this;
    }

    /**
     * @return identifierValueType
     */
    public function getIdentifierValue()
    {
      return $this->identifierValue;
    }

    /**
     * @param identifierValueType $identifierValue
     * @return \App\Asic\searchIdentifierType
     */
    public function setIdentifierValue($identifierValue)
    {
      $this->identifierValue = $identifierValue;
      return $this;
    }

    /**
     * @return dateType
     */
    public function getDate()
    {
      return $this->date;
    }

    /**
     * @param dateType $date
     * @return \App\Asic\searchIdentifierType
     */
    public function setDate($date)
    {
      $this->date = $date;
      return $this;
    }

    /**
     * @return historyType
     */
    public function getHistory()
    {
      return $this->history;
    }

    /**
     * @param historyType $history
     * @return \App\Asic\searchIdentifierType
     */
    public function setHistory($history)
    {
      $this->history = $history;
      return $this;
    }

}
