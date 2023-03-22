<div class="titulo">Arrays Constantes</div>

<?php

const FRUTAS = ['Laranja', 'Abacaxi'];
//FRUTAS [0] = 'banana';
//FRUTAS [] = 'banana';
echo FRUTAS [0];

const CARROS = ["Fiat" => "Uno", "ford" => "Fiesta"];
echo '<br>' . CARROS ["Fiat"];

define ('CIDADES', array('Belo Horizonte', 'Recife'));
echo '<br>' . CIDADES [1];