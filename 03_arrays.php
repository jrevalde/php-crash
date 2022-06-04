<?php

//there are two ways to declare an array in php
$colors = ["red", "blue", "yellow"];

$numbers = array(1, 2, 3);

// extract a value in an array

echo $colors[0] . "<br/>";

echo $numbers[1] . "<br/>";


//We can put arrays inside of arrays

$array_set = 
[
    $colors, //["red", "blue", "yellow"]
    $numbers, //$numbers = array(1, 2, 3)
];

//to get a value from an array inside of an array do this:

echo $array_set[0][1] . "<br/>"; //this will print out blue

//We can create a structure very similar to a JSON file

$array_set2 =
[
    [
        'first_name'=> "jethro",
        'age' => 24
    ],
    [
        'first_name'=> "cholby",
        'age' => 15
    ]
];


//to get the value frome soething likethis we do

echo $array_set2[0]['first_name'] . "<br/>"; //this prints out "jethro"

//A lot of times when we are working with API in php we will need to convert this kind of array to json. we use the json_encode()
$json_array = json_encode($array_set2);
echo  $json_array . "<br/>";

//likewise, if we want to convert a json object into a php array we use json_decode()
$decoded_array = json_decode($json_array);
echo $decoded_array ;

?>