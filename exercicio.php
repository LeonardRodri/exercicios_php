<!DOCTYPE html>
    <html lang="PT-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css\estilos.css">
        <link rel="stylesheet" href="css\exercicio.css">
        <title>Exercícios</title>
    </head>
    <body class="exercicio">
        <header class="cabecalho">
            <h1>Curso PHP</h1>
            <h2>Visualização dos Exercícios</h2>
        </header>
        <nav class="navegacao">
            <a href=<?= $_GET['dir'] . "\\" . $_GET['file'] . ".php"?> class="verde">Sem formataçao</a>
            <a href="index.php" class="vermelho">Voltar</a>
        </nav>
        <main class="principal">
            <div class="conteudo">
                <?php
                    include($_GET['dir'] . "\\" . $_GET['file'] . ".php");
                ?>
            </div>
        </main>
        <footer class="rodape">
            Leonardo@Rodrigues <?= date('Y'); ?>
        </footer>
    </body>
</html>