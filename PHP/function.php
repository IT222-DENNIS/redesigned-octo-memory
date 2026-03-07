<?php
function writemsg() {
    echo "HELLO WORLD";
}

function familyname($fname,$year){
    echo "$fname Nibato is born in $year";
}

function setHeight($minheight = 50){
    echo "the heigh is $minheight <br>";
}

function sum($x,$y){
    $z = $x + $y;
    $message = "the $x + $y equal to $z";
    return $message;
}

function checkPN($num){
    if($num > 0){
        $message = "The $num is Positive";
    }else {
        $message = "The $num is Negative";
    }
    return $message;
}
?>