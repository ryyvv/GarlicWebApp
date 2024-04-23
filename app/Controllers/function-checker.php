<?php
require './app/config/dbconfig.php';

$ref_table = 'users';
$fetchUserTable = $realtimeDatabase->getReference($ref_table)->getValue();

 
    if ($fetchUserTable > 0) {
        $Data =[];
        $loop=0;
        foreach ($fetchUserTable as $outer_key => $inner_array) {
           
            foreach ($inner_array as $inner_key => $value1) {
                if ($inner_key == 'userData'   &&  is_array($value1)) {
                    foreach ($value1 as $value_key => $value2) {
                        // echo "Data Key: " . $value_key ." Value: " . $value2. "<br>";
                        // echo "Outer Key: " . $outer_key ."inner Key: " . $inner_key .  "Data Key: " . $value_key . ",Value: " . $value1['name'] . "<br>";
                        $Data[$loop][$value_key] = $value2;
                    }
                }
            }
            $loop++;
        }
    } else {
        echo "data not found!";
    }

require "./app/views/check.view.php";
