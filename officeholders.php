<?php

namespace App\Asic;

class officeholders
{

    /**
     * @var officeholderType $officeholder
     */
    protected $officeholder = null;

    /**
     * @param officeholderType $officeholder
     */
    public function __construct($officeholder)
    {
      $this->officeholder = $officeholder;
    }

    /**
     * @return officeholderType
     */
    public function getOfficeholder()
    {
      return $this->officeholder;
    }

    /**
     * @param officeholderType $officeholder
     * @return \App\Asic\officeholders
     */
    public function setOfficeholder($officeholder)
    {
      $this->officeholder = $officeholder;
      return $this;
    }

}
