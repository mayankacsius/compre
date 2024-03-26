<?php

namespace App\Asic;

class traceType
{

    /**
     * @var \DateTime $dateTime
     */
    protected $dateTime = null;

    /**
     * @var source $source
     */
    protected $source = null;

    /**
     * @var text $text
     */
    protected $text = null;

    /**
     * @param source $source
     * @param text $text
     */
    public function __construct($source, $text)
    {
      $this->source = $source;
      $this->text = $text;
    }

    /**
     * @return \DateTime
     */
    public function getDateTime()
    {
      if ($this->dateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->dateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $dateTime
     * @return \App\Asic\traceType
     */
    public function setDateTime(\DateTime $dateTime = null)
    {
      if ($dateTime == null) {
       $this->dateTime = null;
      } else {
        $this->dateTime = $dateTime->format(\DateTime::ATOM);
      }
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
     * @return \App\Asic\traceType
     */
    public function setSource($source)
    {
      $this->source = $source;
      return $this;
    }

    /**
     * @return text
     */
    public function getText()
    {
      return $this->text;
    }

    /**
     * @param text $text
     * @return \App\Asic\traceType
     */
    public function setText($text)
    {
      $this->text = $text;
      return $this;
    }

}
