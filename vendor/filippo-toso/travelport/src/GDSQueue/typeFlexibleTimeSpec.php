<?php

namespace FilippoToso\Travelport\GDSQueue;

class typeFlexibleTimeSpec extends typeTimeSpec
{

    /**
     * @var SearchExtraDays $SearchExtraDays
     */
    protected $SearchExtraDays = null;

    /**
     * @param string $PreferredTime
     */
    public function __construct($PreferredTime = null)
    {
      parent::__construct($PreferredTime);
    }

    /**
     * @return SearchExtraDays
     */
    public function getSearchExtraDays()
    {
      return $this->SearchExtraDays;
    }

    /**
     * @param SearchExtraDays $SearchExtraDays
     * @return \FilippoToso\Travelport\GDSQueue\typeFlexibleTimeSpec
     */
    public function setSearchExtraDays($SearchExtraDays)
    {
      $this->SearchExtraDays = $SearchExtraDays;
      return $this;
    }

}
