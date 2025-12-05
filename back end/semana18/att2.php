<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <?php

        $baseMaior = 10;
        $baseMenor = 6;
        $altura = 4;

        $area = (($baseMaior + $baseMenor) * $altura) / 2;

        echo "Base Maior: $baseMaior <br>";
        echo "Base Menor: $baseMenor <br>";
        echo "Altura: $altura <br>";
        echo "Área do trapézio: $area";
?>
    
</body>
</html>