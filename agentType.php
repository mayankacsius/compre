<?php

namespace App\Asic;

class agentType
{

    /**
     * @var asicNumericIdType $number
     */
    protected $number = null;

    /**
     * @var agentNameType $name
     */
    protected $name = null;

    /**
     * @param asicNumericIdType $number
     * @param agentNameType $name
     */
    public function __construct($number, $name)
    {
      $this->number = $number;
      $this->name = $name;
    }

    /**
     * @return asicNumericIdType
     */
    public function getNumber()
    {
      return $this->number;
    }

    /**
     * @param asicNumericIdType $number
     * @return \App\Asic\agentType
     */
    public function setNumber($number)
    {
      $this->number = $number;
      return $this;
    }

    /**
     * @return agentNameType
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param agentNameType $name
     * @return \App\Asic\agentType
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
