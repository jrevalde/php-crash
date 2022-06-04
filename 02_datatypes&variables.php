<?php

//naming conventions for php is using the underscore style instead of usual camelCase used in javascript

$this_variable = "They use the underscore naming convention";
$javascriptVariable = "instead of using camelCase.";

$concat = "concatenation";

echo 'php uses the . instead of the + for ' . $concat . '.';

//can also use a javacsript literal style

echo " php uses the . instead of the + for ${concat}";

//CONSTANTS || you only want to declare these if you know that they are never going to change. They are often used for database credentials.
define('HOST', 'localhost'); //this is the function we use to create a constant. || the convention for constants is to use all uppercase.

?>