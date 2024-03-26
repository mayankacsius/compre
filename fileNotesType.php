<?php

namespace App\Asic;

class fileNotesType
{

    /**
     * @var line[] $line
     */
    protected $line = null;

    /**
     * @param line[] $line
     */
    public function __construct(array $line)
    {
      $this->line = $line;
    }

    /**
     * @return line[]
     */
    public function getLine()
    {
      return $this->line;
    }

    /**
     * @param line[] $line
     * @return \App\Asic\fileNotesType
     */
    public function setLine(array $line)
    {
      $this->line = $line;
      return $this;
    }

}
