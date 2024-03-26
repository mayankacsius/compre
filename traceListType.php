<?php

namespace App\Asic;

class traceListType
{

    /**
     * @var traceType[] $trace
     */
    protected $trace = null;

    /**
     * @param traceType[] $trace
     */
    public function __construct(array $trace)
    {
      $this->trace = $trace;
    }

    /**
     * @return traceType[]
     */
    public function getTrace()
    {
      return $this->trace;
    }

    /**
     * @param traceType[] $trace
     * @return \App\Asic\traceListType
     */
    public function setTrace(array $trace)
    {
      $this->trace = $trace;
      return $this;
    }

}
