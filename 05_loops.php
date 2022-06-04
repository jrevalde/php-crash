<?php
    //for loop. here we are printing out the string in reverse order.
    $bingus = "bingus";
    for($i = strlen($bingus) - 1; $i >= 0 ; $i--) //we have to offset by 1 becuasae strlen doesn't start its count from 0
    {
        echo $bingus[$i] . " " . $i . " <br/>";
    }

    echo "<br/>";


    //doing the exact same thing but usig a while loop
    $Chungus = "chungus";
    $x = strlen($Chungus) -1;
    while($x >= 0)
    {
        echo $Chungus[$x];
        $x--;
    }
    
    
    echo "<br/>";
    //php also has a do a while loop




    //This is prolly the most important loop to keep in mind and the one we will use more than any others.


    $flavours = ['sweet', 'salty', 'bitter'];

    foreach($flavours as $flavour_index => $flavour) //here we are printing out the index and the value
    {   
        echo "${flavour} [${flavour_index}], ";
    }

    $assoc_array = 
    [
        'beans' => 'tasty',
        'boiled_egg' => 'hot'
    ];

    foreach($assoc_array as $key => $value)
    {
        echo "${key} => ${value}, ";
    }
    
?>