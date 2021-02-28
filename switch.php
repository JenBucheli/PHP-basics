<?php
$lessons='PHP';

switch ($lessons){
    case 'PHP':
        echo 'Sunday and Monday';
        break;
    case 'JS':
        echo 'Tuesday';
        break;
    case 'Git Practice':
        echo 'Thursday';
        break;
//when  the variable has case that doesn't exist, default comes into action.
    default:
        echo 'This subject does not exist';
}

$beer= 'duvel';
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

$i=2;

switch ($i) {
    case 0;
    case 1;
    case 2;
        echo "<br> test";
        break;
    case 3;
    echo '<br> hola';
}


