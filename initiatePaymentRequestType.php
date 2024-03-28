<?php

namespace App\Asic;

class initiatePaymentRequestType
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
     * @var ID $Id
     */
    protected $Id = null;

    /**
     * @param businessDocumentHeaderType $businessDocumentHeader
     * @param businessDocumentBody $businessDocumentBody
     * @param ID $Id
     */
    public function __construct($businessDocumentHeader, $businessDocumentBody, $Id)
    {
      $this->businessDocumentHeader = $businessDocumentHeader;
      $this->businessDocumentBody = $businessDocumentBody;
      $this->Id = $Id;
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
     * @return \App\Asic\initiatePaymentRequestType
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
     * @return \App\Asic\initiatePaymentRequestType
     */
    public function setBusinessDocumentBody($businessDocumentBody)
    {
      $this->businessDocumentBody = $businessDocumentBody;
      return $this;
    }

    /**
     * @return ID
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param ID $Id
     * @return \App\Asic\initiatePaymentRequestType
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

}
