<form method="post">
    <label for="min">Min:</label>
    <input type="number" name="min" id="min" /><br />
    <label for="max">Max:</label>
    <input type="number" name="max" id="mnax" /><br />
    <input type="submit" name="generate" id="generate" value="Generar Numero" /><br />
</form>

<?php

function aleatorio($min, $max)
{
    return mt_rand($min, $max);
}

if (array_key_exists('generate', $_POST)) {
    $min = $_POST["min"];
    $max = $_POST["max"];
    echo aleatorio($min, $max);
}
?>