<?php

namespace App\Asic;

class messageTimestampsType
{

    /**
     * @var messageTimestampType[] $messageTimestamp
     */
    protected $messageTimestamp = null;

    /**
     * @param messageTimestampType[] $messageTimestamp
     */
    public function __construct(array $messageTimestamp)
    {
      $this->messageTimestamp = $messageTimestamp;
    }

    /**
     * @return messageTimestampType[]
     */
    public function getMessageTimestamp()
    {
      return $this->messageTimestamp;
    }

    /**
     * @param messageTimestampType[] $messageTimestamp
     * @return \App\Asic\messageTimestampsType
     */
    public function setMessageTimestamp(array $messageTimestamp)
    {
      $this->messageTimestamp = $messageTimestamp;
      return $this;
    }

}
