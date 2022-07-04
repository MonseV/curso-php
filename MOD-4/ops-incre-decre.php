<?php

$a = 1;



// Primero incrementa y despues devuelve el valor
// echo ++$a; // $a = 2
// echo "<br>";
// echo $a; // $a = 2

// Primero devuelve el valor y despues incremeta
// echo $a++; // $a = 1
// echo "<br>";
// echo $a; // $a = 2

// $b = $a++; // $b = 1, $a = 2
// var_dump($b, $a);
// $b = ++$a; // $b = 3, $a = 3
// var_dump($b, $a);

$b = $a--; // $b = 1, $a = 0
var_dump($b, $a);
$b = --$a; // $b = -1, $a = -1
var_dump($b, $a);