<?php

namespace App\Asic;

class businessDocumentHeaderType
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
     * @var string $asicReferenceNumber
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
     * @var messageEventsType $messageEvents
     */
    protected $messageEvents = null;

    /**
     * @var genericResultType $result
     */
    protected $result = null;

    /**
     * @var attachmentsType $attachments
     */
    protected $attachments = null;

    /**
     * @var receiptType $receipt
     */
    protected $receipt = null;

    /**
     * @var string $asicTransactionNumber
     */
    protected $asicTransactionNumber = null;

    /**
     * @var transactionReferenceNumber $transactionReferenceNumber
     */
    protected $transactionReferenceNumber = null;

    /**
     * @var processMode $processMode
     */
    protected $processMode = null;

    /**
     * @var abrsTransactionNumber $abrsTransactionNumber
     */
    protected $abrsTransactionNumber = null;

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
     * @return \App\Asic\businessDocumentHeaderType
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
     * @return \App\Asic\businessDocumentHeaderType
     */
    public function setMessageReferenceNumber($messageReferenceNumber)
    {
      $this->messageReferenceNumber = $messageReferenceNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getAsicReferenceNumber()
    {
      return $this->asicReferenceNumber;
    }

    /**
     * @param string $asicReferenceNumber
     * @return \App\Asic\businessDocumentHeaderType
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
     * @return \App\Asic\businessDocumentHeaderType
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
     * @return \App\Asic\businessDocumentHeaderType
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
     * @return \App\Asic\businessDocumentHeaderType
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
     * @return \App\Asic\businessDocumentHeaderType
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
     * @return \App\Asic\businessDocumentHeaderType
     */
    public function setMessageTimestamps($messageTimestamps)
    {
      $this->messageTimestamps = $messageTimestamps;
      return $this;
    }

    /**
     * @return messageEventsType
     */
    public function getMessageEvents()
    {
      return $this->messageEvents;
    }

    /**
     * @param messageEventsType $messageEvents
     * @return \App\Asic\businessDocumentHeaderType
     */
    public function setMessageEvents($messageEvents)
    {
      $this->messageEvents = $messageEvents;
      return $this;
    }

    /**
     * @return genericResultType
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param genericResultType $result
     * @return \App\Asic\businessDocumentHeaderType
     */
    public function setResult($result)
    {
      $this->result = $result;
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
     * @return \App\Asic\businessDocumentHeaderType
     */
    public function setAttachments($attachments)
    {
      $this->attachments = $attachments;
      return $this;
    }

    /**
     * @return receiptType
     */
    public function getReceipt()
    {
      return $this->receipt;
    }

    /**
     * @param receiptType $receipt
     * @return \App\Asic\businessDocumentHeaderType
     */
    public function setReceipt($receipt)
    {
      $this->receipt = $receipt;
      return $this;
    }

    /**
     * @return string
     */
    public function getAsicTransactionNumber()
    {
      return $this->asicTransactionNumber;
    }

    /**
     * @param string $asicTransactionNumber
     * @return \App\Asic\businessDocumentHeaderType
     */
    public function setAsicTransactionNumber($asicTransactionNumber)
    {
      $this->asicTransactionNumber = $asicTransactionNumber;
      return $this;
    }

    /**
     * @return transactionReferenceNumber
     */
    public function getTransactionReferenceNumber()
    {
      return $this->transactionReferenceNumber;
    }

    /**
     * @param transactionReferenceNumber $transactionReferenceNumber
     * @return \App\Asic\businessDocumentHeaderType
     */
    public function setTransactionReferenceNumber($transactionReferenceNumber)
    {
      $this->transactionReferenceNumber = $transactionReferenceNumber;
      return $this;
    }

    /**
     * @return processMode
     */
    public function getProcessMode()
    {
      return $this->processMode;
    }

    /**
     * @param processMode $processMode
     * @return \App\Asic\businessDocumentHeaderType
     */
    public function setProcessMode($processMode)
    {
      $this->processMode = $processMode;
      return $this;
    }

    /**
     * @return abrsTransactionNumber
     */
    public function getAbrsTransactionNumber()
    {
      return $this->abrsTransactionNumber;
    }

    /**
     * @param abrsTransactionNumber $abrsTransactionNumber
     * @return \App\Asic\businessDocumentHeaderType
     */
    public function setAbrsTransactionNumber($abrsTransactionNumber)
    {
      $this->abrsTransactionNumber = $abrsTransactionNumber;
      return $this;
    }

}
