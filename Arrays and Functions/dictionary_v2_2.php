<?php
$AToC = [
    "A" => [
        "amazing" => "mahtava",
        "automatic" => "automaattinen",
        "alright" => "hyvä on",
    ],
    "B" => [
        "basic" => "perus",
        "beautiful" => "kaunis",
        "bored" => "tylsistynyt",
    ],
    "C" => [
        "cool" => "viileä",
        "cancel" => "peruuttaa",
        "copy" => "kopio"
    ],
];

foreach ($AToC as $kirjain => $arvo) {
    echo "<br>";
    echo "<b>$kirjain</b><br>";
    echo "<br>";
    foreach($arvo as $englanniksi => $suomeksi){
        echo "{$englanniksi} on suomeksi {$suomeksi}<br>";
    }
   
}
?>