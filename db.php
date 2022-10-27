<?php

//mysqld connection
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "clientes_contatos";
$port = "8889";

// Create connection
    try{
        $conn = mysqli_connect($servername, $username, $password, $dbname, $port);
        #echo "Connected successfully";

       

        

    } catch (Exception $e) {
        echo "Erro ao conectar com o banco de dados: " . $e->getMessage();
    }
?>

