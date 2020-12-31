<?php


function mihinAsti($val){
    for($i=1; $i <= $val; $i++){
        echo "$i<br>";
    }
} 
if(isset($_GET['submit'])){
    echo mihinAsti($_GET['num1']);
}

function mistaJaMihin($val1, $val2){
    for($i=$val1;$i<=$val2;$i++){
        echo "$i<br>";
    }
}
if(isset($_GET['submit2'])){
    echo mistaJaMihin($_GET['num2'],$_GET['num3']);
}

function montakoTahtea($val){
    for($i=1;$i<=$val;$i++){
        if($i == $val){
            echo "*<br>";
        }else{
            echo "*";
        } 
    }
}
if(isset($_GET['howManyStars'])){
    echo montakoTahtea($_GET['tahdet']);
}

function nelionKoko($sivunPituus){
        for($i=1; $i <= $sivunPituus; $i++){
            montakoTahtea($sivunPituus);
        }
}
if(isset($_GET['kuinIsoNelio'])){
    echo nelionKoko($_GET['nelio']);
}

function suorakaiteenKoko($leveys, $korkeus){
    for($i=1; $i<=$korkeus;$i++){
        montakoTahtea($leveys);
    }
}
if(isset($_GET['suorakaide'])){
    echo suorakaiteenKoko($_GET['leveys'],$_GET['korkeus']);
}

function tulostaKolmio($korkeus){
    $leveys=1;
    while($leveys <= $korkeus){
        montakoTahtea($leveys);
        $leveys++;
    }
}
if(isset($_GET['kolmio'])){
    echo tulostaKolmio($_GET['kolmionKorkeus']);
}

function lukusarjanSumma($annettuNro){
    $i=1;
    $summa = 0;
    while($i <= $annettuNro){
        $summa = $summa + $i;
        $i++;
    }  
    echo $summa;
}
if(isset($_GET['summanen'])){
    echo lukusarjanSumma($_GET['summaLuvulle']);
}

function luvunNKertoma($annettuNro){
    $i=1;
    $kertoma = 1;
    while($i<=$annettuNro){
        $kertoma = $kertoma * $i;
        $i++;
    }
    echo $kertoma;
}
if(isset($_GET['kertoma'])){
    echo luvunNKertoma($_GET['kertomaLuvulle']);
}   
?>