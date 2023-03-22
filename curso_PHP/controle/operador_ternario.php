<div class="titulo">Operador Ternario</div>

<?php
$idade = 70;
$status;

if ($idade >= 18) {
    $status = 'Maior de idade!';
} else {
    $status = 'Menor de idade!';
};

echo "$status <br>";

$idade2 = 10;
$status = $idade2 >= 18 ? 'Maior de idade!' : 'Menor de idade!';
echo "$status <br>";


$status = $idade >= 18 ? $idade >= 65 ? 'Aposentado' : 'Maior de idade' : ' Menor de idade';
echo "$status <br>";