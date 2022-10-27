<?php
//run the connection script
require_once "db.php";

//query the database




?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/mystyle.css">



    <!-- Bootstrap CSS on assets -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Bootstrap JS on assets -->
    <script src="assets/js/bootstrap.min.js"></script>


    <title>Clientes</title>
</head>

<body>


    <div class="container conteudo">
        <div class="row">
            <div class="col">

            </div>
            <div class="col">
                <h1 class="titulo">Cadastro de Clientes Contatos</h1>


            </div>
            <div class="col">

            </div>
        </div>
    </div>


    <?php

    $sql = "SELECT * FROM cliente";

    $result = $conn->query($sql);

    $result  = mysqli_fetch_all($result, MYSQLI_ASSOC);

    $quant_contatos = 'select  cliente.cod_cliente as COD,count("cod_cliente")as COUNT_Q  from  cliente 
    INNER JOIN contato
    WHERE cliente.cod_cliente = contato.cod_cliente
    group by cliente.cod_cliente;';

    $result2 = $conn->query($quant_contatos);


    $quant_contatos = $result2->fetch_all();




    ?>

    <table id="example" class="table table-bordered" >
        <thead>
            <tr>


                <th>Cód. Cliente</th>
                <th>Razão Social</th>
                <th>Nome Fantasia</th>
                <th>Data de Inclusão</th>
                <th>Nº Contatos</th>
                <th>Editar</th>

            </tr>
        </thead>
        <tbody>

            <?php foreach ($result as $cliente) {

                $data =  new DateTime($cliente['data_inclusao']);

                //formato de data
                $data = $data->format('d/m/Y');

                echo " <tr><td>" . $cliente['cod_cliente'] . "</td>";
                echo "<td>" . $cliente['razao_social'] . "</td>";
                echo "<td>" . $cliente['nome_fantasia'] . "</td>";
                echo "<td>{$data}</td>";
                echo "<td>" . $quant_contatos[$cliente['cod_cliente']][1] . "</td>";
                echo "<td><a href='editar.php?cod_cliente=" . $cliente['cod_cliente'] . "'>Editar</a></td></tr>";


            }
            ?>


        </tbody>

    </table>


</body>


</html>