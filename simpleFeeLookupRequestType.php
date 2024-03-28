<?php

namespace App\Asic;

class simpleFeeLookupRequestType
{

    /**
     * @var businessDocumentHeaderType $businessDocumentHeader
     */
    protected $businessDocumentHeader = null;

    /**
     * @var businessDocumentBody $businessDocumentBody
     */
    protected $businessDocumentBody = null;

    /**
     * @param businessDocumentHeaderType $businessDocumentHeader
     * @param businessDocumentBody $businessDocumentBody
     */
    public function __construct($businessDocumentHeader, $businessDocumentBody)
    {
      $this->businessDocumentHeader = $businessDocumentHeader;
      $this->businessDocumentBody = $businessDocumentBody;
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
     * @return \App\Asic\simpleFeeLookupRequestType
     */
    public function setBusinessDocumentHeader($businessDocumentHeader)
    {
      $this->businessDocumentHeader = $businessDocumentHeader;
      return $this;
    }

    /**
     * @return businessDocumentBody
     */
    public function getBusinessDocumentBody()
    {
      return $this->businessDocumentBody;
    }

    /**
     * @param businessDocumentBody $businessDocumentBody
     * @return \App\Asic\simpleFeeLookupRequestType
     */
    public function setBusinessDocumentBody($businessDocumentBody)
    {
      $this->businessDocumentBody = $businessDocumentBody;
      return $this;
    }

}
