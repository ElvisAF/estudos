    <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   
     const PESO_PROVA_1 = 2;
     const PESO_PROVA_2 = 3;
     const PESO_TRABALHO = 5;

    
     $notaProva1 = 10;
     $notaProva2 = 10;
     $notaTrabalho = 10;

   
     $somaPonderada = ($notaProva1 * PESO_PROVA_1) 
                   + ($notaProva2 * PESO_PROVA_2) 
                   + ($notaTrabalho * PESO_TRABALHO);

    
     $somaPesos = PESO_PROVA_1 + PESO_PROVA_2 + PESO_TRABALHO;

    
     $mediaFinal = $somaPonderada / $somaPesos;

     echo "--- Boletim do Aluno Elvis ---\n";
     echo "Nota Prova 1 (Peso " . PESO_PROVA_1 . "): $notaProva1 \n" ;
     echo "Nota Prova 2 (Peso " . PESO_PROVA_2 . "): $notaProva2 \n";
     echo "Nota Trabalho (Peso " . PESO_TRABALHO . "): $notaTrabalho \n";
     echo "--------------------------\n";
     echo "Média Final Ponderada: " . round($mediaFinal, 2) . "\n";

?>
</body>
</html>
