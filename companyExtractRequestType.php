<?php

namespace App\Asic;

class companyExtractRequestType
{

    /**
     * @var abnType $abn
     */
    protected $abn = null;

    /**
     * @var nniNumberType $acn
     */
    protected $acn = null;

    /**
     * @var company $company
     */
    protected $company = null;

    /**
     * @var trueType $formerNames
     */
    protected $formerNames = null;

    /**
     * @var trueType $businessNames
     */
    protected $businessNames = null;

    /**
     * @var document $document
     */
    protected $document = null;

    /**
     * @param abnType $abn
     * @param nniNumberType $acn
     */
    public function __construct($abn, $acn)
    {
      $this->abn = $abn;
      $this->acn = $acn;
    }

    /**
     * @return abnType
     */
    public function getAbn()
    {
      return $this->abn;
    }

    /**
     * @param abnType $abn
     * @return \App\Asic\companyExtractRequestType
     */
    public function setAbn($abn)
    {
      $this->abn = $abn;
      return $this;
    }

    /**
     * @return nniNumberType
     */
    public function getAcn()
    {
      return $this->acn;
    }

    /**
     * @param nniNumberType $acn
     * @return \App\Asic\companyExtractRequestType
     */
    public function setAcn($acn)
    {
      $this->acn = $acn;
      return $this;
    }

    /**
     * @return company
     */
    public function getCompany()
    {
      return $this->company;
    }

    /**
     * @param company $company
     * @return \App\Asic\companyExtractRequestType
     */
    public function setCompany($company)
    {
      $this->company = $company;
      return $this;
    }

    /**
     * @return trueType
     */
    public function getFormerNames()
    {
      return $this->formerNames;
    }

    /**
     * @param trueType $formerNames
     * @return \App\Asic\companyExtractRequestType
     */
    public function setFormerNames($formerNames)
    {
      $this->formerNames = $formerNames;
      return $this;
    }

    /**
     * @return trueType
     */
    public function getBusinessNames()
    {
      return $this->businessNames;
    }

    /**
     * @param trueType $businessNames
     * @return \App\Asic\companyExtractRequestType
     */
    public function setBusinessNames($businessNames)
    {
      $this->businessNames = $businessNames;
      return $this;
    }

    /**
     * @return document
     */
    public function getDocument()
    {
      return $this->document;
    }

    /**
     * @param document $document
     * @return \App\Asic\companyExtractRequestType
     */
    public function setDocument($document)
    {
      $this->document = $document;
      return $this;
    }

}
