<?php

namespace App\Asic;

class organisationDetail
{

    /**
     * @var name $name
     */
    protected $name = null;

    /**
     * @var nniNumberType $acn
     */
    protected $acn = null;

    /**
     * @param name $name
     * @param nniNumberType $acn
     */
    public function __construct($name, $acn)
    {
      $this->name = $name;
      $this->acn = $acn;
    }

    /**
     * @return name
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param name $name
     * @return \App\Asic\organisationDetail
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return nniNumberType
     */
    public function getAcn()
    {
      return $this->acn;
    }

    /**
     * @param nniNumberType $acn
     * @return \App\Asic\organisationDetail
     */
    public function setAcn($acn)
    {
      $this->acn = $acn;
      return $this;
    }

}
