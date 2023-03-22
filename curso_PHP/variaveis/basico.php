<div class="titulo">Variáveis</div>

<?php
$numeroA = 13;
echo $numeroA;
echo '<br>';
var_dump($numeroA);
echo '<br>';
$a = 3; 
$b = 16;
$soma = $a + $b;
echo $soma;
echo '<br>';

echo isset($soma);
unset($soma);

$variavel = 10;
echo '<br>' . $variavel;

$variavel = "Agora sou uma String!";
echo '<br>' . $variavel;

// Nomes de variáveis 
$var ='valida';
$var2 = 'valida';
$VAR3 = 'valida';
$_var_4 = 'valida';
$vâr5 = 'valida';//evitar
//$6var = 'invalida';
//$%var7 = 'invalida';
//$var8% = 'invalida';

echo '<br>' . $_SERVER;
var_dump($_SERVER["HTTP_HOST"]);