<!DOCTYPE html>
<html>
<body>

<?php
echo "My first PHP script!";
$txt = "PHP";
echo "<br>Estou concatenando" . "I love $txt!";
$x = 10;
$y = 10.5;
echo "<br>" . $x + $y;
// You can also use comments to leave out parts of a code line
$x = 5 /* + 15 */ + 5;
echo "<br>" . $x . "<br>";

$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);
for ($i=0; $i<3; $i++){
    echo "<br> carro na posição " .$i."<br>".$cars[$i];
}
echo "<br>". strlen("Beatriz Marques");
?>

</body>
</html>