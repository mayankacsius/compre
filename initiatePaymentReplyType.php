<?php

namespace App\Asic;

class initiatePaymentReplyType
{

    /**
     * @var businessDocumentHeaderType $businessDocumentHeader
     */
    protected $businessDocumentHeader = null;

    /**
     * @var initiatePaymentReplyDataType $businessDocumentBody
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
     * @return \App\Asic\initiatePaymentReplyType
     */
    public function setBusinessDocumentHeader($businessDocumentHeader)
    {
      $this->businessDocumentHeader = $businessDocumentHeader;
      return $this;
    }

    /**
     * @return initiatePaymentReplyDataType
     */
    public function getBusinessDocumentBody()
    {
      return $this->businessDocumentBody;
    }

    /**
     * @param initiatePaymentReplyDataType $businessDocumentBody
     * @return \App\Asic\initiatePaymentReplyType
     */
    public function setBusinessDocumentBody($businessDocumentBody)
    {
      $this->businessDocumentBody = $businessDocumentBody;
      return $this;
    }

}
