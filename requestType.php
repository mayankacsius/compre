<?php

namespace App\Asic;

class requestType
{

    /**
     * @var standardMessageHeaderType $messageHeader
     */
    protected $messageHeader = null;

    /**
     * @var messageIdentifierType $messageIdentifier
     */
    protected $messageIdentifier = null;

    /**
     * @var timestampListType $timestampList
     */
    protected $timestampList = null;

    /**
     * @param standardMessageHeaderType $messageHeader
     */
    public function __construct($messageHeader)
    {
      $this->messageHeader = $messageHeader;
    }

    /**
     * @return standardMessageHeaderType
     */
    public function getMessageHeader()
    {
      return $this->messageHeader;
    }

    /**
     * @param standardMessageHeaderType $messageHeader
     * @return \App\Asic\requestType
     */
    public function setMessageHeader($messageHeader)
    {
      $this->messageHeader = $messageHeader;
      return $this;
    }

    /**
     * @return messageIdentifierType
     */
    public function getMessageIdentifier()
    {
      return $this->messageIdentifier;
    }

    /**
     * @param messageIdentifierType $messageIdentifier
     * @return \App\Asic\requestType
     */
    public function setMessageIdentifier($messageIdentifier)
    {
      $this->messageIdentifier = $messageIdentifier;
      return $this;
    }

    /**
     * @return timestampListType
     */
    public function getTimestampList()
    {
      return $this->timestampList;
    }

    /**
     * @param timestampListType $timestampList
     * @return \App\Asic\requestType
     */
    public function setTimestampList($timestampList)
    {
      $this->timestampList = $timestampList;
      return $this;
    }

}
