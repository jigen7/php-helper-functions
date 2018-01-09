<?php

$start = new \DateTime("2016-09-30 09:57:17");
$end   = new \DateTime("2016-09-30 09:53:53");

$interval = $end->diff($start);

$time = sprintf(
    '%d:%02d:%02d',
    ($interval->d * 24) + $interval->h,
    $interval->i,
    $interval->s
);

echo $time;
