<?php

include 'header.php';

$newCliente = new Client($_POST['cod_cliente'], $_POST['razao_social'], $_POST['nome_fantasia'], $_POST['data_inclusao'], $_POST['endereco'], $_POST['complemento'], $_POST['bairro'], $_POST['cidade'], $_POST['estado']);
?>

<body>

    <div class="card info_cliente">
        <div class="card-body">
            <h5 class="card-title">CADASTRO</h5>
            <p class="card-text">
            <form action="adicionar.php" method="POST">
                <label for="cod_cliente">Código do Cliente</label>
                <input type="text" name="cod_cliente" id="cod_cliente" class="form-control" placeholder="Código do Cliente" aria-describedby="helpId">
                <label for="razao_social">Razão Social</label>
                <input type="text" name="razao_social" id="razao_social" class="form-control" required>
                <label for="nome_fantasia">Nome Fantasia</label>
                <input type="text" name="nome_fantasia" id="nome_fantasia" class="form-control" required>
                <label for="data_inclusao">Data de Inclusão</label>
                <input type="date" name="data_inclusao" id="data_inclusao" class="form-control" required>
                <label type="text" for="endereco">Endereço</label>
                <input type="text" name="complemento" id="complemento" class="form-control" required>
                <label for="bairro">Bairro</label>
                <input type="text" name="bairro" id="bairro" class="form-control" required>
                <label for="cidade">Cidade</label>
                <input type="text" name="cidade" id="cidade" class="form-control" required>
                <label for="estado">Estado</label>
                <input type="text" name="estado" id="estado" class="form-control" required>

                <input type="submit" class="btn btn-primary btn-sm" value="Cadastrar">

            </form>
            </p>
        </div>
    </div>


    <div class="card info_contatos_cliente">
        <div class="card-body">
            <h5 class="card-title">CONTATOS</h5>
            <p class="card-text">
            <table class="table table-light">
                <thead class="thead-light">
                    <tr>
                        <th>Código do Contato</th>
                        <th>Nome</th>
                        <th>Telefone1</th>
                        <th>Telefone2</th>
                        <th>Celular</th>
                        <th>Email</th>
                        <th></th>

                    </tr>

                <tbody>
                    <tr>

                    </tr>
                </tbody>
                <!-- <tfoot>
                        <tr>
                            <th>#</th>
                        </tr>
                    </tfoot> -->
            </table>
            </p>


            <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#cadastro_contato">Novo</button>

        </div>


    </div>



    <!-- Modal -->
    <div class="modal" id="cadastro_contato" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Cadastro Contato</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>