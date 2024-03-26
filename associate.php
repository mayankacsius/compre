<?php

namespace App\Asic;

class associate
{

    /**
     * @var legalName $legalName
     */
    protected $legalName = null;

    /**
     * @var relationship $relationship
     */
    protected $relationship = null;

    /**
     * @param legalName $legalName
     * @param relationship $relationship
     */
    public function __construct($legalName, $relationship)
    {
      $this->legalName = $legalName;
      $this->relationship = $relationship;
    }

    /**
     * @return legalName
     */
    public function getLegalName()
    {
      return $this->legalName;
    }

    /**
     * @param legalName $legalName
     * @return \App\Asic\associate
     */
    public function setLegalName($legalName)
    {
      $this->legalName = $legalName;
      return $this;
    }

    /**
     * @return relationship
     */
    public function getRelationship()
    {
      return $this->relationship;
    }

    /**
     * @param relationship $relationship
     * @return \App\Asic\associate
     */
    public function setRelationship($relationship)
    {
      $this->relationship = $relationship;
      return $this;
    }

}
