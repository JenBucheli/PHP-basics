<?php

//variables

$name = 'Jenifer';
echo $name;

$age= 28;

//single quotes print everything as string.
echo '<br>'.'I am $age'.'<br>';

//double quotes identify variables inside the string.
echo "I am $age".'<br>';

//another option could be using single quotes and concatenation with '.'
echo 'My name is '.$name. ' and I am '.$age.'<br>';

// when we have two variables with the same name, the program will print the value of the last echo.
$dog='Benji';
//echo $dog;

$dog= 'Billy';
echo 'One of my dogs is '.$dog;

//constants
define('dog','Benji');
echo '<br>'.'and '.dog.' lives with me in Belgium';

define('country','Ecuador');
echo '<br>'.country;







