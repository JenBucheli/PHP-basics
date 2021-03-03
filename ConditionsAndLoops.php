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



//SWITCH or MATCH


$lessons = 'PHP';
//ex. 1
echo match ($lessons) {
    'PHP' => 'Sunday and Monday',
    'JS' => 'Tuesday',
    'Git Practice' => 'Thursday',
    default => 'This subject does not exist',
};
// ex.2
$beer = 'duvel';
switch ($beer) {
    case 'duvel';
    case 'lupulus';
    case 'chimay';
        echo '<br> Good choice';
        break;
    default;
        echo 'Please make a new selection...';
        break;
}
//ex. 3
$i = 2;

switch ($i) {
    case 0;
    case 1;
    case 2;
        echo "<br> test";
        break;
    case 3;
        echo '<br> hola';
}

//while
$i=0;
while ($i <=10){
    echo $i; // if statement stops here, it keeps running infinitely is necessary to add a conditional (limit)
    //conditional
    $i++;
}
