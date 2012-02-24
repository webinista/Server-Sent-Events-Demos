<?php

require_once('../php/lib.php');

header('Content-Type: text/event-stream');

$i = 0;

while($i < 10){
    $msg = 'It is now: '.date('g:i:sa T',time());
    doit($msg);
    $i++;
    sleep(1);
}