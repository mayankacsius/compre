<?php

namespace App\Asic;

class CoyLodgeFormType
{

    /**
     * @var RegistrationDetailsType $registrationDetail
     */
    protected $registrationDetail = null;

    /**
     * @var applicant $applicant
     */
    protected $applicant = null;

    /**
     * @var RegistrationAdministrativeDetailType $administrativeDetail
     */
    protected $administrativeDetail = null;

    /**
     * @var companySignatoryType $signature
     */
    protected $signature = null;

    /**
     * @param RegistrationDetailsType $registrationDetail
     * @param applicant $applicant
     * @param companySignatoryType $signature
     */
    public function __construct($registrationDetail, $applicant, $signature)
    {
      $this->registrationDetail = $registrationDetail;
      $this->applicant = $applicant;
      $this->signature = $signature;
    }

    /**
     * @return RegistrationDetailsType
     */
    public function getRegistrationDetail()
    {
      return $this->registrationDetail;
    }

    /**
     * @param RegistrationDetailsType $registrationDetail
     * @return \App\Asic\CoyLodgeFormType
     */
    public function setRegistrationDetail($registrationDetail)
    {
      $this->registrationDetail = $registrationDetail;
      return $this;
    }

    /**
     * @return applicant
     */
    public function getApplicant()
    {
      return $this->applicant;
    }

    /**
     * @param applicant $applicant
     * @return \App\Asic\CoyLodgeFormType
     */
    public function setApplicant($applicant)
    {
      $this->applicant = $applicant;
      return $this;
    }

    /**
     * @return RegistrationAdministrativeDetailType
     */
    public function getAdministrativeDetail()
    {
      return $this->administrativeDetail;
    }

    /**
     * @param RegistrationAdministrativeDetailType $administrativeDetail
     * @return \App\Asic\CoyLodgeFormType
     */
    public function setAdministrativeDetail($administrativeDetail)
    {
      $this->administrativeDetail = $administrativeDetail;
      return $this;
    }

    /**
     * @return companySignatoryType
     */
    public function getSignature()
    {
      return $this->signature;
    }

    /**
     * @param companySignatoryType $signature
     * @return \App\Asic\CoyLodgeFormType
     */
    public function setSignature($signature)
    {
      $this->signature = $signature;
      return $this;
    }

}
