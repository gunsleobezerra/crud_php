<?php
//var_dump($_POST);
require_once "db.php";

if ($_POST) {

    $cliente = new Client($_POST['cod_cliente'], $_POST['razao_social'], $_POST['nome_fantasia'], $_POST['data_inclusao'], $_POST['endereco'], $_POST['complemento'], $_POST['bairro'], $_POST['cidade'], $_POST['estado']);

    

    try {
        $sql = "INSERT INTO cliente (cod_cliente,razao_social, nome_fantasia, data_inclusao, complemento, bairro, cidade, estado) VALUES ( ?,?, ?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);

        $stmt->bind_param(
            "ssssssss",
            $cliente->getCodCliente(),
            $cliente->getRazaoSocial(),
            $cliente->getNomeFantasia(),
            $cliente->getDataInclusao(),
            $cliente->getComplemento(),
            $cliente->getBairro(),
            $cliente->getCidade(),
            $cliente->getEstado()
        );

        $stmt->execute();

        $stmt->close();
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
include 'index.php';
