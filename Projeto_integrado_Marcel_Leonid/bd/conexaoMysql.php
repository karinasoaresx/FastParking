<?php
    function conexaoMysql(){
        $server = (string) "localhost";
        $user = (string) "root";
        $password = (string) "bcd127";
        $dataBase = (string) "dbEstacionamento";
        
        if($conexao = @mysqli_connect($server, $user, $password, $dataBase)){
            return $conexao;
        }
        else{
            return false;
        }
    }
?>