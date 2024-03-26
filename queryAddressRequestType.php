<?php

namespace App\Asic;

class queryAddressRequestType
{

    /**
     * @var businessDocumentHeaderType $businessDocumentHeader
     */
    protected $businessDocumentHeader = null;

    /**
     * @var requestDataType $businessDocumentBody
     */
    protected $businessDocumentBody = null;

    /**
     * @var ID $Id
     */
    protected $Id = null;

    /**
     * @param businessDocumentHeaderType $businessDocumentHeader
     * @param ID $Id
     */
    public function __construct($businessDocumentHeader, $Id)
    {
      $this->businessDocumentHeader = $businessDocumentHeader;
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
     * @return \App\Asic\queryAddressRequestType
     */
    public function setBusinessDocumentHeader($businessDocumentHeader)
    {
      $this->businessDocumentHeader = $businessDocumentHeader;
      return $this;
    }

    /**
     * @return requestDataType
     */
    public function getBusinessDocumentBody()
    {
      return $this->businessDocumentBody;
    }

    /**
     * @param requestDataType $businessDocumentBody
     * @return \App\Asic\queryAddressRequestType
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
     * @return \App\Asic\queryAddressRequestType
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

}
