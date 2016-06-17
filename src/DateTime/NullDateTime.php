<?php

namespace DateTime;

class NullDateTime implements \DateTimeInterface
{
    public function diff($datetime2, $absolute)
    {
        return false;
    }
    
    public function format($format)
    {
        return false;
    }
    
    public function getOffset()
    {
        return false;
    }
    
    public function getTimestamp()
    {
        return null;
    }
    
    public function getTimezone()
    {
        return false;
    }
    
    public function __wakeup()
    {
    }
}
