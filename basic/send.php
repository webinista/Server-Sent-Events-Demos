<?php

require_once('../php/lib.php');
header('Content-Type: text/event-stream');

while(true){
    $msg = 'It is now: '.date('g:i:sa T',time());
    doit($msg);
    sleep(2);
}