<?php

namespace App\Asic;

class standardHeaderType
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
     * @var date $dateReceived
     */
    protected $dateReceived = null;

    /**
     * @var time $timeReceived
     */
    protected $timeReceived = null;

    /**
     * @var boolean $enteredByAsic
     */
    protected $enteredByAsic = null;

    /**
     * @var date $dateCommenced
     */
    protected $dateCommenced = null;

    /**
     * @var time $timeCommenced
     */
    protected $timeCommenced = null;

    /**
     * @var date $dateSubmitted
     */
    protected $dateSubmitted = null;

    /**
     * @var time $timeSubmitted
     */
    protected $timeSubmitted = null;

    /**
     * @param messageType $messageType
     * @param messageVersion $messageVersion
     * @param originatingChannelType $originatingChannel
     * @param originatingServiceType $originatingService
     */
    public function __construct($messageType, $messageVersion, $originatingChannel, $originatingService)
    {
      $this->messageType = $messageType;
      $this->messageVersion = $messageVersion;
      $this->originatingChannel = $originatingChannel;
      $this->originatingService = $originatingService;
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
     * @return \App\Asic\standardHeaderType
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
     * @return \App\Asic\standardHeaderType
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
     * @return \App\Asic\standardHeaderType
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
     * @return \App\Asic\standardHeaderType
     */
    public function setOriginatingService($originatingService)
    {
      $this->originatingService = $originatingService;
      return $this;
    }

    /**
     * @return date
     */
    public function getDateReceived()
    {
      return $this->dateReceived;
    }

    /**
     * @param date $dateReceived
     * @return \App\Asic\standardHeaderType
     */
    public function setDateReceived($dateReceived)
    {
      $this->dateReceived = $dateReceived;
      return $this;
    }

    /**
     * @return time
     */
    public function getTimeReceived()
    {
      return $this->timeReceived;
    }

    /**
     * @param time $timeReceived
     * @return \App\Asic\standardHeaderType
     */
    public function setTimeReceived($timeReceived)
    {
      $this->timeReceived = $timeReceived;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnteredByAsic()
    {
      return $this->enteredByAsic;
    }

    /**
     * @param boolean $enteredByAsic
     * @return \App\Asic\standardHeaderType
     */
    public function setEnteredByAsic($enteredByAsic)
    {
      $this->enteredByAsic = $enteredByAsic;
      return $this;
    }

    /**
     * @return date
     */
    public function getDateCommenced()
    {
      return $this->dateCommenced;
    }

    /**
     * @param date $dateCommenced
     * @return \App\Asic\standardHeaderType
     */
    public function setDateCommenced($dateCommenced)
    {
      $this->dateCommenced = $dateCommenced;
      return $this;
    }

    /**
     * @return time
     */
    public function getTimeCommenced()
    {
      return $this->timeCommenced;
    }

    /**
     * @param time $timeCommenced
     * @return \App\Asic\standardHeaderType
     */
    public function setTimeCommenced($timeCommenced)
    {
      $this->timeCommenced = $timeCommenced;
      return $this;
    }

    /**
     * @return date
     */
    public function getDateSubmitted()
    {
      return $this->dateSubmitted;
    }

    /**
     * @param date $dateSubmitted
     * @return \App\Asic\standardHeaderType
     */
    public function setDateSubmitted($dateSubmitted)
    {
      $this->dateSubmitted = $dateSubmitted;
      return $this;
    }

    /**
     * @return time
     */
    public function getTimeSubmitted()
    {
      return $this->timeSubmitted;
    }

    /**
     * @param time $timeSubmitted
     * @return \App\Asic\standardHeaderType
     */
    public function setTimeSubmitted($timeSubmitted)
    {
      $this->timeSubmitted = $timeSubmitted;
      return $this;
    }

}
