<!DOCTYPE html>
    <html lang="PT-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css\estilos.css">
        <title>Curso PHP</title>
    </head>
    <body>
        <header class="cabecalho">
            <h1>Curso PHP</h1>
            <h2>Índice dos Exercícios</h2>

        </header>
        <main class="principal">
            <div class="conteudo">
                <nav class="modulos">
                    <div class="modulo verde">
                        <h3>Modulo 01</h3>
                        <ul>
                            <li>
                                <a href="exercicio.php?dir=basico&file=ola">Ola PHP</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=basico&file=html">Integração PHP</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=basico&file=css">Integração CSS</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=basico&file=comentarios">Comentarios PHP</a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=basico&file=desafio">Desafio do modulo</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>

        </main>
        <footer class="rodape">
            Leonardo@Rodrigues <?= date('Y'); ?>
        </footer>
    </body>
</html>