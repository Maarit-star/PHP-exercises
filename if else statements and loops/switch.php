<?php

// Jos esimerkiksi selvitetään, mikä viikon päivä on kyseessä, on mielekkäämpää
// käyttää switchiä kuin if elseä
// strtolower > jotta ei ole merkitystä, syöttääkö kirjoittaja isoja vai pieniä
// kirjaimia
//$weekDay =  strtolower($_GET["paiva"]);

$weekDay = "maaanantai";

    switch ($weekDay) {
        case "maanantai":
            echo "Tänään on maanantai";
            break;
        case "tiistai":
            echo "Tänään on tiistai";
            break;
        case "keskiviikko":
            echo "Tänään on keskiviikko";
            break;
        case "torstai":
            echo "Tänään on torstai";
            break;
        case "perjantai":
            echo "Tänään on perjantai";
            break;
        case "lauantai":
            echo "Tänään on lauantai";
            break;
        case "sunnuntai":
            echo "Tänään on sunnuntai";
            break;
            default:
            echo "Viikonpäivää ei löytynyt";
    }
?>