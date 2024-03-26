<?php

namespace App\Asic;

class soapSoftwareIdentifierType
{

    /**
     * @var externalReferenceNumber $externalReferenceNumber
     */
    protected $externalReferenceNumber = null;

    /**
     * @var organisationalName $organisationalName
     */
    protected $organisationalName = null;

    /**
     * @var productName $productName
     */
    protected $productName = null;

    /**
     * @var productVersion $productVersion
     */
    protected $productVersion = null;

    /**
     * @var asicNumericIdType $asicSoftwareNo
     */
    protected $asicSoftwareNo = null;

    /**
     * @param externalReferenceNumber $externalReferenceNumber
     */
    public function __construct($externalReferenceNumber)
    {
      $this->externalReferenceNumber = $externalReferenceNumber;
    }

    /**
     * @return externalReferenceNumber
     */
    public function getExternalReferenceNumber()
    {
      return $this->externalReferenceNumber;
    }

    /**
     * @param externalReferenceNumber $externalReferenceNumber
     * @return \App\Asic\soapSoftwareIdentifierType
     */
    public function setExternalReferenceNumber($externalReferenceNumber)
    {
      $this->externalReferenceNumber = $externalReferenceNumber;
      return $this;
    }

    /**
     * @return organisationalName
     */
    public function getOrganisationalName()
    {
      return $this->organisationalName;
    }

    /**
     * @param organisationalName $organisationalName
     * @return \App\Asic\soapSoftwareIdentifierType
     */
    public function setOrganisationalName($organisationalName)
    {
      $this->organisationalName = $organisationalName;
      return $this;
    }

    /**
     * @return productName
     */
    public function getProductName()
    {
      return $this->productName;
    }

    /**
     * @param productName $productName
     * @return \App\Asic\soapSoftwareIdentifierType
     */
    public function setProductName($productName)
    {
      $this->productName = $productName;
      return $this;
    }

    /**
     * @return productVersion
     */
    public function getProductVersion()
    {
      return $this->productVersion;
    }

    /**
     * @param productVersion $productVersion
     * @return \App\Asic\soapSoftwareIdentifierType
     */
    public function setProductVersion($productVersion)
    {
      $this->productVersion = $productVersion;
      return $this;
    }

    /**
     * @return asicNumericIdType
     */
    public function getAsicSoftwareNo()
    {
      return $this->asicSoftwareNo;
    }

    /**
     * @param asicNumericIdType $asicSoftwareNo
     * @return \App\Asic\soapSoftwareIdentifierType
     */
    public function setAsicSoftwareNo($asicSoftwareNo)
    {
      $this->asicSoftwareNo = $asicSoftwareNo;
      return $this;
    }

}
