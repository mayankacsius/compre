<?php

namespace App\Asic;

class nameAvailabilityResponseType
{

    /**
     * @var code $code
     */
    protected $code = null;

    /**
     * @var shortDescription $shortDescription
     */
    protected $shortDescription = null;

    /**
     * @var longDescription $longDescription
     */
    protected $longDescription = null;

    /**
     * @var objectionType[] $objection
     */
    protected $objection = null;

    /**
     * @param code $code
     * @param shortDescription $shortDescription
     */
    public function __construct($code, $shortDescription)
    {
      $this->code = $code;
      $this->shortDescription = $shortDescription;
    }

    /**
     * @return code
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param code $code
     * @return \App\Asic\nameAvailabilityResponseType
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return shortDescription
     */
    public function getShortDescription()
    {
      return $this->shortDescription;
    }

    /**
     * @param shortDescription $shortDescription
     * @return \App\Asic\nameAvailabilityResponseType
     */
    public function setShortDescription($shortDescription)
    {
      $this->shortDescription = $shortDescription;
      return $this;
    }

    /**
     * @return longDescription
     */
    public function getLongDescription()
    {
      return $this->longDescription;
    }

    /**
     * @param longDescription $longDescription
     * @return \App\Asic\nameAvailabilityResponseType
     */
    public function setLongDescription($longDescription)
    {
      $this->longDescription = $longDescription;
      return $this;
    }

    /**
     * @return objectionType[]
     */
    public function getObjection()
    {
      return $this->objection;
    }

    /**
     * @param objectionType[] $objection
     * @return \App\Asic\nameAvailabilityResponseType
     */
    public function setObjection(array $objection = null)
    {
      $this->objection = $objection;
      return $this;
    }

}
