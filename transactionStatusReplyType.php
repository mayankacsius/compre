<?php

namespace App\Asic;

class transactionStatusReplyType
{

    /**
     * @var businessDocumentHeaderType $businessDocumentHeader
     */
    protected $businessDocumentHeader = null;

    /**
     * @var transactionStatusReplyDataType $businessDocumentBody
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
     * @return \App\Asic\transactionStatusReplyType
     */
    public function setBusinessDocumentHeader($businessDocumentHeader)
    {
      $this->businessDocumentHeader = $businessDocumentHeader;
      return $this;
    }

    /**
     * @return transactionStatusReplyDataType
     */
    public function getBusinessDocumentBody()
    {
      return $this->businessDocumentBody;
    }

    /**
     * @param transactionStatusReplyDataType $businessDocumentBody
     * @return \App\Asic\transactionStatusReplyType
     */
    public function setBusinessDocumentBody($businessDocumentBody)
    {
      $this->businessDocumentBody = $businessDocumentBody;
      return $this;
    }

}
