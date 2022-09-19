<?php

class Timer
{
    public const SEC_PER_MIN = 60;

    // BEGIN (write your solution here)
    public const SEC_PER_HOUR = 3600;
    private $secondsCount = $this->sec + (self::SEC_PER_MIN * $this->min) + (self::SEC_PER_HOUR * $this->hour);

    public function __constructor ($sec,$min = 0,$hour = 0) : void
    {
        $this->sec = $sec;
        $this->min = $min;
        $this->hour = $hour;
        $secondCount = $this->sec + (self::SEC_PER_MIN * $this->min) + (self::SEC_PER_HOUR * $this->hour);
    }
    // END

    public function getLeftSeconds()
    {
        return $this->secondsCount;
    }

    public function tick()
    {
        $this->secondsCount--;
    }
}

echo Timer::__constructor(10);