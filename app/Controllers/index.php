<?php
require './app/config/dbconfig.php';

$ref_table = 'users';
$fetchUserTable = $realtimeDatabase->getReference($ref_table)->getValue();

$ref_imagetable = 'imageAnalyze';
$fetchImageTable = $realtimeDatabase->getReference($ref_imagetable)->getValue();

function userInfo($fetchUserTable)
{
    if ($fetchUserTable > 0) {
        $Datauser = [];
        $loop = 0;
        foreach ($fetchUserTable as $outer_key => $inner_array) {

            foreach ($inner_array as $inner_key => $value1) {
                if ($inner_key == 'userData'   &&  is_array($value1)) {
                    foreach ($value1 as $value_key => $value2) {
                        // echo "Data Key: " . $value_key ." Value: " . $value2. "<br>";
                        // echo "Outer Key: " . $outer_key ."inner Key: " . $inner_key .  "Data Key: " . $value_key . ",Value: " . $value1['name'] . "<br>";
                        $Datauser[$loop][$value_key] = $value2;
                    }
                }
            }
            $loop++;
        }
    } else {
        echo "data not found!";
    }
    return $Datauser;
}
// fetch userInfo
$Data = userInfo($fetchUserTable);


function projects($fetchUserTable)
{

    if ($fetchUserTable > 0) {
        $projects = 0;
        foreach ($fetchUserTable as $outer_key => $inner_array) {
            //echo "Outer key: " . $outer_key . 'Value ' . $inner_array ;
            foreach ($inner_array as $inner_key => $value1) {
                //echo "Inner key: " . $inner_key ;
                if ($inner_key == 'plants'   &&  is_array($value1)) {
                    // foreach ($value1 as $value_key => $value2) {
                        //echo "Data Key: " . $value1 ;
                    //     // echo "Outer Key: " . $outer_key ."inner Key: " . $inner_key .  "Data Key: " . $value_key . ",Value: " . $value1['name'] . "<br>";
                    //     $Data[$loop][$value_key] = $value_key;
                    // }
                    $projects = count($value1);
                }
            }
        }
    } else {
        echo "data not found!";
    }
    return $projects;
}

//RegisteredFarmer
$allProjects = projects($fetchUserTable);
 


function registered($fetchUserTable)
{
    if ($fetchUserTable > 0) {
        $registeredFarmer = 0;
        foreach ($fetchUserTable as $outer_key => $inner_array) {
            //echo "Outer Key: " . $outer_key;
            $registeredFarmer++;
        }
    } else {
        echo "data not found!";
    }
    return $registeredFarmer;
}

// RegisteredFarmer
$registeredFarmer = registered($fetchUserTable);

//dd($registeredFarmer);

// timeline
$dataTimeline = [
    [
        'dateUploaded' => '02-27-2024',
        'name' => 'Ryan James J. Pascual',
        'address' => 'Suyo Dingras, Ilocos Norte',
        'image' => '../../src/garlic5.jpg'
    ],
    [
        'dateUploaded' => '02-28-2024',
        'name' => 'Kyla J. Pascual',
        'address' => 'Suyo Dingras, Ilocos Norte',
        'image' => '../../src/garlic4.jpg'
    ],
    [
        'dateUploaded' => '02-29-2024',
        'name' => 'Sharina Soriano',
        'address' => 'Suyo Dingras, Ilocos Norte',
        'image' => '../../src/garlic3.jpg'
    ],
    [
        'dateUploaded' => '03-01-2024',
        'name' => 'Shaznae Ragasa',
        'address' => 'Suyo Dingras, Ilocos Norte',
        'image' => '../../src/garlic6.jpg'
    ],
    [
        'dateUploaded' => '03-02-2024',
        'name' => 'Pot Pot Priany',
        'address' => 'Suyo Dingras, Ilocos Norte',
        'image' => '../../src/garlic1.jpg'
    ]

];



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

function countImagesUpload($fetchImageTable)
{

    if ($fetchImageTable > 0) {
        $images = 0;
        foreach ($fetchImageTable as $outer_key) {
            $images++;
        }
    } else {
        echo "data not found!";
    }
    return $images;
}
$imagecount = countImagesUpload($fetchImageTable);
 
function countImagesUploadAnalyzed($fetchImageTable)
{

    if ($fetchImageTable > 0) {
        $images = 0;
        foreach ($fetchImageTable as $outer_key => $inner_array) {
              //echo "Outer Key: " . $outer_key . "value: ". $inner_array. "<br>";
              foreach ($inner_array as $inner_key => $value1) {
                //echo  "inner Key: " . $inner_key . "value: ". $value1. "<br>";
                if($inner_key == 'result' &&   $value1 != 'pending'){
                        $images++;
                }
            }
            
        }
    } else {
        echo "data not found!";
    }
    return $images;
}
$countAnalyzedimage = countImagesUploadAnalyzed($fetchImageTable);






require "./app/views/dashboard-index.view.php";
//require "./app/views/check.view.php";