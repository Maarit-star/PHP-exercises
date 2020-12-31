<?php
$kayttis = $_GET["kayttajaTunnus"];
$salasana = $_GET["salasana"];

// Ehto- ja toistolauseet, tehtävä 6.
// JOS SEKÄ KÄYTTÄJÄTUNNUS ETTÄ SALASANA OVAT OIKEIN
/*if($kayttis=="Ritva" && $salasana=="salasana"){
    echo "Tervetuloa Ritva!";
}else{
    echo "Sinulla ei ole asiaa tänne!";
}*/
if(empty($kayttis) || empty($salasana)){
    echo "Käyttäjätunnus- tai salasana-kenttä jätetty tyhjäksi";
}else if($kayttis=="Ritva" || $salasana=="salasana"){
    // JOS JOMPI KUMPI: KÄYTTÄJÄTUNNUS, TAI SALASANA ON OIKEIN
    echo "Tervetuloa Ritva!";
}else{
    echo "Sinulla ei ole asiaa tänne!";
}
?>