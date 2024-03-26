<?php

namespace App\Asic;

class exceptionType
{

    /**
     * @var code $code
     */
    protected $code = null;

    /**
     * @var severity $severity
     */
    protected $severity = null;

    /**
     * @var description $description
     */
    protected $description = null;

    /**
     * @var userDescription $userDescription
     */
    protected $userDescription = null;

    /**
     * @var context $context
     */
    protected $context = null;

    /**
     * @var nodeXPath $nodeXPath
     */
    protected $nodeXPath = null;

    /**
     * @param code $code
     * @param severity $severity
     * @param description $description
     */
    public function __construct($code, $severity, $description)
    {
      $this->code = $code;
      $this->severity = $severity;
      $this->description = $description;
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
     * @return \App\Asic\exceptionType
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return severity
     */
    public function getSeverity()
    {
      return $this->severity;
    }

    /**
     * @param severity $severity
     * @return \App\Asic\exceptionType
     */
    public function setSeverity($severity)
    {
      $this->severity = $severity;
      return $this;
    }

    /**
     * @return description
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param description $description
     * @return \App\Asic\exceptionType
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return userDescription
     */
    public function getUserDescription()
    {
      return $this->userDescription;
    }

    /**
     * @param userDescription $userDescription
     * @return \App\Asic\exceptionType
     */
    public function setUserDescription($userDescription)
    {
      $this->userDescription = $userDescription;
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
     * @return \App\Asic\exceptionType
     */
    public function setContext($context)
    {
      $this->context = $context;
      return $this;
    }

    /**
     * @return nodeXPath
     */
    public function getNodeXPath()
    {
      return $this->nodeXPath;
    }

    /**
     * @param nodeXPath $nodeXPath
     * @return \App\Asic\exceptionType
     */
    public function setNodeXPath($nodeXPath)
    {
      $this->nodeXPath = $nodeXPath;
      return $this;
    }

}
