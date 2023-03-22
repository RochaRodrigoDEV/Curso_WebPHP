<div class="titulo">Operadores Relacionais</div>

<?php
var_dump(1 == 1); 
var_dump(1 > 1); 
var_dump(1 >= 1);
var_dump(4 <= 23);
var_dump(4 < 23);
var_dump(1 != 1);
var_dump(1 <> 1);

echo '<br>';

var_dump(1 == '1');
var_dump(1 === '1');

var_dump(1 != '1');
var_dump(1 !== '1');

echo '<p class ="divisao"> Relacionais no if/Else </p><hr>';
$idade = 15;
if ($idade >= 18){
    echo "Você é adulto! = $idade";
}else if($idade < 18){
    echo "Você é menor de idade = $idade";
}else if ($idade <= 15){
    echo "Voce é adolecente = $idade";
}else if ($idade <= 12){
    echo "Você é criança = $idade ";
}else {
    echo "Você é um nenem = $idade";
};

echo '<p>Spaceship</p><hr>';
var_dump(500 <=>3);
var_dump(500 <=> 500);
var_dump(50 <=> 500);

echo '<p class ="divisao">Valores podem ser V ou F</p><hr>';
var_dump(!!5);
var_dump(!!0);
var_dump(!!"");
var_dump(!!" ");


