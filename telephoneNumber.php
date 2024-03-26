<?php

namespace App\Asic;

class telephoneNumber
{

    /**
     * @var string $prefix
     */
    protected $prefix = null;

    /**
     * @var string $number
     */
    protected $number = null;

    /**
     * @param string $prefix
     * @param string $number
     */
    public function __construct($prefix, $number)
    {
      $this->prefix = $prefix;
      $this->number = $number;
    }

    /**
     * @return string
     */
    public function getPrefix()
    {
      return $this->prefix;
    }

    /**
     * @param string $prefix
     * @return \App\Asic\telephoneNumber
     */
    public function setPrefix($prefix)
    {
      $this->prefix = $prefix;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
      return $this->number;
    }

    /**
     * @param string $number
     * @return \App\Asic\telephoneNumber
     */
    public function setNumber($number)
    {
      $this->number = $number;
      return $this;
    }

}
