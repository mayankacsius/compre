<?php

namespace App\Asic;

class bnLinkFormType
{

    /**
     * @var abnType $abn
     */
    protected $abn = null;

    /**
     * @var nniNumberType $nniNumber
     */
    protected $nniNumber = null;

    /**
     * @var agentType $agent
     */
    protected $agent = null;

    /**
     * @var action $action
     */
    protected $action = null;

    /**
     * @var signatoryType $signatory
     */
    protected $signatory = null;

    /**
     * @var fileNotesType $fileNotes
     */
    protected $fileNotes = null;

    /**
     * @param abnType $abn
     * @param nniNumberType $nniNumber
     * @param agentType $agent
     * @param action $action
     */
    public function __construct($abn, $nniNumber, $agent, $action)
    {
      $this->abn = $abn;
      $this->nniNumber = $nniNumber;
      $this->agent = $agent;
      $this->action = $action;
    }

    /**
     * @return abnType
     */
    public function getAbn()
    {
      return $this->abn;
    }

    /**
     * @param abnType $abn
     * @return \App\Asic\bnLinkFormType
     */
    public function setAbn($abn)
    {
      $this->abn = $abn;
      return $this;
    }

    /**
     * @return nniNumberType
     */
    public function getNniNumber()
    {
      return $this->nniNumber;
    }

    /**
     * @param nniNumberType $nniNumber
     * @return \App\Asic\bnLinkFormType
     */
    public function setNniNumber($nniNumber)
    {
      $this->nniNumber = $nniNumber;
      return $this;
    }

    /**
     * @return agentType
     */
    public function getAgent()
    {
      return $this->agent;
    }

    /**
     * @param agentType $agent
     * @return \App\Asic\bnLinkFormType
     */
    public function setAgent($agent)
    {
      $this->agent = $agent;
      return $this;
    }

    /**
     * @return action
     */
    public function getAction()
    {
      return $this->action;
    }

    /**
     * @param action $action
     * @return \App\Asic\bnLinkFormType
     */
    public function setAction($action)
    {
      $this->action = $action;
      return $this;
    }

    /**
     * @return signatoryType
     */
    public function getSignatory()
    {
      return $this->signatory;
    }

    /**
     * @param signatoryType $signatory
     * @return \App\Asic\bnLinkFormType
     */
    public function setSignatory($signatory)
    {
      $this->signatory = $signatory;
      return $this;
    }

    /**
     * @return fileNotesType
     */
    public function getFileNotes()
    {
      return $this->fileNotes;
    }

    /**
     * @param fileNotesType $fileNotes
     * @return \App\Asic\bnLinkFormType
     */
    public function setFileNotes($fileNotes)
    {
      $this->fileNotes = $fileNotes;
      return $this;
    }

}
