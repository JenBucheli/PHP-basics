<?php
$intOne=20;
$intTwo=4;
$intThree=4;

if($intOne<$intTwo) {
    echo $intOne . ' is not smaller than ' . $intTwo . PHP_EOL;

if($intOne<$intThree){
    echo $intOne . ' is not smaller than '. $intThree.PHP_EOL;
}elseif ($intOne>$intThree){
    echo $intOne. ' is a bigger number than '. $intThree;
}else{
    echo ' does not apply';
}}

if($intTwo==$intThree){
    echo 'both numbers are equal';
}

//why when there are two separate conditions it just prints the result of one? TODO
// Why when they all are one scope I don't get the result if two of them are true.TODO

//Often we want to have more than one statement to be executed conditionally. We can group several statements into a statement group. For example,
// this code would display a is bigger than b if $a is bigger than $b, and would then assign the value of $a into $b:

$a=5;
$b=2;
if ($a > $b) {

    echo "<br> a is bigger than b <br>";
     //$b = $a; TODO//when I assign new values to the variables the results from under don't display anymore in the browser. why? TODO
    echo "<br>$b = $a";
}

// the option of above it's a better practice than this one. Even tho both are the same.
if ($a > $b) {
    echo '<br> a is bigger than the character b ';
}

if ($a > $b){
    echo"<br> $b = $a";
}



