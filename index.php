<?php
//run the connection script
require_once "db.php";
$title_page = "Clientes";
include 'header.php';


?>


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

    <table id="tab_clientes" class="table table-bordered">
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
                echo "<td><a href='editar.php?cod_cliente=" . $cliente['cod_cliente'] . "'>Editar</a>";
                echo "<a href='excluir.php?cod_cliente=" . $cliente['cod_cliente'] . "'>Excluir</a></td></tr>";
            }
            ?>


        </tbody>

    </table>

    <div class="container">
        <div class="row">
            <div class="col">
                <a href="cadastro.php"><button type="button" data-toggle="modal" class="btn btn-secondary btn-sm" data-target="#cadastro_modal">Novo</button></a>

            </div>
        </div>




       



</body>


</html>