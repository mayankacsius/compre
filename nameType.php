<?php

namespace App\Asic;

class nameType
{

    /**
     * @var familyName $familyName
     */
    protected $familyName = null;

    /**
     * @var givenName1 $givenName1
     */
    protected $givenName1 = null;

    /**
     * @var givenName2 $givenName2
     */
    protected $givenName2 = null;

    /**
     * @var givenName3 $givenName3
     */
    protected $givenName3 = null;

    /**
     * @param familyName $familyName
     * @param givenName1 $givenName1
     */
    public function __construct($familyName, $givenName1)
    {
      $this->familyName = $familyName;
      $this->givenName1 = $givenName1;
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
     * @return \App\Asic\nameType
     */
    public function setFamilyName($familyName)
    {
      $this->familyName = $familyName;
      return $this;
    }

    /**
     * @return givenName1
     */
    public function getGivenName1()
    {
      return $this->givenName1;
    }

    /**
     * @param givenName1 $givenName1
     * @return \App\Asic\nameType
     */
    public function setGivenName1($givenName1)
    {
      $this->givenName1 = $givenName1;
      return $this;
    }

    /**
     * @return givenName2
     */
    public function getGivenName2()
    {
      return $this->givenName2;
    }

    /**
     * @param givenName2 $givenName2
     * @return \App\Asic\nameType
     */
    public function setGivenName2($givenName2)
    {
      $this->givenName2 = $givenName2;
      return $this;
    }

    /**
     * @return givenName3
     */
    public function getGivenName3()
    {
      return $this->givenName3;
    }

    /**
     * @param givenName3 $givenName3
     * @return \App\Asic\nameType
     */
    public function setGivenName3($givenName3)
    {
      $this->givenName3 = $givenName3;
      return $this;
    }

}
