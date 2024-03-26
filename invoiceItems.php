<?php

namespace App\Asic;

class invoiceItems
{

    /**
     * @var item $item
     */
    protected $item = null;

    /**
     * @param item $item
     */
    public function __construct($item)
    {
      $this->item = $item;
    }

    /**
     * @return item
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param item $item
     * @return \App\Asic\invoiceItems
     */
    public function setItem($item)
    {
      $this->item = $item;
      return $this;
    }

}
