<?php

namespace App\Asic;

class shareholders
{

    /**
     * @var shareholderType $shareholder
     */
    protected $shareholder = null;

    /**
     * @param shareholderType $shareholder
     */
    public function __construct($shareholder)
    {
      $this->shareholder = $shareholder;
    }

    /**
     * @return shareholderType
     */
    public function getShareholder()
    {
      return $this->shareholder;
    }

    /**
     * @param shareholderType $shareholder
     * @return \App\Asic\shareholders
     */
    public function setShareholder($shareholder)
    {
      $this->shareholder = $shareholder;
      return $this;
    }

}
