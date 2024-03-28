<?php

namespace App\Asic;

class UtlimateHoldingCompanyType
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
     * @var placeOfIncorporation $placeOfIncorporation
     */
    protected $placeOfIncorporation = null;

    /**
     * @var abnType $abn
     */
    protected $abn = null;

    /**
     * @param name $name
     * @param placeOfIncorporation $placeOfIncorporation
     */
    public function __construct($name, $placeOfIncorporation)
    {
      $this->name = $name;
      $this->placeOfIncorporation = $placeOfIncorporation;
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
     * @return \App\Asic\UtlimateHoldingCompanyType
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
     * @return \App\Asic\UtlimateHoldingCompanyType
     */
    public function setAcn($acn)
    {
      $this->acn = $acn;
      return $this;
    }

    /**
     * @return placeOfIncorporation
     */
    public function getPlaceOfIncorporation()
    {
      return $this->placeOfIncorporation;
    }

    /**
     * @param placeOfIncorporation $placeOfIncorporation
     * @return \App\Asic\UtlimateHoldingCompanyType
     */
    public function setPlaceOfIncorporation($placeOfIncorporation)
    {
      $this->placeOfIncorporation = $placeOfIncorporation;
      return $this;
    }

    /**
     * @return abnType
     */
    public function getAbn()
    {
      return $this->abn;
    }

    /**
     * @param abnType $abn
     * @return \App\Asic\UtlimateHoldingCompanyType
     */
    public function setAbn($abn)
    {
      $this->abn = $abn;
      return $this;
    }

}
