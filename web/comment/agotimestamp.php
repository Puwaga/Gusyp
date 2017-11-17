<?php

  
function convertToUnixTimestamp($value) {
     date_default_timezone_set('America/Mexico_City');
    list($date, $time) = explode(' ', $value);
    list($year, $month, $day) = explode('-', $date);
    list($hour, $minutes, $seconds) = explode(':', $time);
    $unit_timestamp = mktime($hour, $minutes, $seconds, $month, $day, $year);
 
    return $unit_timestamp;
}
 
//convert timestamp to ago format
function convertToAgoFormat($timestamp){
     date_default_timezone_set('America/Mexico_City');
    $diffBtwCurrentTimeAndTimestamp = time() - $timestamp;
    $periodsString = ["sec", "min", "hr", "day", "week", "month", "year", "decade"];
    $periodsNumber = ["60", "60", "24", "7", "4.35", "12", "10"];
 
    for($iterator = 0; $diffBtwCurrentTimeAndTimestamp >= $periodsNumber[$iterator]; $iterator++)
        $diffBtwCurrentTimeAndTimestamp /= $periodsNumber[$iterator];
    $diffBtwCurrentTimeAndTimestamp = round($diffBtwCurrentTimeAndTimestamp);
 
    if($diffBtwCurrentTimeAndTimestamp != 1) $periodsString[$iterator].="s";
    $output = "$diffBtwCurrentTimeAndTimestamp $periodsString[$iterator]"; //2 days
 
    return $output." ago";
}
 

?>