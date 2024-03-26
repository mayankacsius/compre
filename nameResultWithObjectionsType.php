<?php

namespace App\Asic;

class nameResultWithObjectionsType extends nameResultType
{

    /**
     * @var objectionType[] $objections
     */
    protected $objections = null;

    /**
     * @param boolean $nameAvailable
     * @param boolean $nameUnavailable
     * @param boolean $nameSubjectToNamesDetermination
     */
    public function __construct($nameAvailable, $nameUnavailable, $nameSubjectToNamesDetermination)
    {
      parent::__construct($nameAvailable, $nameUnavailable, $nameSubjectToNamesDetermination);
    }

    /**
     * @return objectionType[]
     */
    public function getObjections()
    {
      return $this->objections;
    }

    /**
     * @param objectionType[] $objections
     * @return \App\Asic\nameResultWithObjectionsType
     */
    public function setObjections(array $objections = null)
    {
      $this->objections = $objections;
      return $this;
    }

}
