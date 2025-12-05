<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cálculo de Desconto</title>
</head>
<body>
    <?php
        
        $precoProduto = 150.00;
        $percentualDesconto = 10;

        $valorDesconto = ($precoProduto * $percentualDesconto) / 100;

        $precoFinal = $precoProduto - $valorDesconto;

        echo "Preço original: R$ " . number_format($precoProduto, 2, ) . "<br>";
        echo "Desconto ({$percentualDesconto}%): R$ " . number_format($valorDesconto, 2, ) . "<br>";
        echo "Preço final: R$ " . number_format($precoFinal, 2, );
    ?>
</body>
</html>
