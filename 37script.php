<?php
var_dump( 7 == 7 XOR 9 > 7 ); // FALSE, ambas as expressões são
var_dump( 7 == 7 XOR 9 < 7 ); // TRUE, a primeira expressão é verdadeira
var_dump( 7 < 7 XOR 9 > 7 ); // TRUE, a segunda expressão é verdadeira
var_dump( ! 9 < 7 ); // TRUE, 9 NÃO é menor que 7
var_dump( ! 9 > 7 ); // FALSE, 9 é maior que 7 /**
?>

