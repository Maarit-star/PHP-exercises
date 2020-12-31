<?php
function kertotaulu($luku1, $luku2) {
    echo "<h3>Taulukko ( $luku1 x $luku2 )</h3>";
    echo "<table border>";

    for($i = 1; $i <= $luku1; $i++){
        echo "<tr>";
        for($j = 1; $j <= $luku2; $j++){
            $numero = $i * $j;
            echo "<td>$numero</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    echo "<br>";
}
kertotaulu(3,3);
kertotaulu(3,7);
kertotaulu(7,3);
?>