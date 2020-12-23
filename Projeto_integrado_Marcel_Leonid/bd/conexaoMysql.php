<?php
    function conexaoMysql(){
        $server = (string) "localhost";
        $user = (string) "root";
        //$password = (string) "bcd127";
        $password = (string) "ka05ri09na01";
        $dataBase = (string) "dbFastParking";
        
        if($conexao = @mysqli_connect($server, $user, $password, $dataBase)){
            return $conexao;
        }
        else{
            return false;
        }
    }
?>