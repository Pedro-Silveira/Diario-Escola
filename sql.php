<?php
    include 'database/conexaobd.php';

    $conexao = ConexaoBD();
    $exercicio2 = $conexao->query("select a.Nome as 'Aluno', r1.Nome as 'Responsável 01', p1.Parentesco as 'Parentesco 01', r2.Nome as 'Responsável 02', p2.Parentesco as 'Parentesco 02' from Aluno as a JOIN Parentesco as p1 on a.ID = p1.IDAluno JOIN Responsavel as r1 on r1.ID = p1.IDResponsavel JOIN Parentesco as p2 on a.ID = p2.IDAluno JOIN Responsavel as r2 on r2.ID = p2.IDResponsavel where r1.ID <> r2.ID group by a.ID;");
    $exercicio3 = $conexao->query("select CONCAT(r.ID, ' - ', r.Nome) as 'Dados do Responsável', CONCAT(a.ID, ' - ', a.Nome) as 'Dados do Aluno', IF(p.Parentesco IS NULL, 'Este \"Responsável\" foi comprar cigarro :(', CONCAT('O responsável ', p.IDResponsavel, ' é ', p.Parentesco, ' do aluno ', p.IDAluno, '!')) as 'Grau de Parentesco' from Responsavel as r, Aluno as a, Parentesco as p where r.ID = p.IDResponsavel and a.ID = p.IDAluno;");
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Diário Escola - Exercícios SQL</title>
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
        <main class="mt-5 mx-5">
            <h3 class="text-center">Exercícios em SQL</h3>
            <h6 class="mt-5 mb-3">1) Escreva comandos SQL para inserir os dados abaixo conforme o diagrama apresentado.</h6>
            <pre class="border bg-white p-2">create database DiarioEscola;
use DiarioEscola;
create table Aluno(ID int not null AUTO_INCREMENT, Nome varchar(255), PRIMARY KEY(ID));
create table Responsavel(ID int not null AUTO_INCREMENT, Nome varchar(255), PRIMARY KEY(ID));
create table Parentesco(IDResponsavel int not null, IDAluno int not null, Parentesco varchar(255), FOREIGN KEY(IDResponsavel) REFERENCES Responsavel(ID), FOREIGN KEY(IDAluno) REFERENCES Aluno(ID));
insert into Aluno(Nome) values('Lucas');
insert into Responsavel(Nome) values('Pablo');
insert into Responsavel(Nome) values('Brenda');
insert into Parentesco(IDResponsavel, IDAluno, Parentesco) values(1, 1, 'Pai');
insert into Parentesco(IDResponsavel, IDAluno, Parentesco) values(2, 1, 'Mãe');</pre>
            <h6 class="mt-3 mb-3">2) Escreva uma consulta SQL para retornar dados únicos conforme tabela abaixo. Caso o aluno tenha mais de dois responsáveis, traga apenas os dois primeiros responsáveis encontrados na tabela.</h6>
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered bg-white mb-0">
                    <thead>
                        <tr>
                            <th scope="col">Aluno</th>
                            <th scope="col">Responsável 01</th>
                            <th scope="col">Parentesco 01</th>
                            <th scope="col">Responsável 02</th>
                            <th scope="col">Parentesco 02</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($exercicio2 as $result){
                                echo('<tr><td>'.$result["Aluno"].'</td><td>'.$result["Responsável 01"].'</td><td>'.$result["Parentesco 01"].'</td><td>'.$result["Responsável 02"].'</td><td>'.$result["Parentesco 02"].'</td></tr>');
                            };
                        ?>
                    </tbody>
                </table>
            </div>
            <h6 class="mt-3 mb-3">3) Escreva uma consulta SQL para trazer todos os dados. Seja criativo.</h6>
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered bg-white mb-3">
                    <thead>
                        <tr>
                            <th scope="col">Dados do Responsável</th>
                            <th scope="col">Dados do Aluno</th>
                            <th scope="col">Grau de Parentesco</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($exercicio3 as $result){
                                echo('<tr><td>'.$result["Dados do Responsável"].'</td><td>'.$result["Dados do Aluno"].'</td><td>'.$result["Grau de Parentesco"].'</td></tr>');
                            };
                        ?>
                    </tbody>
                </table>
        </main>
        <footer class="footer d-flex justify-content-between mt-auto py-2 px-5">
            <div>Diário Escola © 2024</div>
            <div>Desenvolvido por <a href="https://github.com/Pedro-Silveira" target="_blank">Pedro Silveira</a></div>
        </footer>
    </body>
</html>