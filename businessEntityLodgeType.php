<?php

namespace App\Asic;

class businessEntityLodgeType
{

    /**
     * @var abrEntityType $abrEntity
     */
    protected $abrEntity = null;

    /**
     * @var trueType $abnExemption
     */
    protected $abnExemption = null;

    /**
     * @var individualLodgeType $individual
     */
    protected $individual = null;

    /**
     * @var organisationLodgeType $organisation
     */
    protected $organisation = null;

    /**
     * @var ownerType $ownerType
     */
    protected $ownerType = null;

    /**
     * @var associateLodgeType[] $associate
     */
    protected $associate = null;

    /**
     * @var date $dateReview
     */
    protected $dateReview = null;

    /**
     * @param individualLodgeType $individual
     * @param organisationLodgeType $organisation
     * @param ownerType $ownerType
     */
    public function __construct($individual, $organisation, $ownerType)
    {
      $this->individual = $individual;
      $this->organisation = $organisation;
      $this->ownerType = $ownerType;
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
     * @return \App\Asic\businessEntityLodgeType
     */
    public function setAbrEntity($abrEntity)
    {
      $this->abrEntity = $abrEntity;
      return $this;
    }

    /**
     * @return trueType
     */
    public function getAbnExemption()
    {
      return $this->abnExemption;
    }

    /**
     * @param trueType $abnExemption
     * @return \App\Asic\businessEntityLodgeType
     */
    public function setAbnExemption($abnExemption)
    {
      $this->abnExemption = $abnExemption;
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
     * @return \App\Asic\businessEntityLodgeType
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
     * @return \App\Asic\businessEntityLodgeType
     */
    public function setOrganisation($organisation)
    {
      $this->organisation = $organisation;
      return $this;
    }

    /**
     * @return ownerType
     */
    public function getOwnerType()
    {
      return $this->ownerType;
    }

    /**
     * @param ownerType $ownerType
     * @return \App\Asic\businessEntityLodgeType
     */
    public function setOwnerType($ownerType)
    {
      $this->ownerType = $ownerType;
      return $this;
    }

    /**
     * @return associateLodgeType[]
     */
    public function getAssociate()
    {
      return $this->associate;
    }

    /**
     * @param associateLodgeType[] $associate
     * @return \App\Asic\businessEntityLodgeType
     */
    public function setAssociate(array $associate = null)
    {
      $this->associate = $associate;
      return $this;
    }

    /**
     * @return date
     */
    public function getDateReview()
    {
      return $this->dateReview;
    }

    /**
     * @param date $dateReview
     * @return \App\Asic\businessEntityLodgeType
     */
    public function setDateReview($dateReview)
    {
      $this->dateReview = $dateReview;
      return $this;
    }

}
