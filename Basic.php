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
echo '<br> I\'m from '.country;

//function basics
function callMe(){
    return 6; //add spaces?
    //this value is returned
    return 8;
    //this statement is not executed. First return is always executed and then the function is over.
} //Function is defined, but won't be shown until we call it.

echo '<br> When calling this function you get ',callMe(); //calling function.


//RETURN STATEMENT
//The return statement is used to return the final output of a function.
// Once the first return statement is executed, the function is exited.

function notFound()
{
    echo "<br>"."ERROR: Page not found! \n";
    return 404;
}

function greetPerson()
{
    echo "Hello, Person!\n";
    echo "Welcome to our site!\n";
    echo "Our best wishes\n";
    return "Free chocolate";
}

//TODO why do I need to use a variable to call the function?
//What is the difference between calling a func with variable and directly?; (point of it??)
//What is return doing here?
$error = notFound();
$greet= greetPerson();


echo "I received a $error, but it's ok because I also received $greet.";


//RETURN NULL

function createVacuum()
{
    echo 'Clean the house';
}
//prints 'clean the house';
echo createVacuum();


$result= createVacuum();
//TODO Also prints the text, but why if the return is null;
echo $result;
//prints Zero; why?
echo createVacuum()*7;

function testNull()
{
    echo 10;
}
//TODO why does it print 10 if the return is null?
$result_test= testNull();
echo $result_test;

//test NULL
function changeColor()
{
    echo "blue";
}

$color = changeColor(); //print blue, but the value is NULL? what is value then? TODO


//TODO HOW CAN I use the CONS in this example?
/*function calculateTip($mealCost,$tip=20)
{

    define (CONS,1);
    define (PORCENT,100);
    return $mealCost*(CONS+($tip/PORCENT));
}
echo calculateTip(100,25);*/


// PASS BY REFERENCE

//Define variables
$string_one = "you have teeth";
$string_two = "toads are nice";
$string_three = "brown is my favorite color";

//Define the function which reassigns the parameter to it's previous value adding "Do you think " and "?\n"
// & makes permanent changes to a variable within (inside) a function
function convertToQuestion(&$str)
{
    $str = "Do you think ".$str."?\n";
}
//call the function with the variables, the parameter is reassigned with the extra strings.
convertToQuestion($string_one);
convertToQuestion($string_two);
convertToQuestion($string_three);

echo $string_one;
echo $string_two;
echo $string_three;

$color = "red";

function addEight($a)
{
    return $a+8;
}
function timesFive($a)
{
    return $a*5;
}
$starting_value= 3;
$intermediate_value= addEight(2)($starting_value);
$result= timesFive(3)($intermediate_value);
echo $result;//55
