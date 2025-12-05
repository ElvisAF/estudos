<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Tinta</title>
</head>
<body>
    <h1>Calculadora de Tinta para Parede</h1>

    <?php
    
    if (isset($_POST['largura']) && isset($_POST['altura'])) {
        $largura = floatval($_POST['largura']);
        $altura = floatval($_POST['altura']);

        
        $area = $largura * $altura;

      
        $tinta = $area / 2;

        
        echo "<h2>--- Relatório de Pintura ---</h2>";
        echo "Para uma parede de {$largura}m de largura e {$altura}m de altura:<br>";
        echo "Área total: {$area} m²<br>";
        echo "Serão necessários {$tinta} litros de tinta.";
    } else {
        
        echo '<form method="post" action="">
                <label>Largura da parede (m): </label>
                <input type="number" step="0.01" name="largura" required><br><br>
                
                <label>Altura da parede (m): </label>
                <input type="number" step="0.01" name="altura" required><br><br>
                
                <input type="submit" value="Calcular">
              </form>';
    }
    ?>

</body>
</html>
