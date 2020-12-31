<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dice Roll Game</title>
</head>
<body>
    <form action="dice2.php" method="POST">
<input type="submit" name="roll" value="Roll dice">
</form>
<?php
$min = 1;
$max = 6;
while(($number = rand($min, $max)) != 1){
        echo "$number<br>"; 
}
echo "number 1!";
?>

</body>
</html>