<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Bem-vindo!</title>
</head>
<body>
    <h1>Sua Saudação Personalizada</h1>
    <p>
        <?php
            // Captura o valor enviado pelo formulário
            $nomeRecebido = $_POST['campo_nome'];

            // Exibe a mensagem personalizada
            echo "Olá, " . htmlspecialchars($nomeRecebido) . "! Seja muito bem-vindo(a) ao mundo do Back-End!";
        ?>
    </p>
</body>
</html>
