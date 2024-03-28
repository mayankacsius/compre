<?php

namespace App\Asic;

class proposedCompanyName
{

    /**
     * @var ACNAsName $ACNAsName
     */
    protected $ACNAsName = null;

    /**
     * @var nniNameInputType $companyName
     */
    protected $companyName = null;

    /**
     * @param ACNAsName $ACNAsName
     * @param nniNameInputType $companyName
     */
    public function __construct($ACNAsName, $companyName)
    {
      $this->ACNAsName = $ACNAsName;
      $this->companyName = $companyName;
    }

    /**
     * @return ACNAsName
     */
    public function getACNAsName()
    {
      return $this->ACNAsName;
    }

    /**
     * @param ACNAsName $ACNAsName
     * @return \App\Asic\proposedCompanyName
     */
    public function setACNAsName($ACNAsName)
    {
      $this->ACNAsName = $ACNAsName;
      return $this;
    }

    /**
     * @return nniNameInputType
     */
    public function getCompanyName()
    {
      return $this->companyName;
    }

    /**
     * @param nniNameInputType $companyName
     * @return \App\Asic\proposedCompanyName
     */
    public function setCompanyName($companyName)
    {
      $this->companyName = $companyName;
      return $this;
    }

}
