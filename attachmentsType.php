<?php

namespace App\Asic;

class attachmentsType
{

    /**
     * @var attachmentType[] $attachment
     */
    protected $attachment = null;

    /**
     * @param attachmentType[] $attachment
     */
    public function __construct(array $attachment)
    {
      $this->attachment = $attachment;
    }

    /**
     * @return attachmentType[]
     */
    public function getAttachment()
    {
      return $this->attachment;
    }

    /**
     * @param attachmentType[] $attachment
     * @return \App\Asic\attachmentsType
     */
    public function setAttachment(array $attachment)
    {
      $this->attachment = $attachment;
      return $this;
    }

}
