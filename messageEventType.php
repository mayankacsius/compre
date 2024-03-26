<?php

namespace App\Asic;

class messageEventType
{

    /**
     * @var errorCode $errorCode
     */
    protected $errorCode = null;

    /**
     * @var serverityCode $serverityCode
     */
    protected $serverityCode = null;

    /**
     * @var description $description
     */
    protected $description = null;

    /**
     * @var locationPath $locationPath
     */
    protected $locationPath = null;

    /**
     * @var details[] $details
     */
    protected $details = null;

    /**
     * @param errorCode $errorCode
     * @param serverityCode $serverityCode
     * @param description $description
     */
    public function __construct($errorCode, $serverityCode, $description)
    {
      $this->errorCode = $errorCode;
      $this->serverityCode = $serverityCode;
      $this->description = $description;
    }

    /**
     * @return errorCode
     */
    public function getErrorCode()
    {
      return $this->errorCode;
    }

    /**
     * @param errorCode $errorCode
     * @return \App\Asic\messageEventType
     */
    public function setErrorCode($errorCode)
    {
      $this->errorCode = $errorCode;
      return $this;
    }

    /**
     * @return serverityCode
     */
    public function getServerityCode()
    {
      return $this->serverityCode;
    }

    /**
     * @param serverityCode $serverityCode
     * @return \App\Asic\messageEventType
     */
    public function setServerityCode($serverityCode)
    {
      $this->serverityCode = $serverityCode;
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
     * @return \App\Asic\messageEventType
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return locationPath
     */
    public function getLocationPath()
    {
      return $this->locationPath;
    }

    /**
     * @param locationPath $locationPath
     * @return \App\Asic\messageEventType
     */
    public function setLocationPath($locationPath)
    {
      $this->locationPath = $locationPath;
      return $this;
    }

    /**
     * @return details[]
     */
    public function getDetails()
    {
      return $this->details;
    }

    /**
     * @param details[] $details
     * @return \App\Asic\messageEventType
     */
    public function setDetails(array $details = null)
    {
      $this->details = $details;
      return $this;
    }

}
