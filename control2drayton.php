<?php

echo date("Y-m-d\TH:i:s\Z")." call pass control to drayton\r\n";

function call_heating($signal) {
    $idVendor = '0x12bf'; // e.g. 0x12bf
    $idProduct = '0xff03'; // e.g. 0xff03

    $value = bindec($signal);

    exec(dirname ( __FILE__ ) . "/hidwrite ".$idVendor." ".$idProduct." ".$value);
    echo date("Y-m-d\TH:i:s\Z")." ".$signal."\r\n";
    }

call_heating('00000000');

echo date("Y-m-d\TH:i:s\Z")." pass control to drayton\r\n";
