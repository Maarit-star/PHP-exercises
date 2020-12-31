<?php 
$A = $_GET["num1"];
$B = $_GET["num2"];

if(is_numeric($A) && is_numeric($B)){
    if($A < $B){
    echo $A . " on pienempi kuin " . $B;
}else if($A <= $B){
    echo $A . " on pienempi tai sama kuin " . $B;
}else if($A > $B){
    echo $A . " on suurempi kuin " . $B;
}else if($A >= $B){
    echo $A . " on suurempi tai sama kuin " . $B;
}
}else {
    echo "Lukukenttään ei ole syötetty lukua!";
}

?>