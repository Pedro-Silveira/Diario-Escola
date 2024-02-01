<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Diário Escola - Página Inicial</title>
        <link rel="icon" type="image/x-icon" href="images/icon.png" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="css/index.css" />
    </head>
    <body class="d-flex flex-column min-vh-100">
        <header>
            <nav class="navbar navbar-expand-sm navbar-dark">
                <div class="container-fluid px-5 py-2">
                    <a class="navbar-brand mx-5" href="index.php"><img id="logo" src="images/menu-mobile.svg" height="45" width="45"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarID" aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarID">
                        <div id="hove" class="navbar-nav mx-5">
                            <a class="nav-link" aria-current="page" href="php.php"><i class="bi bi-filetype-php"></i> PHP</a>
                            <a class="nav-link" aria-current="page" href="javascript.php"><i class="bi bi-filetype-js"></i> Javascript</a>
                            <a class="nav-link" aria-current="page" href="sql.php"><i class="bi bi-filetype-sql"></i> SQL</a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <main class="my-auto mx-5 text-center">
            <h1>Exercícios para o Diário Escola.</h1>
            <p class="lead">Este projeto contém exercícios em PHP, Javascript e SQL que desenvolvi como um teste para o Diário Escola. Para executá-los, basta acessar suas respectivas páginas através do menu de navegação.</p>
        </main>
        <footer class="footer d-flex justify-content-between mt-auto py-2 px-5">
            <div>Diário Escola © 2024</div>
            <div>Desenvolvido por <a href="https://github.com/Pedro-Silveira" target="_blank">Pedro Silveira</a></div>
        </footer>
    </body>
</html>