<?php

namespace App\Asic;

class physicalAddress
{

    /**
     * @var floorNumber $floorNumber
     */
    protected $floorNumber = null;

    /**
     * @var propertyName $propertyName
     */
    protected $propertyName = null;

    /**
     * @var unitOrOfficeNumber $unitOrOfficeNumber
     */
    protected $unitOrOfficeNumber = null;

    /**
     * @var streetNumber $streetNumber
     */
    protected $streetNumber = null;

    /**
     * @var streetName $streetName
     */
    protected $streetName = null;

    /**
     * @var streetType $streetType
     */
    protected $streetType = null;

    /**
     * @var postalDeliveryType $postalDeliveryType
     */
    protected $postalDeliveryType = null;

    /**
     * @var postalDeliveryNumber $postalDeliveryNumber
     */
    protected $postalDeliveryNumber = null;

    /**
     * @var string $locality
     */
    protected $locality = null;

    /**
     * @var stateTerritoryCodeType $state
     */
    protected $state = null;

    /**
     * @var postCode $postCode
     */
    protected $postCode = null;

    /**
     * @param floorNumber $floorNumber
     * @param propertyName $propertyName
     * @param unitOrOfficeNumber $unitOrOfficeNumber
     * @param streetNumber $streetNumber
     * @param streetName $streetName
     * @param streetType $streetType
     * @param postalDeliveryType $postalDeliveryType
     * @param postalDeliveryNumber $postalDeliveryNumber
     * @param string $locality
     * @param stateTerritoryCodeType $state
     * @param postCode $postCode
     */
    public function __construct($floorNumber, $propertyName, $unitOrOfficeNumber, $streetNumber, $streetName, $streetType, $postalDeliveryType, $postalDeliveryNumber, $locality, $state, $postCode)
    {
      $this->floorNumber = $floorNumber;
      $this->propertyName = $propertyName;
      $this->unitOrOfficeNumber = $unitOrOfficeNumber;
      $this->streetNumber = $streetNumber;
      $this->streetName = $streetName;
      $this->streetType = $streetType;
      $this->postalDeliveryType = $postalDeliveryType;
      $this->postalDeliveryNumber = $postalDeliveryNumber;
      $this->locality = $locality;
      $this->state = $state;
      $this->postCode = $postCode;
    }

    /**
     * @return floorNumber
     */
    public function getFloorNumber()
    {
      return $this->floorNumber;
    }

    /**
     * @param floorNumber $floorNumber
     * @return \App\Asic\physicalAddress
     */
    public function setFloorNumber($floorNumber)
    {
      $this->floorNumber = $floorNumber;
      return $this;
    }

    /**
     * @return propertyName
     */
    public function getPropertyName()
    {
      return $this->propertyName;
    }

    /**
     * @param propertyName $propertyName
     * @return \App\Asic\physicalAddress
     */
    public function setPropertyName($propertyName)
    {
      $this->propertyName = $propertyName;
      return $this;
    }

    /**
     * @return unitOrOfficeNumber
     */
    public function getUnitOrOfficeNumber()
    {
      return $this->unitOrOfficeNumber;
    }

    /**
     * @param unitOrOfficeNumber $unitOrOfficeNumber
     * @return \App\Asic\physicalAddress
     */
    public function setUnitOrOfficeNumber($unitOrOfficeNumber)
    {
      $this->unitOrOfficeNumber = $unitOrOfficeNumber;
      return $this;
    }

    /**
     * @return streetNumber
     */
    public function getStreetNumber()
    {
      return $this->streetNumber;
    }

    /**
     * @param streetNumber $streetNumber
     * @return \App\Asic\physicalAddress
     */
    public function setStreetNumber($streetNumber)
    {
      $this->streetNumber = $streetNumber;
      return $this;
    }

    /**
     * @return streetName
     */
    public function getStreetName()
    {
      return $this->streetName;
    }

    /**
     * @param streetName $streetName
     * @return \App\Asic\physicalAddress
     */
    public function setStreetName($streetName)
    {
      $this->streetName = $streetName;
      return $this;
    }

    /**
     * @return streetType
     */
    public function getStreetType()
    {
      return $this->streetType;
    }

    /**
     * @param streetType $streetType
     * @return \App\Asic\physicalAddress
     */
    public function setStreetType($streetType)
    {
      $this->streetType = $streetType;
      return $this;
    }

    /**
     * @return postalDeliveryType
     */
    public function getPostalDeliveryType()
    {
      return $this->postalDeliveryType;
    }

    /**
     * @param postalDeliveryType $postalDeliveryType
     * @return \App\Asic\physicalAddress
     */
    public function setPostalDeliveryType($postalDeliveryType)
    {
      $this->postalDeliveryType = $postalDeliveryType;
      return $this;
    }

    /**
     * @return postalDeliveryNumber
     */
    public function getPostalDeliveryNumber()
    {
      return $this->postalDeliveryNumber;
    }

    /**
     * @param postalDeliveryNumber $postalDeliveryNumber
     * @return \App\Asic\physicalAddress
     */
    public function setPostalDeliveryNumber($postalDeliveryNumber)
    {
      $this->postalDeliveryNumber = $postalDeliveryNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocality()
    {
      return $this->locality;
    }

    /**
     * @param string $locality
     * @return \App\Asic\physicalAddress
     */
    public function setLocality($locality)
    {
      $this->locality = $locality;
      return $this;
    }

    /**
     * @return stateTerritoryCodeType
     */
    public function getState()
    {
      return $this->state;
    }

    /**
     * @param stateTerritoryCodeType $state
     * @return \App\Asic\physicalAddress
     */
    public function setState($state)
    {
      $this->state = $state;
      return $this;
    }

    /**
     * @return postCode
     */
    public function getPostCode()
    {
      return $this->postCode;
    }

    /**
     * @param postCode $postCode
     * @return \App\Asic\physicalAddress
     */
    public function setPostCode($postCode)
    {
      $this->postCode = $postCode;
      return $this;
    }

}
