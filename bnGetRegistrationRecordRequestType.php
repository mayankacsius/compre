<?php

namespace App\Asic;

class bnGetRegistrationRecordRequestType
{

    /**
     * @var registrationRecord $registrationRecord
     */
    protected $registrationRecord = null;

    /**
     * @param registrationRecord $registrationRecord
     */
    public function __construct($registrationRecord)
    {
      $this->registrationRecord = $registrationRecord;
    }

    /**
     * @return registrationRecord
     */
    public function getRegistrationRecord()
    {
      return $this->registrationRecord;
    }

    /**
     * @param registrationRecord $registrationRecord
     * @return \App\Asic\bnGetRegistrationRecordRequestType
     */
    public function setRegistrationRecord($registrationRecord)
    {
      $this->registrationRecord = $registrationRecord;
      return $this;
    }

}
