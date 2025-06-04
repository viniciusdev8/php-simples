<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>

<body>
    <section>
        <?php

        $salarioAtual = 1518.00;
        $salarioRecebido = isset($_POST['salario']) ? floatval($_POST['salario']) : 1518.00;

        $qtdSalarios = floor($salarioRecebido / $salarioAtual);
        $restante = fmod($salarioRecebido, $salarioAtual);

        if ($qtdSalarios < 1) {
            $qtdSalarios = 0;
            $restante = 0;
        }
        echo "<div class=\"fundoh1h2\">";
        echo "<h1>Considerando o salário mínimo: R$ 1.518,00</h1><br>";
        echo "<h2>O seu salário recebido de R$ " . number_format($salarioRecebido, 2, ',', '.') . " equivale a " . number_format($qtdSalarios, 0) . " salário(s) mínimo(s) e mais R$ " . number_format($restante, 2, ',', '.') . ".</h2><br>";
        echo "<p>Clique <strong><a href=\"index.html\">aqui</a></strong> para retornar</p>";
        echo "</div><br>";
        
        ?>
    </section>
</body>

</html>