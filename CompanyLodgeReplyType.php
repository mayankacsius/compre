<?php

namespace App\Asic;

class CompanyLodgeReplyType
{

    /**
     * @var businessDocumentHeaderType $businessDocumentHeader
     */
    protected $businessDocumentHeader = null;

    /**
     * @var CompanyLodgeReplyDataType $businessDocumentBody
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
     * @return \App\Asic\CompanyLodgeReplyType
     */
    public function setBusinessDocumentHeader($businessDocumentHeader)
    {
      $this->businessDocumentHeader = $businessDocumentHeader;
      return $this;
    }

    /**
     * @return CompanyLodgeReplyDataType
     */
    public function getBusinessDocumentBody()
    {
      return $this->businessDocumentBody;
    }

    /**
     * @param CompanyLodgeReplyDataType $businessDocumentBody
     * @return \App\Asic\CompanyLodgeReplyType
     */
    public function setBusinessDocumentBody($businessDocumentBody)
    {
      $this->businessDocumentBody = $businessDocumentBody;
      return $this;
    }

}
