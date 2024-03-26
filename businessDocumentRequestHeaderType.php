<?php

namespace App\Asic;

class businessDocumentRequestHeaderType
{

    /**
     * @var messageType $messageType
     */
    protected $messageType = null;

    /**
     * @var messageReferenceNumber $messageReferenceNumber
     */
    protected $messageReferenceNumber = null;

    /**
     * @var referenceNoType $asicReferenceNumber
     */
    protected $asicReferenceNumber = null;

    /**
     * @var int $messageVersion
     */
    protected $messageVersion = null;

    /**
     * @var senderId $senderId
     */
    protected $senderId = null;

    /**
     * @var senderType $senderType
     */
    protected $senderType = null;

    /**
     * @var softwareInformationType $softwareInformation
     */
    protected $softwareInformation = null;

    /**
     * @var messageTimestampsType $messageTimestamps
     */
    protected $messageTimestamps = null;

    /**
     * @var attachmentsType $attachments
     */
    protected $attachments = null;

    /**
     * @param messageType $messageType
     * @param messageReferenceNumber $messageReferenceNumber
     * @param int $messageVersion
     * @param senderId $senderId
     * @param senderType $senderType
     */
    public function __construct($messageType, $messageReferenceNumber, $messageVersion, $senderId, $senderType)
    {
      $this->messageType = $messageType;
      $this->messageReferenceNumber = $messageReferenceNumber;
      $this->messageVersion = $messageVersion;
      $this->senderId = $senderId;
      $this->senderType = $senderType;
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
     * @return \App\Asic\businessDocumentRequestHeaderType
     */
    public function setMessageType($messageType)
    {
      $this->messageType = $messageType;
      return $this;
    }

    /**
     * @return messageReferenceNumber
     */
    public function getMessageReferenceNumber()
    {
      return $this->messageReferenceNumber;
    }

    /**
     * @param messageReferenceNumber $messageReferenceNumber
     * @return \App\Asic\businessDocumentRequestHeaderType
     */
    public function setMessageReferenceNumber($messageReferenceNumber)
    {
      $this->messageReferenceNumber = $messageReferenceNumber;
      return $this;
    }

    /**
     * @return referenceNoType
     */
    public function getAsicReferenceNumber()
    {
      return $this->asicReferenceNumber;
    }

    /**
     * @param referenceNoType $asicReferenceNumber
     * @return \App\Asic\businessDocumentRequestHeaderType
     */
    public function setAsicReferenceNumber($asicReferenceNumber)
    {
      $this->asicReferenceNumber = $asicReferenceNumber;
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
     * @return \App\Asic\businessDocumentRequestHeaderType
     */
    public function setMessageVersion($messageVersion)
    {
      $this->messageVersion = $messageVersion;
      return $this;
    }

    /**
     * @return senderId
     */
    public function getSenderId()
    {
      return $this->senderId;
    }

    /**
     * @param senderId $senderId
     * @return \App\Asic\businessDocumentRequestHeaderType
     */
    public function setSenderId($senderId)
    {
      $this->senderId = $senderId;
      return $this;
    }

    /**
     * @return senderType
     */
    public function getSenderType()
    {
      return $this->senderType;
    }

    /**
     * @param senderType $senderType
     * @return \App\Asic\businessDocumentRequestHeaderType
     */
    public function setSenderType($senderType)
    {
      $this->senderType = $senderType;
      return $this;
    }

    /**
     * @return softwareInformationType
     */
    public function getSoftwareInformation()
    {
      return $this->softwareInformation;
    }

    /**
     * @param softwareInformationType $softwareInformation
     * @return \App\Asic\businessDocumentRequestHeaderType
     */
    public function setSoftwareInformation($softwareInformation)
    {
      $this->softwareInformation = $softwareInformation;
      return $this;
    }

    /**
     * @return messageTimestampsType
     */
    public function getMessageTimestamps()
    {
      return $this->messageTimestamps;
    }

    /**
     * @param messageTimestampsType $messageTimestamps
     * @return \App\Asic\businessDocumentRequestHeaderType
     */
    public function setMessageTimestamps($messageTimestamps)
    {
      $this->messageTimestamps = $messageTimestamps;
      return $this;
    }

    /**
     * @return attachmentsType
     */
    public function getAttachments()
    {
      return $this->attachments;
    }

    /**
     * @param attachmentsType $attachments
     * @return \App\Asic\businessDocumentRequestHeaderType
     */
    public function setAttachments($attachments)
    {
      $this->attachments = $attachments;
      return $this;
    }

}
