<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > km</option>
        <option value="metro-km">Metros > km</option>
        <option value="km-metro">Km > Metros</option>
        <option value="celsius-fahrenheit">°C > °F </option>
        <option value="fahrenheit-celsius">°F > °C</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form>* {
        font-size: 1.8rem;

    }
</style>

<?php

const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;
const FATOR_CELCIUS_FAHRENHEIT = 1.8;

$param = $_POST['param'] ?? 0;

switch ($_POST['conversao']) {
    case 'km-milha':
        $distancia = $param * FATOR_KM_MILHA;
        $mensagem = "$param Km = $distancia Milhas";
        break;
    case 'milha-km':
        $distancia = $param / FATOR_KM_MILHA;
        $mensagem = "$param Milha = $distancia Km";
        break;
    case 'metro-km':
        $distancia = $param / FATOR_METRO_KM;
        $mensagem = "$param Metros = $distancia Km";
        break;
    case 'km-metro':
        $distancia = $param * FATOR_METRO_KM;
        $mensagem = "$param Km = $distancia Metros";
        break;
    case 'celsius-fahrenheit':
        $temperatura = $param * FATOR_CELCIUS_FAHRENHEIT + 32;
        $mensagem = "{$param}°Celcius = {$temperatura}° Fahrenheit";
        break;
    case 'fahrenheit-celsius':
        $temperatura = $param / FATOR_CELCIUS_FAHRENHEIT + 32;
        $mensagem = "{$param}° Fahrenheit = {$temperatura}° Celcius";
        break;
    default:
        $mensagem = "Insira um valor valido";
};

echo "<p>$mensagem</p>";
