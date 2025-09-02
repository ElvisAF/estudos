<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$cotacaoDolar = 5.45;
$valoresDolar = [10, 50, 100];

echo "+-------------------------------------+\n";
echo "|   TABELA DE CONVERSÃO DE MOEDAS    |\n";
echo "| Cotação do Dólar: R$ " . str_pad(number_format($cotacaoDolar, 2, ',', '.'), 14, " ", STR_PAD_RIGHT) . "|\n";
echo "+-------------------------------------+\n";
echo "| Dólar (US$)   | Real (R$)         |\n";
echo "+---------------+-------------------+\n";

foreach ($valoresDolar as $valor) {
    $real = $valor * $cotacaoDolar;
    // Alinha os números nas colunas
    printf("| US$ %6.2f     | R$ %7.2f         |\n", $valor, $real);
}

echo "+-------------------------------------+\n";
?>
    
</body>
</html>