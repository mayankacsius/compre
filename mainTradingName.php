<?php

namespace App\Asic;

class mainTradingName
{

    /**
     * @var organisation $organisation
     */
    protected $organisation = null;

    /**
     * @param organisation $organisation
     */
    public function __construct($organisation)
    {
      $this->organisation = $organisation;
    }

    /**
     * @return organisation
     */
    public function getOrganisation()
    {
      return $this->organisation;
    }

    /**
     * @param organisation $organisation
     * @return \App\Asic\mainTradingName
     */
    public function setOrganisation($organisation)
    {
      $this->organisation = $organisation;
      return $this;
    }

}
