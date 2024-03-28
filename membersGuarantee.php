<?php

namespace App\Asic;

class membersGuarantee
{

    /**
     * @var membersGuaranteeType $membersGuaranteeAmount
     */
    protected $membersGuaranteeAmount = null;

    /**
     * @var MemberType $nonShareMembers
     */
    protected $nonShareMembers = null;

    /**
     * @param membersGuaranteeType $membersGuaranteeAmount
     * @param MemberType $nonShareMembers
     */
    public function __construct($membersGuaranteeAmount, $nonShareMembers)
    {
      $this->membersGuaranteeAmount = $membersGuaranteeAmount;
      $this->nonShareMembers = $nonShareMembers;
    }

    /**
     * @return membersGuaranteeType
     */
    public function getMembersGuaranteeAmount()
    {
      return $this->membersGuaranteeAmount;
    }

    /**
     * @param membersGuaranteeType $membersGuaranteeAmount
     * @return \App\Asic\membersGuarantee
     */
    public function setMembersGuaranteeAmount($membersGuaranteeAmount)
    {
      $this->membersGuaranteeAmount = $membersGuaranteeAmount;
      return $this;
    }

    /**
     * @return MemberType
     */
    public function getNonShareMembers()
    {
      return $this->nonShareMembers;
    }

    /**
     * @param MemberType $nonShareMembers
     * @return \App\Asic\membersGuarantee
     */
    public function setNonShareMembers($nonShareMembers)
    {
      $this->nonShareMembers = $nonShareMembers;
      return $this;
    }

}
