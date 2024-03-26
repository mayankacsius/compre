<?php

namespace App\Asic;

class proprietor
{

    /**
     * @var nniNumberType $proprietorAcn
     */
    protected $proprietorAcn = null;

    /**
     * @var abnType $proprietorAbn
     */
    protected $proprietorAbn = null;

    /**
     * @param nniNumberType $proprietorAcn
     * @param abnType $proprietorAbn
     */
    public function __construct($proprietorAcn, $proprietorAbn)
    {
      $this->proprietorAcn = $proprietorAcn;
      $this->proprietorAbn = $proprietorAbn;
    }

    /**
     * @return nniNumberType
     */
    public function getProprietorAcn()
    {
      return $this->proprietorAcn;
    }

    /**
     * @param nniNumberType $proprietorAcn
     * @return \App\Asic\proprietor
     */
    public function setProprietorAcn($proprietorAcn)
    {
      $this->proprietorAcn = $proprietorAcn;
      return $this;
    }

    /**
     * @return abnType
     */
    public function getProprietorAbn()
    {
      return $this->proprietorAbn;
    }

    /**
     * @param abnType $proprietorAbn
     * @return \App\Asic\proprietor
     */
    public function setProprietorAbn($proprietorAbn)
    {
      $this->proprietorAbn = $proprietorAbn;
      return $this;
    }

}
