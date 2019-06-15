<?php
require('functions.php');
$a = array (
	"key1" => 1, 
	"key2" => array (
		"key3" => 1, 
		"key4" => array (
			"key5" => 4,  
		),
	),
);
function printDepth($data) {
    static  $depth=1;
    foreach($data as $key => $value){
        if(isArray($value))
        {
            echo $key." ".$depth."\r\n";
            $depth++;
            printDepth($value);
        }
        else
        {  
            echo $key." ".$depth."\r\n";
        }
    }
}