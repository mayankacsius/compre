<?php

namespace App\Asic;

class businessEntityType
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
     * @var individualType $individual
     */
    protected $individual = null;

    /**
     * @var organisationType $organisation
     */
    protected $organisation = null;

    /**
     * @var ownerType $ownerType
     */
    protected $ownerType = null;

    /**
     * @var associateType[] $associate
     */
    protected $associate = null;

    /**
     * @var date $dateReview
     */
    protected $dateReview = null;

    /**
     * @param individualType $individual
     * @param organisationType $organisation
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
     * @return \App\Asic\businessEntityType
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
     * @return \App\Asic\businessEntityType
     */
    public function setAbnExemption($abnExemption)
    {
      $this->abnExemption = $abnExemption;
      return $this;
    }

    /**
     * @return individualType
     */
    public function getIndividual()
    {
      return $this->individual;
    }

    /**
     * @param individualType $individual
     * @return \App\Asic\businessEntityType
     */
    public function setIndividual($individual)
    {
      $this->individual = $individual;
      return $this;
    }

    /**
     * @return organisationType
     */
    public function getOrganisation()
    {
      return $this->organisation;
    }

    /**
     * @param organisationType $organisation
     * @return \App\Asic\businessEntityType
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
     * @return \App\Asic\businessEntityType
     */
    public function setOwnerType($ownerType)
    {
      $this->ownerType = $ownerType;
      return $this;
    }

    /**
     * @return associateType[]
     */
    public function getAssociate()
    {
      return $this->associate;
    }

    /**
     * @param associateType[] $associate
     * @return \App\Asic\businessEntityType
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
     * @return \App\Asic\businessEntityType
     */
    public function setDateReview($dateReview)
    {
      $this->dateReview = $dateReview;
      return $this;
    }

}
