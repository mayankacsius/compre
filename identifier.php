<?php

namespace App\Asic;

class identifier
{

    /**
     * @var browserIdentifierType $browser
     */
    protected $browser = null;

    /**
     * @var soapSoftwareIdentifierType $soap
     */
    protected $soap = null;

    /**
     * @var trueType $internal
     */
    protected $internal = null;

    /**
     * @param browserIdentifierType $browser
     * @param soapSoftwareIdentifierType $soap
     * @param trueType $internal
     */
    public function __construct($browser, $soap, $internal)
    {
      $this->browser = $browser;
      $this->soap = $soap;
      $this->internal = $internal;
    }

    /**
     * @return browserIdentifierType
     */
    public function getBrowser()
    {
      return $this->browser;
    }

    /**
     * @param browserIdentifierType $browser
     * @return \App\Asic\identifier
     */
    public function setBrowser($browser)
    {
      $this->browser = $browser;
      return $this;
    }

    /**
     * @return soapSoftwareIdentifierType
     */
    public function getSoap()
    {
      return $this->soap;
    }

    /**
     * @param soapSoftwareIdentifierType $soap
     * @return \App\Asic\identifier
     */
    public function setSoap($soap)
    {
      $this->soap = $soap;
      return $this;
    }

    /**
     * @return trueType
     */
    public function getInternal()
    {
      return $this->internal;
    }

    /**
     * @param trueType $internal
     * @return \App\Asic\identifier
     */
    public function setInternal($internal)
    {
      $this->internal = $internal;
      return $this;
    }

}
