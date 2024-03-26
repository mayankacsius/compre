<?php

namespace App\Asic;

class context
{

    /**
     * @var line $line
     */
    protected $line = null;

    /**
     * @param line $line
     */
    public function __construct($line)
    {
      $this->line = $line;
    }

    /**
     * @return line
     */
    public function getLine()
    {
      return $this->line;
    }

    /**
     * @param line $line
     * @return \App\Asic\context
     */
    public function setLine($line)
    {
      $this->line = $line;
      return $this;
    }

}
