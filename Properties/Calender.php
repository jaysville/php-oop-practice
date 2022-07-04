<?php

class Calendar
{

    public $name;

    public const MONTHS_IN_YEAR = 12;



    public static $daysInFebruary=28;

    public function getMonthsInYear()
    {
        return self::MONTHS_IN_YEAR;
    }

}
 
$calender = new Calendar();
$calender ->name='Year Planner';

print $calender->name .PHP_EOL;
print Calendar::MONTHS_IN_YEAR;
print Calendar::$daysInFebruary;