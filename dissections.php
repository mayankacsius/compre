<?php

namespace App\Asic;

class dissections
{

    /**
     * @var dissection $dissection
     */
    protected $dissection = null;

    /**
     * @param dissection $dissection
     */
    public function __construct($dissection)
    {
      $this->dissection = $dissection;
    }

    /**
     * @return dissection
     */
    public function getDissection()
    {
      return $this->dissection;
    }

    /**
     * @param dissection $dissection
     * @return \App\Asic\dissections
     */
    public function setDissection($dissection)
    {
      $this->dissection = $dissection;
      return $this;
    }

}
