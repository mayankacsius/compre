<?php

namespace App\Asic;

class members
{

    /**
     * @var MemberType $member
     */
    protected $member = null;

    /**
     * @param MemberType $member
     */
    public function __construct($member)
    {
      $this->member = $member;
    }

    /**
     * @return MemberType
     */
    public function getMember()
    {
      return $this->member;
    }

    /**
     * @param MemberType $member
     * @return \App\Asic\members
     */
    public function setMember($member)
    {
      $this->member = $member;
      return $this;
    }

}
