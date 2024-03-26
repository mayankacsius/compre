<?php

namespace App\Asic;

class representativeType
{

    /**
     * @var representativeTypeType $type
     */
    protected $type = null;

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
     * @param representativeTypeType $type
     * @param individualType $individual
     * @param organisationType $organisation
     */
    public function __construct($type, $individual, $organisation)
    {
      $this->type = $type;
      $this->individual = $individual;
      $this->organisation = $organisation;
    }

    /**
     * @return representativeTypeType
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param representativeTypeType $type
     * @return \App\Asic\representativeType
     */
    public function setType($type)
    {
      $this->type = $type;
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
     * @return \App\Asic\representativeType
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
     * @return \App\Asic\representativeType
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
     * @return \App\Asic\representativeType
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
     * @return \App\Asic\representativeType
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
     * @return \App\Asic\representativeType
     */
    public function setAction($action)
    {
      $this->action = $action;
      return $this;
    }

}
