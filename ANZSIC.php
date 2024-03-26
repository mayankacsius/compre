<?php

namespace App\Asic;

class ANZSIC
{

    /**
     * @var ANZSICdescriptionType $mainActivityDescription
     */
    protected $mainActivityDescription = null;

    /**
     * @var ANZSICCodeType $mainIndustryCode
     */
    protected $mainIndustryCode = null;

    /**
     * @var ANZSICCodeType $code
     */
    protected $code = null;

    /**
     * @var ANZSICdescriptionType $description
     */
    protected $description = null;

    /**
     * @param ANZSICdescriptionType $mainActivityDescription
     * @param ANZSICCodeType $mainIndustryCode
     * @param ANZSICCodeType $code
     * @param ANZSICdescriptionType $description
     */
    public function __construct($mainActivityDescription, $mainIndustryCode, $code, $description)
    {
      $this->mainActivityDescription = $mainActivityDescription;
      $this->mainIndustryCode = $mainIndustryCode;
      $this->code = $code;
      $this->description = $description;
    }

    /**
     * @return ANZSICdescriptionType
     */
    public function getMainActivityDescription()
    {
      return $this->mainActivityDescription;
    }

    /**
     * @param ANZSICdescriptionType $mainActivityDescription
     * @return \App\Asic\ANZSIC
     */
    public function setMainActivityDescription($mainActivityDescription)
    {
      $this->mainActivityDescription = $mainActivityDescription;
      return $this;
    }

    /**
     * @return ANZSICCodeType
     */
    public function getMainIndustryCode()
    {
      return $this->mainIndustryCode;
    }

    /**
     * @param ANZSICCodeType $mainIndustryCode
     * @return \App\Asic\ANZSIC
     */
    public function setMainIndustryCode($mainIndustryCode)
    {
      $this->mainIndustryCode = $mainIndustryCode;
      return $this;
    }

    /**
     * @return ANZSICCodeType
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param ANZSICCodeType $code
     * @return \App\Asic\ANZSIC
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return ANZSICdescriptionType
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param ANZSICdescriptionType $description
     * @return \App\Asic\ANZSIC
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

}
