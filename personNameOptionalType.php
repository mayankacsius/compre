<?php

namespace App\Asic;

class personNameOptionalType
{

    /**
     * @var givenNames $givenNames
     */
    protected $givenNames = null;

    /**
     * @var otherGivenNames $otherGivenNames
     */
    protected $otherGivenNames = null;

    /**
     * @var familyName $familyName
     */
    protected $familyName = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return givenNames
     */
    public function getGivenNames()
    {
      return $this->givenNames;
    }

    /**
     * @param givenNames $givenNames
     * @return \App\Asic\personNameOptionalType
     */
    public function setGivenNames($givenNames)
    {
      $this->givenNames = $givenNames;
      return $this;
    }

    /**
     * @return otherGivenNames
     */
    public function getOtherGivenNames()
    {
      return $this->otherGivenNames;
    }

    /**
     * @param otherGivenNames $otherGivenNames
     * @return \App\Asic\personNameOptionalType
     */
    public function setOtherGivenNames($otherGivenNames)
    {
      $this->otherGivenNames = $otherGivenNames;
      return $this;
    }

    /**
     * @return familyName
     */
    public function getFamilyName()
    {
      return $this->familyName;
    }

    /**
     * @param familyName $familyName
     * @return \App\Asic\personNameOptionalType
     */
    public function setFamilyName($familyName)
    {
      $this->familyName = $familyName;
      return $this;
    }

}
