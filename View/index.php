<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reset.css">
    <?php
        error_reporting(E_ERROR | E_PARSE);
        include_once '../Controller/processar.php';
    ?>
</head>
<body>
    <div class="conteudo">
        <h1 class="title">Agenda</h1>
        <form method="POST">
            <input type="text" name="entrada" id="entrada">
            <input type="submit" id="btn_reg" value="Registrar">
        </form>
        <button class="btn_limpar" onclick="window.location.href='../Controller/limpar_tarefas.php'">Limpar</button>
        <iframe src="lista.php" id="lista"></iframe>
    </div>
</body>
</html>