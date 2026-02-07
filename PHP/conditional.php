<?php
$d = date("D");
echo $d;
echo "<br>";
$d = "Mon";

if( $d == "Sat"){
    echo "its Saturday";
} elseif($d == "Mon") {
    echo "Its Monday";
}else {
    echo "have a nice day";
}

