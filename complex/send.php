<?php
/*
We are sending events once a second based on
whether our random number is odd or even.
*/

// set an execution limit of one hour.
set_time_limit(60*60);

require_once('../php/lib.php');
header('Content-Type: text/event-stream');

while(true){
    $randnum = rand(1,1000);
    $evenorodd = $randnum % 2;

    # if the number is odd ...
    (bool)$evenorodd ? $type = 'odd' : $type =  'even';

    doit($randnum, $type);
    sleep(2);
}