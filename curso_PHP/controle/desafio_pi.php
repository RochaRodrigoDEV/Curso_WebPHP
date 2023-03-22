<div class="titulo">Desafio PI</div>

<?php
echo pi();
$pi = 3.14;
echo '<br>';

var_dump($pi);
var_dump(pi());


if ($pi === pi()){
    echo "iguais!";
}else {
    echo "Diferentes!";
}

$piErrado = 2.8;

// Resposta
echo '<br>' . ($pi - pi());
echo '<br>' . ($pi - $piErrado);

echo '<br>';

if ($pi - pi() <= 0.01){
    echo "Iguais!";
}else {
    echo "Diferentes!";
}
echo'<br>';

if ($pi - $piErrado <= 0.01){
    echo "Iguais!";
}else {
    echo "Valor errado!";
}
