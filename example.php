<?php

/**
This class implements Timezone datetime conversion functionality.

There is a simple usage for converting specified datetime into specified timezone.

This class supports about 200 timezone conversion including some local timezone.
This class uses generic PHP functions for conversion.
**/


print "Simple Example ::";
/***************** Simple Example ********************/
/** convert local datetime to IST (Indian Standard Time) */
require_once('class-timezone-conversion.php');   /** Include class */
$tz = new TimezoneConversion();                  /** Create TimezoneConversion Object */
$tz->setProperty('DateTime', 'now');             /** Set local 'DateTime' to convert */
$tz->setProperty('Timezone', 'IST');             /** Get IST */
print "\n IST ::" . $tz->convertDateTime();


print "\n\n Advanced Example ::";
/***************** Advanced Example ********************/
/** Convert local 'DateTime' to ISt (Indian Standard Time) and then convert IST to PDT (Pacific Daylight Time) */
$tz = new TimezoneConversion();                  /** Create TimezoneConversion Object */
$tz->setProperty('DateTime', 'now');             /** Set local 'DateTime' to convert */
$tz->setProperty('Timezone', 'IST');             /** Get IST */    
$ist_datetime = $tz->convertDateTime();
print "\n IST ::" . $ist_datetime;
/** IST => PDT */
$tz->setProperty('DateTime', $ist_datetime);     /** Set IST to convert to PDT */
$tz->setProperty('Timezone', 'PDT');             /** Get PDT */    
print "\n PDT ::" . $tz->convertDateTime()."\n";                      


?>