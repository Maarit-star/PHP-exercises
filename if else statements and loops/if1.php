<?php 
$userName = $_GET["name"];

if(empty($userName)) {
    echo "Nimikenttä on tyhjä!";
}else if($userName == "Sandra" && $userName != "Sale"){
    echo "Tervehdys ystävä!<br>";
    echo "Et ole pressa";
}else if($userName == "IDDQD" && $userName != "Sale"){
    echo "God mode enabled<br>";
    echo "Et ole pressa";
}else{
    echo "Kuka oikein olet?";
}
?>