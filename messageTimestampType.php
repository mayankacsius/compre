<?php

namespace App\Asic;

class messageTimestampType
{

    /**
     * @var \DateTime $timestamp
     */
    protected $timestamp = null;

    /**
     * @var source $source
     */
    protected $source = null;

    /**
     * @param \DateTime $timestamp
     * @param source $source
     */
    public function __construct(\DateTime $timestamp, $source)
    {
      $this->timestamp = $timestamp->format(\DateTime::ATOM);
      $this->source = $source;
    }

    /**
     * @return \DateTime
     */
    public function getTimestamp()
    {
      if ($this->timestamp == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->timestamp);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $timestamp
     * @return \App\Asic\messageTimestampType
     */
    public function setTimestamp(\DateTime $timestamp)
    {
      $this->timestamp = $timestamp->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return source
     */
    public function getSource()
    {
      return $this->source;
    }

    /**
     * @param source $source
     * @return \App\Asic\messageTimestampType
     */
    public function setSource($source)
    {
      $this->source = $source;
      return $this;
    }

}
