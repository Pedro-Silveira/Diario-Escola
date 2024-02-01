<?php
    function ConexaoBD(){
        $host = 'localhost';
        $usuario = 'root';
        $senha = '123456';
        $banco = 'DiarioEscola';

        $conexao = new mysqli($host, $usuario, $senha, $banco);
    
        if(!$conexao){
            die('Houve um erro na conexão: '.mysqli_connect_error());
        }
        return $conexao;
    };

    function EncerrarConexao(){
        $conexao->close();
    };
?>