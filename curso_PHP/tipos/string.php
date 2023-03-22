<div class="titulo">Tipo String</div>

<?php
echo 'Eu sou um string';
echo '<br>';
var_dump("Eu também");
echo '<br>';

// concatenação

echo "Nós tanbém ". 'somos';
echo '<br>', "Tanbém aceito ", "virgulas", '<br>';

echo "'Teste' " . '"Teste" ' . '\'Teste\'';
echo '<br>';

print("Tanbém existe a função print");
echo '<br>';
print"Tanbém existe a função print";

//Algumas funções
echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('MINIMIZANDO');
echo '<br>'. ucfirst('só a primeira letra');
echo '<br>'. ucwords('todas as palavras');
echo '<br>'. strlen('Quantas letras?');
echo '<br>'. strlen('Eu também');
echo '<br>'. mb_strlen('Eu também', "utf-8");
echo '<br>'. substr('Só uma parte mesmo', 7, 6);
echo '<br>'. str_replace('isso', 'aquilo', 'trocar isso');