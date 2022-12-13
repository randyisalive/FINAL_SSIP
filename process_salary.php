<?php

$time_pay = $_POST['time_pay'];
$idr = $_POST['salary_amount'];
$hour = $_POST['hour'];
$days = $_POST['days'];




if ($time_pay == 'hour') {
    $week = 7;
    $x = $hour / $days; // SATUAN JAM
    $daily = $x * $idr;
    $hourly = $idr;
    $weekly = $daily * $week;
    $bi_weekly = 2 * $weekly;
} else if ($time_pay == 'day') {
    $week = 7;
    $x = $hour / $days; // SATUAN JAM
    $hourly = $idr / $x;
    $daily = $idr;
    $weekly = $daily * $week;
    $bi_weekly = 2 * $weekly;
} else if ($time_pay == 'week') {
    $week = 7;
    $weekly = $idr;
    $x = $hour / $days; // SATUAN JAM
    $daily = $weekly / $days;
    $hourly = $daily / $x;
    $bi_weekly = 2 * $weekly;
}