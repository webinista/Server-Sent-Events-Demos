<?php

function doit($data, $event = null, $id = null, $retry = null){
    if( !empty($event) ){
       print 'event: '.filter_var($event,FILTER_SANITIZE_STRING).PHP_EOL;
    }

    if( empty($data) ){
        throw new Exception("Parameter 1 can't be null.");
    } else {
        print 'data: '.filter_var($data,FILTER_SANITIZE_SPECIAL_CHARS).PHP_EOL;
    }

    if( !empty($id) ){
       print 'id: '.filter_var($id,FILTER_SANITIZE_STRING).PHP_EOL;
    }

    if( !empty($retry) ){
        if( is_int($retry) ){
            print 'retry: '.$retry.PHP_EOL;
        } else {
            throw new Exception('$retry parameter must be an integer.');
        }
    }

    print PHP_EOL;
    ob_flush();
    flush();
}