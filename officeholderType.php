<?php

namespace App\Asic;

class OfficeHolderType extends personNameFormerNameType
{

    /**
     * @var birthDetailsExtType $birthDetail
     */
    protected $birthDetail = null;

    /**
     * @var address $address
     */
    protected $address = null;

    /**
     * @var role[] $role
     */
    protected $role = null;

    /**
     * @param personNameType $name
     * @param birthDetailsExtType $birthDetail
     * @param address $address
     * @param role[] $role
     */
    public function __construct($name, $birthDetail, $address, array $role)
    {
      parent::__construct($name);
      $this->birthDetail = $birthDetail;
      $this->address = $address;
      $this->role = $role;
    }

    /**
     * @return birthDetailsExtType
     */
    public function getBirthDetail()
    {
      return $this->birthDetail;
    }

    /**
     * @param birthDetailsExtType $birthDetail
     * @return \App\Asic\OfficeHolderType
     */
    public function setBirthDetail($birthDetail)
    {
      $this->birthDetail = $birthDetail;
      return $this;
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
     * @return \App\Asic\OfficeHolderType
     */
    public function setAddress($address)
    {
      $this->address = $address;
      return $this;
    }

    /**
     * @return role[]
     */
    public function getRole()
    {
      return $this->role;
    }

    /**
     * @param role[] $role
     * @return \App\Asic\OfficeHolderType
     */
    public function setRole(array $role)
    {
      $this->role = $role;
      return $this;
    }

}
