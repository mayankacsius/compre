<?php

namespace App\Asic;

class itemSearchScopeType
{

    /**
     * @var itemTypeType $itemType
     */
    protected $itemType = null;

    /**
     * @var messageType $messageType
     */
    protected $messageType = null;

    /**
     * @var abnType $reportingEntityAbn
     */
    protected $reportingEntityAbn = null;

    /**
     * @var nniNumberType $reportingEntityAcn
     */
    protected $reportingEntityAcn = null;

    /**
     * @var date $dateStart
     */
    protected $dateStart = null;

    /**
     * @var date $dateEnd
     */
    protected $dateEnd = null;

    /**
     * @var trueType $unreadOnly
     */
    protected $unreadOnly = null;

    /**
     * @param itemTypeType $itemType
     */
    public function __construct($itemType)
    {
      $this->itemType = $itemType;
    }

    /**
     * @return itemTypeType
     */
    public function getItemType()
    {
      return $this->itemType;
    }

    /**
     * @param itemTypeType $itemType
     * @return \App\Asic\itemSearchScopeType
     */
    public function setItemType($itemType)
    {
      $this->itemType = $itemType;
      return $this;
    }

    /**
     * @return messageType
     */
    public function getMessageType()
    {
      return $this->messageType;
    }

    /**
     * @param messageType $messageType
     * @return \App\Asic\itemSearchScopeType
     */
    public function setMessageType($messageType)
    {
      $this->messageType = $messageType;
      return $this;
    }

    /**
     * @return abnType
     */
    public function getReportingEntityAbn()
    {
      return $this->reportingEntityAbn;
    }

    /**
     * @param abnType $reportingEntityAbn
     * @return \App\Asic\itemSearchScopeType
     */
    public function setReportingEntityAbn($reportingEntityAbn)
    {
      $this->reportingEntityAbn = $reportingEntityAbn;
      return $this;
    }

    /**
     * @return nniNumberType
     */
    public function getReportingEntityAcn()
    {
      return $this->reportingEntityAcn;
    }

    /**
     * @param nniNumberType $reportingEntityAcn
     * @return \App\Asic\itemSearchScopeType
     */
    public function setReportingEntityAcn($reportingEntityAcn)
    {
      $this->reportingEntityAcn = $reportingEntityAcn;
      return $this;
    }

    /**
     * @return date
     */
    public function getDateStart()
    {
      return $this->dateStart;
    }

    /**
     * @param date $dateStart
     * @return \App\Asic\itemSearchScopeType
     */
    public function setDateStart($dateStart)
    {
      $this->dateStart = $dateStart;
      return $this;
    }

    /**
     * @return date
     */
    public function getDateEnd()
    {
      return $this->dateEnd;
    }

    /**
     * @param date $dateEnd
     * @return \App\Asic\itemSearchScopeType
     */
    public function setDateEnd($dateEnd)
    {
      $this->dateEnd = $dateEnd;
      return $this;
    }

    /**
     * @return trueType
     */
    public function getUnreadOnly()
    {
      return $this->unreadOnly;
    }

    /**
     * @param trueType $unreadOnly
     * @return \App\Asic\itemSearchScopeType
     */
    public function setUnreadOnly($unreadOnly)
    {
      $this->unreadOnly = $unreadOnly;
      return $this;
    }

}
