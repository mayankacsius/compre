<?php

namespace App\Asic;

class objectionType
{

    /**
     * @var code $code
     */
    protected $code = null;

    /**
     * @var descriptions $descriptions
     */
    protected $descriptions = null;

    /**
     * @var context $context
     */
    protected $context = null;

    /**
     * @param code $code
     * @param descriptions $descriptions
     */
    public function __construct($code, $descriptions)
    {
      $this->code = $code;
      $this->descriptions = $descriptions;
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
     * @return \App\Asic\objectionType
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return descriptions
     */
    public function getDescriptions()
    {
      return $this->descriptions;
    }

    /**
     * @param descriptions $descriptions
     * @return \App\Asic\objectionType
     */
    public function setDescriptions($descriptions)
    {
      $this->descriptions = $descriptions;
      return $this;
    }

    /**
     * @return context
     */
    public function getContext()
    {
      return $this->context;
    }

    /**
     * @param context $context
     * @return \App\Asic\objectionType
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

}
