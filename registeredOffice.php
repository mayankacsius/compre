<?php

namespace App\Asic;

class registeredOffice
{

    /**
     * @var address $address
     */
    protected $address = null;

    /**
     * @var officeOccupant $officeOccupant
     */
    protected $officeOccupant = null;

    /**
     * @var officeHours $officeHours
     */
    protected $officeHours = null;

    /**
     * @param address $address
     * @param officeOccupant $officeOccupant
     * @param officeHours $officeHours
     */
    public function __construct($address, $officeOccupant, $officeHours)
    {
      $this->address = $address;
      $this->officeOccupant = $officeOccupant;
      $this->officeHours = $officeHours;
    }

    /**
     * @return address
     */
    public function getAddress()
    {
      return $this->address;
    }

    /**
     * @param address $address
     * @return \App\Asic\registeredOffice
     */
    public function setAddress($address)
    {
      $this->address = $address;
      return $this;
    }

    /**
     * @return officeOccupant
     */
    public function getOfficeOccupant()
    {
      return $this->officeOccupant;
    }

    /**
     * @param officeOccupant $officeOccupant
     * @return \App\Asic\registeredOffice
     */
    public function setOfficeOccupant($officeOccupant)
    {
      $this->officeOccupant = $officeOccupant;
      return $this;
    }

    /**
     * @return officeHours
     */
    public function getOfficeHours()
    {
      return $this->officeHours;
    }

    /**
     * @param officeHours $officeHours
     * @return \App\Asic\registeredOffice
     */
    public function setOfficeHours($officeHours)
    {
      $this->officeHours = $officeHours;
      return $this;
    }

}
