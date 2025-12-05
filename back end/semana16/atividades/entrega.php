<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        const NOME_EMPRESA = "Toramento Sites";
        $nomeProduto = "Toramento 4060";
        $quantidadeEstoque = 19;       // inteiro
        $precoUnitario = 3200.00;      // float
        $emPromocao = false;            // boolean

        echo "=== Relatório de Produto ===<br>";
        echo "Empresa: " . NOME_EMPRESA . "<br>";
        echo "Produto: " . $nomeProduto . "<br>";
        echo "Quantidade em Estoque: " . $quantidadeEstoque . "<br>";
        echo "Preço Unitário: R$ " . number_format($precoUnitario, 2, ',', '.') . "<br>";
        echo "Em Promoção: " . ($emPromocao ? "Sim" : "Não") . "<br>";

        // 4. Inspecionando a variável $emPromocao
        echo "<br>=== var_dump de \$emPromocao ===<br>";
        var_dump($emPromocao);
    ?>

    ?>
    
</body>
</html>