<?php

namespace App\Asic;

class OrganisationExtType extends organisationType
{

    /**
     * @var abnType $abn
     */
    protected $abn = null;

    /**
     * @var placeOfIncorporation $placeOfIncorporation
     */
    protected $placeOfIncorporation = null;

    /**
     * @param name $name
     * @param placeOfIncorporation $placeOfIncorporation
     */
    public function __construct($name, $placeOfIncorporation)
    {
      parent::__construct($name);
      $this->placeOfIncorporation = $placeOfIncorporation;
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
     * @return \App\Asic\OrganisationExtType
     */
    public function setAbn($abn)
    {
      $this->abn = $abn;
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
     * @return \App\Asic\OrganisationExtType
     */
    public function setPlaceOfIncorporation($placeOfIncorporation)
    {
      $this->placeOfIncorporation = $placeOfIncorporation;
      return $this;
    }

}
