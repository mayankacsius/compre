<?php

namespace App\Asic;

class standardMessageHeaderType
{

    /**
     * @var messageType $messageType
     */
    protected $messageType = null;

    /**
     * @var messageVersion $messageVersion
     */
    protected $messageVersion = null;

    /**
     * @var originatingChannelType $originatingChannel
     */
    protected $originatingChannel = null;

    /**
     * @var originatingServiceType $originatingService
     */
    protected $originatingService = null;

    /**
     * @var transactionId $transactionId
     */
    protected $transactionId = null;

    /**
     * @var operation $operation
     */
    protected $operation = null;

    /**
     * @param messageType $messageType
     * @param messageVersion $messageVersion
     */
    public function __construct($messageType, $messageVersion)
    {
      $this->messageType = $messageType;
      $this->messageVersion = $messageVersion;
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
     * @return \App\Asic\standardMessageHeaderType
     */
    public function setMessageType($messageType)
    {
      $this->messageType = $messageType;
      return $this;
    }

    /**
     * @return messageVersion
     */
    public function getMessageVersion()
    {
      return $this->messageVersion;
    }

    /**
     * @param messageVersion $messageVersion
     * @return \App\Asic\standardMessageHeaderType
     */
    public function setMessageVersion($messageVersion)
    {
      $this->messageVersion = $messageVersion;
      return $this;
    }

    /**
     * @return originatingChannelType
     */
    public function getOriginatingChannel()
    {
      return $this->originatingChannel;
    }

    /**
     * @param originatingChannelType $originatingChannel
     * @return \App\Asic\standardMessageHeaderType
     */
    public function setOriginatingChannel($originatingChannel)
    {
      $this->originatingChannel = $originatingChannel;
      return $this;
    }

    /**
     * @return originatingServiceType
     */
    public function getOriginatingService()
    {
      return $this->originatingService;
    }

    /**
     * @param originatingServiceType $originatingService
     * @return \App\Asic\standardMessageHeaderType
     */
    public function setOriginatingService($originatingService)
    {
      $this->originatingService = $originatingService;
      return $this;
    }

    /**
     * @return transactionId
     */
    public function getTransactionId()
    {
      return $this->transactionId;
    }

    /**
     * @param transactionId $transactionId
     * @return \App\Asic\standardMessageHeaderType
     */
    public function setTransactionId($transactionId)
    {
      $this->transactionId = $transactionId;
      return $this;
    }

    /**
     * @return operation
     */
    public function getOperation()
    {
      return $this->operation;
    }

    /**
     * @param operation $operation
     * @return \App\Asic\standardMessageHeaderType
     */
    public function setOperation($operation)
    {
      $this->operation = $operation;
      return $this;
    }

}
