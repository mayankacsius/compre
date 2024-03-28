<?php

namespace App\Asic;

class EntityNameType
{

    /**
     * @var organisationDetail $organisationDetail
     */
    protected $organisationDetail = null;

    /**
     * @var personNameType $personDetail
     */
    protected $personDetail = null;

    /**
     * @param organisationDetail $organisationDetail
     * @param personNameType $personDetail
     */
    public function __construct($organisationDetail, $personDetail)
    {
      $this->organisationDetail = $organisationDetail;
      $this->personDetail = $personDetail;
    }

    /**
     * @return organisationDetail
     */
    public function getOrganisationDetail()
    {
      return $this->organisationDetail;
    }

    /**
     * @param organisationDetail $organisationDetail
     * @return \App\Asic\EntityNameType
     */
    public function setOrganisationDetail($organisationDetail)
    {
      $this->organisationDetail = $organisationDetail;
      return $this;
    }

    /**
     * @return personNameType
     */
    public function getPersonDetail()
    {
      return $this->personDetail;
    }

    /**
     * @param personNameType $personDetail
     * @return \App\Asic\EntityNameType
     */
    public function setPersonDetail($personDetail)
    {
      $this->personDetail = $personDetail;
      return $this;
    }

}
