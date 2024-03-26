<?php

namespace App\Asic;

class replyType
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
     * @var result $result
     */
    protected $result = null;

    /**
     * @var exceptionListType $exceptionList
     */
    protected $exceptionList = null;

    /**
     * @var traceListType $traceList
     */
    protected $traceList = null;

    /**
     * @var timestampListType $timestampList
     */
    protected $timestampList = null;

    /**
     * @param standardMessageHeaderType $messageHeader
     * @param result $result
     */
    public function __construct($messageHeader, $result)
    {
      $this->messageHeader = $messageHeader;
      $this->result = $result;
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
     * @return \App\Asic\replyType
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
     * @return \App\Asic\replyType
     */
    public function setMessageIdentifier($messageIdentifier)
    {
      $this->messageIdentifier = $messageIdentifier;
      return $this;
    }

    /**
     * @return result
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param result $result
     * @return \App\Asic\replyType
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

    /**
     * @return exceptionListType
     */
    public function getExceptionList()
    {
      return $this->exceptionList;
    }

    /**
     * @param exceptionListType $exceptionList
     * @return \App\Asic\replyType
     */
    public function setExceptionList($exceptionList)
    {
      $this->exceptionList = $exceptionList;
      return $this;
    }

    /**
     * @return traceListType
     */
    public function getTraceList()
    {
      return $this->traceList;
    }

    /**
     * @param traceListType $traceList
     * @return \App\Asic\replyType
     */
    public function setTraceList($traceList)
    {
      $this->traceList = $traceList;
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
     * @return \App\Asic\replyType
     */
    public function setTimestampList($timestampList)
    {
      $this->timestampList = $timestampList;
      return $this;
    }

}
