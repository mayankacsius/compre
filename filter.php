<?php

namespace App\Asic;

class filter
{

    /**
     * @var roleCategory $roleCategory
     */
    protected $roleCategory = null;

    /**
     * @var bnSearchStatusCodeType $statusCode
     */
    protected $statusCode = null;

    /**
     * @var locationType $principalPlaceOfBusiness
     */
    protected $principalPlaceOfBusiness = null;

    /**
     * @param roleCategory $roleCategory
     * @param bnSearchStatusCodeType $statusCode
     * @param locationType $principalPlaceOfBusiness
     */
    public function __construct($roleCategory, $statusCode, $principalPlaceOfBusiness)
    {
      $this->roleCategory = $roleCategory;
      $this->statusCode = $statusCode;
      $this->principalPlaceOfBusiness = $principalPlaceOfBusiness;
    }

    /**
     * @return roleCategory
     */
    public function getRoleCategory()
    {
      return $this->roleCategory;
    }

    /**
     * @param roleCategory $roleCategory
     * @return \App\Asic\filter
     */
    public function setRoleCategory($roleCategory)
    {
      $this->roleCategory = $roleCategory;
      return $this;
    }

    /**
     * @return bnSearchStatusCodeType
     */
    public function getStatusCode()
    {
      return $this->statusCode;
    }

    /**
     * @param bnSearchStatusCodeType $statusCode
     * @return \App\Asic\filter
     */
    public function setStatusCode($statusCode)
    {
      $this->statusCode = $statusCode;
      return $this;
    }

    /**
     * @return locationType
     */
    public function getPrincipalPlaceOfBusiness()
    {
      return $this->principalPlaceOfBusiness;
    }

    /**
     * @param locationType $principalPlaceOfBusiness
     * @return \App\Asic\filter
     */
    public function setPrincipalPlaceOfBusiness($principalPlaceOfBusiness)
    {
      $this->principalPlaceOfBusiness = $principalPlaceOfBusiness;
      return $this;
    }

}
