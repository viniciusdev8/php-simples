<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>

<body>
    <main>
        <?php
        $produto = $_REQUEST['produto'];
        $custo = $_REQUEST['custo'];
        $reajuste = $_REQUEST['reajuste'];

        $calc = ($custo*$reajuste) / 100;
        $reajusteAtt = ($custo+$calc);

        ?>

        <div class="reaj">
            <label>Produto:
                <input type="text" value="<?= strtoupper($produto) ?>" readonly>
            </label>
            <br>
            <label for=""> Valor <strong>anterior</strong>
                <input type="text" value="R$ <?=number_format($custo, 2, ',', '.')?>" readonly>
            </label>
            <br>
            <label for=""> Valor <strong>atual</strong>
                <input type="text" value="R$ <?=number_format($reajusteAtt, 2, ',', '.')?>" readonly>
            </label>
            <br>
            <label> % Reajuste
                <input type="text" value="% <?=number_format($reajuste, 2, ',', '.')?>" readonly>
            </label>
            <br>
            <p>Clique <strong><a href="index.html">aqui</a></strong> para voltar</p>
        </div>
    </main>
</body>

</html>