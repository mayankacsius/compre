<?php

namespace App\Asic;

class softwareInformationType
{

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
     * @param organisationalName $organisationalName
     * @param productName $productName
     * @param productVersion $productVersion
     */
    public function __construct($organisationalName, $productName, $productVersion)
    {
      $this->organisationalName = $organisationalName;
      $this->productName = $productName;
      $this->productVersion = $productVersion;
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
     * @return \App\Asic\softwareInformationType
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
     * @return \App\Asic\softwareInformationType
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
     * @return \App\Asic\softwareInformationType
     */
    public function setProductVersion($productVersion)
    {
      $this->productVersion = $productVersion;
      return $this;
    }

}
