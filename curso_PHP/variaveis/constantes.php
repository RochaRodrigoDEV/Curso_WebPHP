<div class="titulo">Constantes</div>

<?php
define('TAXA_DE_JUROS', 5.9);
echo TAXA_DE_JUROS;

const NOVA_TAXA = 2.5;
echo '<br>' . NOVA_TAXA;

$valorVariavel = 2.8;
//define('NOVISIMA_TAXA', $valorVariavel);
//const NOVISIMA_TAXA = $valorVariavel;
const NOVISIMA_TAXA = 2.8 + 1.2;
echo '<br>' . NOVISIMA_TAXA;

echo '<br>'. PHP_VERSION;
echo '<br>'. PHP_INT_MAX;

echo '<br>'. __LINE__;
echo '<br>'. __FILE__;
echo '<br>'. __DIR__;