<?php

require './app/config/dbconfig.php';
 


$ref_imagetable = 'imageAnalyze';
$fetchImageTable = $realtimeDatabase->getReference($ref_imagetable)->getValue();

function analyzeImage($fetchImageTable)
{
    if ($fetchImageTable > 0) {
        $Images = [];
        $loop = 0;
        foreach ($fetchImageTable as $outer_key => $inner_array) {
            //echo "Outer Key: " . $outer_key . "value: ". $inner_array. "<br>";
            foreach ($inner_array as $inner_key => $value1) {
                ///echo  "inner Key: " . $inner_key . "value: ". $value1. "<br>";
                //$Images[$loop][$inner_key] = $value1;
                foreach ($value1 as $inner_key1 => $value2) {
                    //echo  "inner Key2: " . $inner_key1 . "value2: ". $value2. "<br>";
                    $Images[$loop][$inner_key1] = $value2;
                }
                $loop++;
            }
          
        }
    } else {
        echo "data not found!";
    }
    return $Images;
}
$fetchImages = analyzeImage($fetchImageTable); 


require "./app/views/dashboard-smart.view.php";

?>