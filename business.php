<?php

namespace App\Asic;

class business
{

    /**
     * @var date $startDate
     */
    protected $startDate = null;

    /**
     * @var date $endDate
     */
    protected $endDate = null;

    /**
     * @var trueType $agentAppointed
     */
    protected $agentAppointed = null;

    /**
     * @param date $startDate
     * @param date $endDate
     * @param trueType $agentAppointed
     */
    public function __construct($startDate, $endDate, $agentAppointed)
    {
      $this->startDate = $startDate;
      $this->endDate = $endDate;
      $this->agentAppointed = $agentAppointed;
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
     * @return \App\Asic\business
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
     * @return \App\Asic\business
     */
    public function setEndDate($endDate)
    {
      $this->endDate = $endDate;
      return $this;
    }

    /**
     * @return trueType
     */
    public function getAgentAppointed()
    {
      return $this->agentAppointed;
    }

    /**
     * @param trueType $agentAppointed
     * @return \App\Asic\business
     */
    public function setAgentAppointed($agentAppointed)
    {
      $this->agentAppointed = $agentAppointed;
      return $this;
    }

}
