<div class="titulo">Atribuições</div>

<?php

$title = 'Atribuições';
echo $title;

$numeros = 10;
echo '<br>' . $numeros;
$numeros = $numeros - 3;
echo '<br>' . $numeros;
$numeros = $numeros + 1.5;
echo '<br>' . $numeros;
$numeros++;
++$numeros;
echo '<br>' . $numeros;
$numeros--;
--$numeros;
echo '<br>' . $numeros;

$numeros -= 1;
echo '<br>' . $numeros;
$numeros += 5;
echo '<br>' . $numeros;
$numeros *= 5;
echo '<br>' . $numeros;
$numeros /= 2;
echo '<br>' . $numeros;
$numeros %= 6;
echo '<br>' . $numeros;

$texto = 'Esse é um texto';
echo '<br>' . $texto;
$texto = $texto .  ' qualquer';
echo '<br>' . $texto;
$texto .=' de verdade!';
echo '<br>' . $texto;

//$variavelInexistente = 'valor existente';
//echo '<br>' . $variavelInexistente;
var_dump($variavelInexistente);
$valor = $variavelInexistente ?? 'valor default';
echo '<br>' . $valor;
