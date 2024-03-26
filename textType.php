<?php

namespace App\Asic;

class textType
{

    /**
     * @var para[] $para
     */
    protected $para = null;

    /**
     * @param para[] $para
     */
    public function __construct(array $para)
    {
      $this->para = $para;
    }

    /**
     * @return para[]
     */
    public function getPara()
    {
      return $this->para;
    }

    /**
     * @param para[] $para
     * @return \App\Asic\textType
     */
    public function setPara(array $para)
    {
      $this->para = $para;
      return $this;
    }

}
