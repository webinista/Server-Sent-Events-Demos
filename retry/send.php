<?php

require_once('../php/lib.php');

header('Content-Type: text/event-stream');

$msg = 'It is now: '.date('g:i:sa T',time());

// choose a random interval between 1 and 10 seconds
$retry = rand(1,10) * 1000;

doit($msg,null,null,$retry);
