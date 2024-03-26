<?php

namespace App\Asic;

class companyType extends nameIndexEntityType
{

    /**
     * @var officeholders $officeholders
     */
    protected $officeholders = null;

    /**
     * @var shareholders $shareholders
     */
    protected $shareholders = null;

    /**
     * @var outboundBusinessNameType[] $businessNames
     */
    protected $businessNames = null;

    /**
     * @param identifierType $identifier
     * @param distinguishedNameType $name
     * @param nniTypeType $type
     * @param statusType $status
     */
    public function __construct($identifier, $name, $type, $status)
    {
      parent::__construct($identifier, $name, $type, $status);
    }

    /**
     * @return officeholders
     */
    public function getOfficeholders()
    {
      return $this->officeholders;
    }

    /**
     * @param officeholders $officeholders
     * @return \App\Asic\companyType
     */
    public function setOfficeholders($officeholders)
    {
      $this->officeholders = $officeholders;
      return $this;
    }

    /**
     * @return shareholders
     */
    public function getShareholders()
    {
      return $this->shareholders;
    }

    /**
     * @param shareholders $shareholders
     * @return \App\Asic\companyType
     */
    public function setShareholders($shareholders)
    {
      $this->shareholders = $shareholders;
      return $this;
    }

    /**
     * @return outboundBusinessNameType[]
     */
    public function getBusinessNames()
    {
      return $this->businessNames;
    }

    /**
     * @param outboundBusinessNameType[] $businessNames
     * @return \App\Asic\companyType
     */
    public function setBusinessNames(array $businessNames = null)
    {
      $this->businessNames = $businessNames;
      return $this;
    }

}
