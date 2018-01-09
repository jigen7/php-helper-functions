<?php

$time = array (
            '30:00:00',
            '29:00:00',
            '28:00:00',
        );

$seconds = 0;
foreach($time as $hours) {
    $exp = explode(':', strval($hours));
    $seconds += $exp[0]*60*60 + $exp[1]*60 + $exp[2];
}

$average = $seconds/sizeof( $time );
echo floor($average/3600).':'.floor(($average%3600)/60).':'.($average%3600)%60;
