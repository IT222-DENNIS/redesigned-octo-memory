<?php
$cars = array("honda","bmw","ferrari");
$toys = ["gun", "truck", "doll"];
$ages = ["peter" => 42, "john" => 25, "carlo" => 25];
$families = [ "NIBATO" => ["john","carlo","steven"],
                "DOE" => ["anna", "rose", "mark"]];
$i = 0;
$cars[] = 'toyota';
while($i < count($cars)){
    echo $cars[$i]. '<br>';
    $i++;
}
echo "<br>";
$i = 0;
while($i < count($toys)){
    echo $toys[$i]. '<br>';
    $i++;
}
echo "<br>";
$a = 0;
$keys = array_keys($ages);
while($a < count($keys)){
    $key = $keys[$a];
    echo $key.' is '. $ages[$key].' years old<br>';
    $a++;
}
echo "<br>";
for($i=0; $i < count($cars);$i++){
    echo $cars[$i]. '<br>';
}
echo "<br>";
foreach($toys as $toy){
    echo $toy. '<br>';
}
echo "<br>";
foreach($ages as $age){
    echo $age. '<br>';
}