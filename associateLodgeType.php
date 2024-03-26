<?php

namespace App\Asic;

class associateLodgeType
{

    /**
     * @var abrEntityType $abrEntity
     */
    protected $abrEntity = null;

    /**
     * @var individualLodgeType $individual
     */
    protected $individual = null;

    /**
     * @var organisationLodgeType $organisation
     */
    protected $organisation = null;

    /**
     * @var date $startDate
     */
    protected $startDate = null;

    /**
     * @var date $endDate
     */
    protected $endDate = null;

    /**
     * @var partnerAssociateLodgeType[] $partnerAssociate
     */
    protected $partnerAssociate = null;

    /**
     * @param individualLodgeType $individual
     * @param organisationLodgeType $organisation
     */
    public function __construct($individual, $organisation)
    {
      $this->individual = $individual;
      $this->organisation = $organisation;
    }

    /**
     * @return abrEntityType
     */
    public function getAbrEntity()
    {
      return $this->abrEntity;
    }

    /**
     * @param abrEntityType $abrEntity
     * @return \App\Asic\associateLodgeType
     */
    public function setAbrEntity($abrEntity)
    {
      $this->abrEntity = $abrEntity;
      return $this;
    }

    /**
     * @return individualLodgeType
     */
    public function getIndividual()
    {
      return $this->individual;
    }

    /**
     * @param individualLodgeType $individual
     * @return \App\Asic\associateLodgeType
     */
    public function setIndividual($individual)
    {
      $this->individual = $individual;
      return $this;
    }

    /**
     * @return organisationLodgeType
     */
    public function getOrganisation()
    {
      return $this->organisation;
    }

    /**
     * @param organisationLodgeType $organisation
     * @return \App\Asic\associateLodgeType
     */
    public function setOrganisation($organisation)
    {
      $this->organisation = $organisation;
      return $this;
    }

    /**
     * @return date
     */
    public function getStartDate()
    {
      return $this->startDate;
    }

    /**
     * @param date $startDate
     * @return \App\Asic\associateLodgeType
     */
    public function setStartDate($startDate)
    {
      $this->startDate = $startDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getEndDate()
    {
      return $this->endDate;
    }

    /**
     * @param date $endDate
     * @return \App\Asic\associateLodgeType
     */
    public function setEndDate($endDate)
    {
      $this->endDate = $endDate;
      return $this;
    }

    /**
     * @return partnerAssociateLodgeType[]
     */
    public function getPartnerAssociate()
    {
      return $this->partnerAssociate;
    }

    /**
     * @param partnerAssociateLodgeType[] $partnerAssociate
     * @return \App\Asic\associateLodgeType
     */
    public function setPartnerAssociate(array $partnerAssociate = null)
    {
      $this->partnerAssociate = $partnerAssociate;
      return $this;
    }

}
