<?php

namespace App\Asic;

class personIds
{

    /**
     * @var string $personId
     */
    protected $personId = null;

    /**
     * @param string $personId
     */
    public function __construct($personId)
    {
      $this->personId = $personId;
    }

    /**
     * @return string
     */
    public function getPersonId()
    {
      return $this->personId;
    }

    /**
     * @param string $personId
     * @return \App\Asic\personIds
     */
    public function setPersonId($personId)
    {
      $this->personId = $personId;
      return $this;
    }

}
