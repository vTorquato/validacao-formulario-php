<?php
// 1. Verificamos se os campos existem e não estão vazios
$campos_preenchidos = (
    isset($_POST["nome"]) && !empty(trim($_POST["nome"])) && 
    isset($_POST["email"]) && !empty(trim($_POST["email"]))
);

// 2. Verificamos se o formato do e-mail é válido
$email_valido = false;
if ($campos_preenchidos) {
    $email_valido = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
}

$sucesso = ($campos_preenchidos && $email_valido);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>
    <?php if ($sucesso): 
        $nome = htmlspecialchars($_POST["nome"]);
        $email = htmlspecialchars($_POST["email"]);
    ?>
        <h2>Dados Recebidos com Sucesso!</h2>
        <p>Bem-vindo, <strong><?php echo $nome; ?></strong>!</p>
        <p>Seu e-mail <strong><?php echo $email; ?></strong> foi validado.</p>

    <?php else: ?>
        <h2>Erro no Processamento</h2>
        <p>Certifique-se de preencher o nome e um e-mail válido.</p>
        <p><a href="frontend.html">Voltar ao formulário</a></p>
    <?php endif; ?>
</body>
</html>