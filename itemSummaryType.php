<?php

namespace App\Asic;

class itemSummaryType
{

    /**
     * @var messageType $messageType
     */
    protected $messageType = null;

    /**
     * @var int $messageVersion
     */
    protected $messageVersion = null;

    /**
     * @var entityType $reportingEntity
     */
    protected $reportingEntity = null;

    /**
     * @var outboundItemIdentifierType $itemIdentifier
     */
    protected $itemIdentifier = null;

    /**
     * @var date $lodgedDate
     */
    protected $lodgedDate = null;

    /**
     * @var resultType $result
     */
    protected $result = null;

    /**
     * @var applicationStatusType $status
     */
    protected $status = null;

    /**
     * @param messageType $messageType
     * @param int $messageVersion
     * @param outboundItemIdentifierType $itemIdentifier
     * @param date $lodgedDate
     */
    public function __construct($messageType, $messageVersion, $itemIdentifier, $lodgedDate)
    {
      $this->messageType = $messageType;
      $this->messageVersion = $messageVersion;
      $this->itemIdentifier = $itemIdentifier;
      $this->lodgedDate = $lodgedDate;
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
     * @return \App\Asic\itemSummaryType
     */
    public function setMessageType($messageType)
    {
      $this->messageType = $messageType;
      return $this;
    }

    /**
     * @return int
     */
    public function getMessageVersion()
    {
      return $this->messageVersion;
    }

    /**
     * @param int $messageVersion
     * @return \App\Asic\itemSummaryType
     */
    public function setMessageVersion($messageVersion)
    {
      $this->messageVersion = $messageVersion;
      return $this;
    }

    /**
     * @return entityType
     */
    public function getReportingEntity()
    {
      return $this->reportingEntity;
    }

    /**
     * @param entityType $reportingEntity
     * @return \App\Asic\itemSummaryType
     */
    public function setReportingEntity($reportingEntity)
    {
      $this->reportingEntity = $reportingEntity;
      return $this;
    }

    /**
     * @return outboundItemIdentifierType
     */
    public function getItemIdentifier()
    {
      return $this->itemIdentifier;
    }

    /**
     * @param outboundItemIdentifierType $itemIdentifier
     * @return \App\Asic\itemSummaryType
     */
    public function setItemIdentifier($itemIdentifier)
    {
      $this->itemIdentifier = $itemIdentifier;
      return $this;
    }

    /**
     * @return date
     */
    public function getLodgedDate()
    {
      return $this->lodgedDate;
    }

    /**
     * @param date $lodgedDate
     * @return \App\Asic\itemSummaryType
     */
    public function setLodgedDate($lodgedDate)
    {
      $this->lodgedDate = $lodgedDate;
      return $this;
    }

    /**
     * @return resultType
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param resultType $result
     * @return \App\Asic\itemSummaryType
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

    /**
     * @return applicationStatusType
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param applicationStatusType $status
     * @return \App\Asic\itemSummaryType
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

}
