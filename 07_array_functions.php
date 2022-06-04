<?php
//THIS IS PROLLY ONE OF THE MOST IMPORTANT ONES TO KEEP NOTE OF

//There is a function to pretty much do anything with the data that is inside of an array
$froots = ['appel', 'orange', 'pear', 'banana'];

//get the length of array
echo "Gets the length of array || " . count($froots) . "<br/>";

//Search if something exists within an array
echo "this function takes two arguments, the value we want and the array we want to search. it then returns a boolean || " . var_dump(in_array('apple', $froots))  . "<br/>"; 

//add a value to an array with array_push
array_push($froots, "onion");
echo "array_push() adds a value to the end of an array, it has two arguments, the array itself and the value we want to push || " . print_r($froots). "<br/>";

//add value of array from beginning array_unshift()

//remove value from array
//array_pop() removes value at the end of the array
//array_shift() removes value at beginning of the array
//remove a value and index in array with unset($array[index])


//SPLITTING ARRAY 

//Splitting it into chunks with array_chunk($array, number_of_chunks);

//CONCATENATE AN ARRAY
//array_merge($array1, $array 2);

?>