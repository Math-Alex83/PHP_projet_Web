<?php
echo"EXERCICES PHP 00/Serie 2 : Nombres";
echo"<hr>";
// 2.A Créer une fonction « getSum() » qui accepte deux arguments de type int. Elle devra retourner la somme des deux valeurs.
function getSum(int $a, int $b):string
{
    $result = $a + $b;
    return $a.' + '.$b.' = '.$result;
}
getSum(5,3);
echo"2.A : ".getSum(5,3);
echo"<hr>";

// 2.B Créer une fonction « getSub() » qui accepte deux arguments de type int. Elle devra retourner la soustraction des deux valeurs.
function getSub(int $a, int $b):string
{
    $result = $a - $b;
    return $a.' - '.$b.' = '.$result;
}
getSub(5, 3);
echo"2.B : ".getSub(5, 3);
echo"<hr>";
getSub(3, 5);
echo"2.B : ".getSub(3, 5);
echo"<hr>";

//2.C Créer une fonction getMulti() qui accepte deux arguments de type float. Elle devra retourner la multiplication des deux valeurs.
//Limitez le résultat à 2 décimales
function getMulti(float $a, float $b):string
{
    $result=$a*$b;
    return $a.' x '.$b.' = '.round($result,2);
}
getMulti(5.6, 3);
getMulti(5.6, -3.7);
echo"2.C : ".getMulti(5.6, 3);
echo"<hr>";
echo"2.C : ".getMulti(5.6, -3.7);
echo"<hr>";

/* 2.D Créer une fonction getDiv() qui accepte deux arguments de type int. Elle devra retourner la division des deux valeurs.
Limitez le résultat à 2 décimales (arrondi).
Rappel : une division par zéro est impossible. Dans ce cas, retourner la valeur « 0 ».*/

function getDiv(int $a, int $b):string
{
    if ($a == 0 || $b == 0 ) 
    {
        return $a.' / '.$b.' = 0';
    } 
    else 
    {
        $result = $a / $b;
        return $a.' / '.$b.' = '.round($result,2);
    }
}
getDiv(20, 3);
getDiv(20, 0);
echo"2.D : ".getDiv(20, 3);
echo"<hr>";
echo"2.D : ".getDiv(20, 0);
echo"<hr>";
