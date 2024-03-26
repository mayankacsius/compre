<?php

namespace App\Asic;

class exceptionListType
{

    /**
     * @var exceptionType[] $item
     */
    protected $item = null;

    /**
     * @param exceptionType[] $item
     */
    public function __construct(array $item)
    {
      $this->item = $item;
    }

    /**
     * @return exceptionType[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param exceptionType[] $item
     * @return \App\Asic\exceptionListType
     */
    public function setItem(array $item)
    {
      $this->item = $item;
      return $this;
    }

}
