<?php

namespace App\Asic;

class agent
{

   /**
     * @var fssAccountType $account
     */
    protected $account = null;

    /**
     * @var boolean $removeAgent
     */
    protected $removeAgent = null;

    /**
     * @var manager $manager

     */
    protected $manager = null;

    /**
     * @var asicNumericIdType $agentNo
     */
    protected $agentNo = null;

    /**
     * @var nniNameType $agentName
     */
    protected $agentName = null;

    /**
     * @param asicNumericIdType $agentNo
     * @param nniNameType $agentName
     * @param fssAccountType $account
     * @param boolean $removeAgent
     * @param manager $manager
     */
    public function __construct($agentNo = null, $agentName = null, $account = null, $removeAgent = null, $manager = null)
    {
      $this->agentNo = $agentNo;
      $this->agentName = $agentName;
      $this->account = $account;
      $this->removeAgent = $removeAgent;
      $this->manager = $manager;
    }

    /**
     * @return fssAccountType
     */
    public function getAccount()
    {
      return $this->account;
    }

    /**
     * @param fssAccountType $account
     * @return \App\Asic\agent
     */
    public function setAccount($account)
    {
      $this->account = $account;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRemoveAgent()
    {
      return $this->removeAgent;
    }

    /**
     * @param boolean $removeAgent
     * @return \App\Asic\agent
     */
    public function setRemoveAgent($removeAgent)
    {
      $this->removeAgent = $removeAgent;
      return $this;
    }

    /**
     * @return manager
     */
    public function getManager()
    {
      return $this->manager;
    }

    /**
     * @param manager $manager
     * @return \App\Asic\agent
     */
    public function setManager($manager)
    {
      $this->manager = $manager;
      return $this;
    }

    /**
     * @return asicNumericIdType
     */
    public function getAgentNo()
    {
      return $this->agentNo;
    }

    /**
     * @param asicNumericIdType $agentNo
     * @return \App\Asic\agent
     */
    public function setAgentNo($agentNo)
    {
      $this->agentNo = $agentNo;
      return $this;
    }

    /**
     * @return nniNameType
     */
    public function getAgentName()
    {
      return $this->agentName;
    }

    /**
     * @param nniNameType $agentName
     * @return \App\Asic\agent
     */
    public function setAgentName($agentName)
    {
      $this->agentName = $agentName;
      return $this;
    }

}
