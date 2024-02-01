<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8"></meta>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"></meta>
        <title>Diário Escola - Exercícios Javascript</title>
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
            <h3 class="text-center">Exercícios em Javascript</h3>
            <h6 class="mt-5 mb-3">1) Percorra o objeto clientes e mostre o nome da cada cliente da seguinte maneira: “ultimoSobrenome, primeiroNome”;</h6>
            <pre class="border bg-white p-2" id="script"></pre>
            <h6 class="mt-3 mb-3">2) Formate a variável “numero” para o seguinte formato: “(XX)_X_XXXX-XXXX”;</h6>
            <pre class="border bg-white p-2" id="numero"></pre>
            <h6 class="mt-3 mb-3">3) Qual a ordem dos prints no console?</h6>
            <pre class="border bg-white p-2">A função é: c
A função é: d</pre>
            <h6 class="mt-3 mb-3">4) Existe algum erro nesse código? Se sim, comente sobre?</h6>
            <pre class="border bg-white p-2">O código não apresenta erros de sintaxe em si, porém existem alguns erros de semântica que podem ser refatorados e algumas boas práticas de desenvolvimento de software que poderiam ser adotadas.

Quanto aos erros de semântica:
O alertUser('b') presente na função b() jamais será executado. Isso ocorre porque o há um return que encerra prematuramente a função antes que as demais instruções possam ser executadas.
O alertUser("a") presente na função a() também não irá ser executado da maneira como o script foi escrito. Isso ocorre porque a função d() contém uma Promise não resolvida. Devido ao fato de a função d() ter sido invocada com await, as instruções abaixo dela somente serão executadas quando a Promise for resolvida, ou seja, nunca. 
Na função c(), levando em consideração o invoke do método resolve() antes da execução das demais instruções da Promise, seria melhor invocar o resolve() apenas quando todas as operações assíncronas estivessem concluídas. Desta forma, seria possível evitar que as demais funções que aguardam a finalização da função c() sejam iniciadas antes do seu término, de fato. Na realidade, escrever uma função assíncrona desta maneira anula todo o seu propósito. 

Quanto às boas práticas de desenvolvimento de software:
Na linha n° 5 a função alertUser() é invocada sem o ponto e vírgula para sinalizar o fim da instrução. Por mais que o Javascript consiga, em determinadas situações, inferir o término das instruções, é uma boa prática de desenvolvimento de software sempre sinalizar o términa das instruções com ponto e vírgula. Exceto, logicamente, em casos cuja própria linguagem de programação não implemente o seu uso.
Podemos apontar o espaço utilizado entre o parêntes e a chave na função a() que não está presente nas demais funções. Utilizar espaço ou não, neste caso, não traz nenhum malefício quanto à execução do código. Porém, é uma boa prática não adotá-lo, uma vez que todas as demais funções do script são declaradas sem esse espaço.
Ademais, podemos apontar, também, o uso de aspas na passagem de parâmetro do alertUser() presente na função a() que difere das demais passagens de parâmetro do script. Por mais que o Javascript aceite tanto as aspas quanto os apóstrofos para passagem de uma String como parâmetro, seria uma boa prática adotar o apóstrofo, assim como todos os demais invokes da função alertUser() estão fazendo ao decorrer do script.

Obs.: As boas práticas de desenvolvimento de software apontam determinadas situações que, embora não interfiram diretamente na execução do código-fonte, ajudam a manter um software mais limpo e com uma melhor manutenibilidade.
            </pre>    
        </main>
        <footer class="footer d-flex justify-content-between mt-auto py-2 px-5">
            <div>Diário Escola © 2024</div>
            <div>Desenvolvido por <a href="https://github.com/Pedro-Silveira" target="_blank">Pedro Silveira</a></div>
        </footer>
    </body>
    <script type="text/javascript" src="js/clientes.js"></script>
    <script type="text/javascript" src="js/bonus.js"></script>
</html>