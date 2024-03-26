<?php

namespace App\Asic;

class searchNniNameReplyType
{

    /**
     * @var businessDocumentHeaderType $businessDocumentHeader
     */
    protected $businessDocumentHeader = null;

    /**
     * @var replyDataType $businessDocumentBody
     */
    protected $businessDocumentBody = null;

    /**
     * @param businessDocumentHeaderType $businessDocumentHeader
     */
    public function __construct($businessDocumentHeader)
    {
      $this->businessDocumentHeader = $businessDocumentHeader;
    }

    /**
     * @return businessDocumentHeaderType
     */
    public function getBusinessDocumentHeader()
    {
      return $this->businessDocumentHeader;
    }

    /**
     * @param businessDocumentHeaderType $businessDocumentHeader
     * @return \App\Asic\searchNniNameReplyType
     */
    public function setBusinessDocumentHeader($businessDocumentHeader)
    {
      $this->businessDocumentHeader = $businessDocumentHeader;
      return $this;
    }

    /**
     * @return replyDataType
     */
    public function getBusinessDocumentBody()
    {
      return $this->businessDocumentBody;
    }

    /**
     * @param replyDataType $businessDocumentBody
     * @return \App\Asic\searchNniNameReplyType
     */
    public function setBusinessDocumentBody($businessDocumentBody)
    {
      $this->businessDocumentBody = $businessDocumentBody;
      return $this;
    }

}
