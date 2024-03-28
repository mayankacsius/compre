<?php

namespace App\Asic;

class ownershipStructure
{

    /**
     * @var membersGuarantee $membersGuarantee
     */
    protected $membersGuarantee = null;

    /**
     * @var SharesDetailType $shareClasses
     */
    protected $shareClasses = null;

    /**
     * @param membersGuarantee $membersGuarantee
     * @param SharesDetailType $shareClasses
     */
    public function __construct($membersGuarantee, $shareClasses)
    {
      $this->membersGuarantee = $membersGuarantee;
      $this->shareClasses = $shareClasses;
    }

    /**
     * @return membersGuarantee
     */
    public function getMembersGuarantee()
    {
      return $this->membersGuarantee;
    }

    /**
     * @param membersGuarantee $membersGuarantee
     * @return \App\Asic\ownershipStructure
     */
    public function setMembersGuarantee($membersGuarantee)
    {
      $this->membersGuarantee = $membersGuarantee;
      return $this;
    }

    /**
     * @return SharesDetailType
     */
    public function getShareClasses()
    {
      return $this->shareClasses;
    }

    /**
     * @param SharesDetailType $shareClasses
     * @return \App\Asic\ownershipStructure
     */
    public function setShareClasses($shareClasses)
    {
      $this->shareClasses = $shareClasses;
      return $this;
    }

}
