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

        $dividendo = (!empty($_POST['dividendo']) ? intval($_POST['dividendo']) : 1);
        $divisor = ((!empty($_POST['divisor'])) ? intval($_POST['divisor']) : 1);


        $quociente = floor($dividendo / $divisor);
        $resto = ($dividendo % ($quociente * $divisor));
        echo "<div class=\"fundo\">";
        echo "Dividendo: $dividendo <br>";
        echo "Divisor: $divisor <br>";
        echo "Resultado: $quociente <br>";
        echo "Resto: $resto <br>";
        echo "<p>Clique <strong><a href=\"index.html\">aqui</a></strong> para retornar</p>";
        echo "</div>";

        ?>
    </section>
    
</body>

</html>