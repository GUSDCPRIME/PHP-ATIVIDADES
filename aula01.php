<h1>BEM-VINDO À AULA DE PHP!</h1>
<?php
    // comentário de uma linha
    /**
     * Este é um bloco de comentário
     * 
     * 
     */
    // Aula do dia 23.04.25
    echo "Olá Mundo<br>";

    // Variáveis em PHP
    $nome = "Carlinhos";
    $preco = 11.90;
    $soma = $preco * 4;
    $soma = number_format(num: $soma,decimals: 2);

    // Mostrando resultado
    echo "O nome do cliente é $nome<br>";
    echo "O preço unitário da revista é R$ $preco<br>";
    echo "O total R$ $soma<br>";

    date_default_timezone_set(timezoneId: 'America/Sao_Paulo');
    $hora = (int)date(format: 'H');
    
    if ($hora < 12) {
        echo "Bom dia";
    } elseif ($hora >= 12 && $hora < 18) {
        echo "Boa tarde";
    } else {
        echo "Boa noite";
    }
?>