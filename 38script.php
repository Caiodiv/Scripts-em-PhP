<?php

var_dump( 7 == 7 && 9 > 7 ); // TRUE, ambas as expressões são verdadeiras
var_dump( 7 == 7 && 9 < 7 ); // FALSE, apenas a primeira expressão éverdadeira
var_dump( 7 == 7 || 9 > 7 ); // TRUE, ambas as expressões são verdadeiras
var_dump( 7 != 7 || 9 > 7 ); // TRUE, a segunda expressão é verdadeira
var_dump( 7 != 7 || 9 < 7 ); // FALSE, ambas as expressões são falsas

?>