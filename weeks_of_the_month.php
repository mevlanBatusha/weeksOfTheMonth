<?php

// get date
$date = date('d/m/Y');

/*
* or we can send other date
* which month from date: specific day we need to know 
*/

list($send_day, $send_month, $send_year) = explode('/',$date);

// send values to function and get the result
$result = getWeeks($send_day, $send_month, $send_year);

function getWeeks($getDay, $getMonth, $getYear)
{
    // remove 0 from getDay
    $i = 0 + $getDay;

    $getDate = $getYear.'/'.$getDay.'/'.$getMonth;
    
    // take days of the month selected
    $days_of_month = date('t', strtotime($getDate));

    $rez = array();
    $j = 0;
    while ( $i < $days_of_month) 
    {
        $rez[$j]= $days_of_month - $i;
        //increes variable of j for 1 for array and i for 7 "days"
        $j++;
        $i = $i + 7;
    }
    // count all elemnt in an array
    $weeks_of_month = count($rez);

    return $weeks_of_month;
}