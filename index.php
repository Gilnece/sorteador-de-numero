<?php

$min = 0;
$max = 999999;

$num = rand($min, $max); //mais antiga e lenta de todos os algoritmos randomizadores (1951 linear)
$num1 = mt_rand($min, $max); //um pouco mais confiavel e 4x mais rapido que a função rand (1997 mersenne twister)
$num2 = random_int($min, $max); // gera numero aleatorio criptografado, porém é o algotimo mais lento dentro os demais
//a partir do PHP 7.1 o rand() ao ser utilizado irá funcionar como mt_rand.


echo "Gerando um número aleatorio com Rand entre $min e $max...<br>";
echo "O numero gerado foi $num<br>";

echo "Gerando um número aleatorio com mt_rand entre $min e $max...<br>";
echo "O numero gerado foi $num1<br>";

echo "Gerando um número aleatorio com random_int entre $min e $max...<br>";
echo "O numero gerado foi $num2<br>";

?>