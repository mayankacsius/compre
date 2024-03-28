<?php

namespace App\Asic;

class CompanyLodgeRequestType
{

    /**
     * @var businessDocumentHeaderType $businessDocumentHeader
     */
    protected $businessDocumentHeader = null;

    /**
     * @var CoyLodgeFormType $businessDocumentBody
     */
    protected $businessDocumentBody = null;

    /**
     * @var ID $Id
     */
    protected $Id = null;

    /**
     * @param businessDocumentHeaderType $businessDocumentHeader
     * @param CoyLodgeFormType $businessDocumentBody
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
     * @return \App\Asic\CompanyLodgeRequestType
     */
    public function setBusinessDocumentHeader($businessDocumentHeader)
    {
      $this->businessDocumentHeader = $businessDocumentHeader;
      return $this;
    }

    /**
     * @return CoyLodgeFormType
     */
    public function getBusinessDocumentBody()
    {
      return $this->businessDocumentBody;
    }

    /**
     * @param CoyLodgeFormType $businessDocumentBody
     * @return \App\Asic\CompanyLodgeRequestType
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
     * @return \App\Asic\CompanyLodgeRequestType
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

}
