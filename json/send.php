<?php

/*
We are sending events once a second based on
whether our random number is odd or even.
*/

// set an execution limit of one hour.
set_time_limit(60*60);

require_once('../php/lib.php');
header('Content-Type: text/event-stream');

$cars[0]["Audi"] = array("A3","A4","A5","A6","A7");
$cars[1]["BMW"] = array("328i","528i","640i","740i","X5");
$cars[2]["Chevrolet"] = array("Cruze","Impala","Malibu","Sonic","Volt");
$cars[3]["Citroen"] = array("C3","Xsara Picasso","C4","Aircross","DS3");
$cars[4]["Dodge"] = array("Caliber","Avenger","Charger","Challenger");
$cars[5]["Honda"] = array("Accord","Civic","Crosstour","CRV","Fit");
$cars[6]["Toyota"] = array("Camry","Corolla","Matrix","Prius","Yaris");

$i = 0;
$num = count($cars);

while($i < $num){
    doit(json_encode($cars[$i]),'makes', time() );
    $i++;
    sleep(2);
}