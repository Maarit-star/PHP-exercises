<?php
// Multiplication table 10 x 10

echo "<table border>";

for($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    for($j = 1; $j <= 10; $j++) {
        $number = $i * $j;
        echo "<td>$number</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>