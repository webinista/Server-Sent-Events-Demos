<?php
/*
We are sending events once a second based on
whether our random number is odd or even.
*/
require_once('../php/lib.php');

header('Content-Type: text/event-stream');

while(true){
   $data = rand(1,999);

   $evenorodd = $data % 2;

   # if the number is odd ...
   (bool)$evenorodd ? $event = 'odd' : $event =  'even';

   doit($data, $event, time(), 1000);
   sleep(2);
}


