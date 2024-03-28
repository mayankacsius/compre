<?php

namespace App\Asic;

class applicantDetail
{

    /**
     * @var EntityNameType $applicantName
     */
    protected $applicantName = null;

    /**
     * @var contact $contact
     */
    protected $contact = null;

    /**
     * @param EntityNameType $applicantName
     * @param contact $contact
     */
    public function __construct($applicantName, $contact)
    {
      $this->applicantName = $applicantName;
      $this->contact = $contact;
    }

    /**
     * @return EntityNameType
     */
    public function getApplicantName()
    {
      return $this->applicantName;
    }

    /**
     * @param EntityNameType $applicantName
     * @return \App\Asic\applicantDetail
     */
    public function setApplicantName($applicantName)
    {
      $this->applicantName = $applicantName;
      return $this;
    }

    /**
     * @return contact
     */
    public function getContact()
    {
      return $this->contact;
    }

    /**
     * @param contact $contact
     * @return \App\Asic\applicantDetail
     */
    public function setContact($contact)
    {
      $this->contact = $contact;
      return $this;
    }

}
