<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
class calculator
{
 public function Addition($nbr1,$nbr2)
 {
    return $nbr1+$nbr2;
 }
 public function Multiplication($nbr1, $nbr2)
 {
    return $nbr1*$nbr2;
 }
}
$calculate = new Calculator();

$somme = $calculate->addition(34, 9);
$produit = $calculate->multiplication(34, 9);

echo "La somme de 34 et 9 est : $somme\n";
echo "Le produit de 34 et 9 est : $produit"; 

?> 
</body>
</html>