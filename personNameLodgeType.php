<?php

namespace App\Asic;

class personNameLodgeType
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

    /**
     * @param givenNames $givenNames
     * @param familyName $familyName
     */
    public function __construct($givenNames, $familyName)
    {
      $this->givenNames = $givenNames;
      $this->familyName = $familyName;
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
     * @return \App\Asic\personNameLodgeType
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
     * @return \App\Asic\personNameLodgeType
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
     * @return \App\Asic\personNameLodgeType
     */
    public function setFamilyName($familyName)
    {
      $this->familyName = $familyName;
      return $this;
    }

}
