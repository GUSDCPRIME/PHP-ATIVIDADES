<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>IMC Simples</title>
    <link rel="stylesheet" href="style_IMC.css">
</head>
<body>
<section>
    <h1>Calculadora de IMC</h1>
        <form method="post">

            Peso (kg): <input type="number" class= "receptor"  name= "peso"
            step="0.1" required><br><br>
            Altura (m): <input type="number" class="receptor" name="altura"
            step="0.01" required><br><br>
            <input type="submit" class="botão" value="Calcular IMC">
            </form>
            <br>
<div class="resultado">
<?php
echo "<h2>Resultado do IMC:</h2>";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];

    if ($altura > 0) {
        $imc = $peso / ($altura * $altura);
        echo "<p>Seu IMC é <strong>" . number_format
        (num: $imc, decimals: 2) . "</strong></p>";

        if ($imc < 18.5) {
            echo "<p>Classificação: Abaixo do peso</p>";
        } elseif ($imc < 25) {
            echo "<p>Classificação: Peso normal";
        } elseif ($imc < 30) {
            echo "<p>Classificação: Acima do peso";
        } else {
            echo "<p>Classificação: Obesidade";
        }
    }
}
?>
</div>
</section>
</body>
</html>