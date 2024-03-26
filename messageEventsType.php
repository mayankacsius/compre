<?php

namespace App\Asic;

class messageEventsType
{

    /**
     * @var messageEventType[] $messageEvent
     */
    protected $messageEvent = null;

    /**
     * @param messageEventType[] $messageEvent
     */
    public function __construct(array $messageEvent)
    {
      $this->messageEvent = $messageEvent;
    }

    /**
     * @return messageEventType[]
     */
    public function getMessageEvent()
    {
      return $this->messageEvent;
    }

    /**
     * @param messageEventType[] $messageEvent
     * @return \App\Asic\messageEventsType
     */
    public function setMessageEvent(array $messageEvent)
    {
      $this->messageEvent = $messageEvent;
      return $this;
    }

}
