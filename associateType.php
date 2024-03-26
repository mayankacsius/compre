<?php

namespace App\Asic;

class associateType
{

    /**
     * @var abrEntityType $abrEntity
     */
    protected $abrEntity = null;

    /**
     * @var individualType $individual
     */
    protected $individual = null;

    /**
     * @var organisationType $organisation
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
     * @var updateActionType $action
     */
    protected $action = null;

    /**
     * @var partnerAssociateType[] $partnerAssociate
     */
    protected $partnerAssociate = null;

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
     * @return \App\Asic\associateType
     */
    public function setAbrEntity($abrEntity)
    {
      $this->abrEntity = $abrEntity;
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
     * @return \App\Asic\associateType
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
     * @return \App\Asic\associateType
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
     * @return \App\Asic\associateType
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
     * @return \App\Asic\associateType
     */
    public function setEndDate($endDate)
    {
      $this->endDate = $endDate;
      return $this;
    }

    /**
     * @return updateActionType
     */
    public function getAction()
    {
      return $this->action;
    }

    /**
     * @param updateActionType $action
     * @return \App\Asic\associateType
     */
    public function setAction($action)
    {
      $this->action = $action;
      return $this;
    }

    /**
     * @return partnerAssociateType[]
     */
    public function getPartnerAssociate()
    {
      return $this->partnerAssociate;
    }

    /**
     * @param partnerAssociateType[] $partnerAssociate
     * @return \App\Asic\associateType
     */
    public function setPartnerAssociate(array $partnerAssociate = null)
    {
      $this->partnerAssociate = $partnerAssociate;
      return $this;
    }

}
