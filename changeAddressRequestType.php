<?php

namespace App\Asic;

class changeAddressRequestType
{

    /**
     * @var businessDocumentHeaderType $businessDocumentHeader
     */
    protected $businessDocumentHeader = null;

    /**
     * @var bnChangeAddressType $businessDocumentBody
     */
    protected $businessDocumentBody = null;

    /**
     * @var ID $Id
     */
    protected $Id = null;

    /**
     * @param businessDocumentHeaderType $businessDocumentHeader
     * @param bnChangeAddressType $businessDocumentBody
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
     * @return \App\Asic\changeAddressRequestType
     */
    public function setBusinessDocumentHeader($businessDocumentHeader)
    {
      $this->businessDocumentHeader = $businessDocumentHeader;
      return $this;
    }

    /**
     * @return bnChangeAddressType
     */
    public function getBusinessDocumentBody()
    {
      return $this->businessDocumentBody;
    }

    /**
     * @param bnChangeAddressType $businessDocumentBody
     * @return \App\Asic\changeAddressRequestType
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
     * @return \App\Asic\changeAddressRequestType
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

}
