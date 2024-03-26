<?php

namespace App\Asic;

class documentIdentifierType
{

    /**
     * @var ebusiness $ebusiness
     */
    protected $ebusiness = null;

    /**
     * @var ascot $ascot
     */
    protected $ascot = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ebusiness
     */
    public function getEbusiness()
    {
      return $this->ebusiness;
    }

    /**
     * @param ebusiness $ebusiness
     * @return \App\Asic\documentIdentifierType
     */
    public function setEbusiness($ebusiness)
    {
      $this->ebusiness = $ebusiness;
      return $this;
    }

    /**
     * @return ascot
     */
    public function getAscot()
    {
      return $this->ascot;
    }

    /**
     * @param ascot $ascot
     * @return \App\Asic\documentIdentifierType
     */
    public function setAscot($ascot)
    {
      $this->ascot = $ascot;
      return $this;
    }

}
