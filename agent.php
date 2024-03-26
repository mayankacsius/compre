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
     * @param fssAccountType $account
     * @param boolean $removeAgent
     * @param manager $manager
     */
    public function __construct($account, $removeAgent, $manager)
    {
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

}
