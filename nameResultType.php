<?php

namespace App\Asic;

class nameResultType
{

    /**
     * @var boolean $nameAvailable
     */
    protected $nameAvailable = null;

    /**
     * @var boolean $nameUnavailable
     */
    protected $nameUnavailable = null;

    /**
     * @var boolean $nameSubjectToNamesDetermination
     */
    protected $nameSubjectToNamesDetermination = null;

    /**
     * @param boolean $nameAvailable
     * @param boolean $nameUnavailable
     * @param boolean $nameSubjectToNamesDetermination
     */
    public function __construct($nameAvailable, $nameUnavailable, $nameSubjectToNamesDetermination)
    {
      $this->nameAvailable = $nameAvailable;
      $this->nameUnavailable = $nameUnavailable;
      $this->nameSubjectToNamesDetermination = $nameSubjectToNamesDetermination;
    }

    /**
     * @return boolean
     */
    public function getNameAvailable()
    {
      return $this->nameAvailable;
    }

    /**
     * @param boolean $nameAvailable
     * @return \App\Asic\nameResultType
     */
    public function setNameAvailable($nameAvailable)
    {
      $this->nameAvailable = $nameAvailable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNameUnavailable()
    {
      return $this->nameUnavailable;
    }

    /**
     * @param boolean $nameUnavailable
     * @return \App\Asic\nameResultType
     */
    public function setNameUnavailable($nameUnavailable)
    {
      $this->nameUnavailable = $nameUnavailable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNameSubjectToNamesDetermination()
    {
      return $this->nameSubjectToNamesDetermination;
    }

    /**
     * @param boolean $nameSubjectToNamesDetermination
     * @return \App\Asic\nameResultType
     */
    public function setNameSubjectToNamesDetermination($nameSubjectToNamesDetermination)
    {
      $this->nameSubjectToNamesDetermination = $nameSubjectToNamesDetermination;
      return $this;
    }

}
