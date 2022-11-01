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


    //models

    //contatos

    class Contato {
        public $cod_contato;
        public $cod_cliente;
        public $nome_contato;
        public $email;
        public $telefone1;
        public $telefone2;
        public $celular;

        

        public function __construct($cod_contato, $cod_cliente, $nome_contato, $email, $telefone1, $telefone2, $celular) {
            $this->cod_contato = $cod_contato;
            $this->cod_cliente = $cod_cliente;
            $this->nome_contato = $nome_contato;
            $this->email = $email;
            $this->telefone1 = $telefone1;
            $this->telefone2 = $telefone2;
            $this->celular = $celular;
        }

        //getters

        public function getCodContato() {
            return $this->cod_contato;
        }

        public function getCodCliente() {
            return $this->cod_cliente;
        }

        public function getNomeContato() {
            return $this->nome_contato;
        }

        public function getEmail() {
            return $this->email;
        }

        public function getTelefone1() {
            return $this->telefone1;
        }

        public function getTelefone2() {
            return $this->telefone2;
        }

        public function getCelular() {
            return $this->celular;
        }

        //setters

        public function setCodContato($cod_contato) {
            $this->cod_contato = $cod_contato;
        }

        public function setCodCliente($cod_cliente) {
            $this->cod_cliente = $cod_cliente;
        }

        public function setNomeContato($nome_contato) {
            $this->nome_contato = $nome_contato;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public function setTelefone1($telefone1) {
            $this->telefone1 = $telefone1;
        }

        public function setTelefone2($telefone2) {
            $this->telefone2 = $telefone2;
        }

        public function setCelular($celular) {
            $this->celular = $celular;
        }

        
    }

    //client

    class Client {
        public $cod_cliente;
        public $razao_social;
        public $nome_fantasia;
        public $data_inclusao = "0000-00-00";
        public $endereco;
        public $complemento;
        public $bairro;
        public $cidade;
        public $estado;
        public $contatos = array();


        public function __construct($cod_cliente, $razao_social, $nome_fantasia, $data_inclusao, $endereco, $complemento, $bairro, $cidade, $estado) {
            $this->cod_cliente = $cod_cliente;
            $this->razao_social = $razao_social;
            $this->nome_fantasia = $nome_fantasia;
            $this->data_inclusao = $data_inclusao;
            $this->endereco = $endereco;
            $this->complemento = $complemento;
            $this->bairro = $bairro;
            $this->cidade = $cidade;
            $this->estado = $estado;
        }

        //add Contato

        public function addContato($contato) {
            try{
                if($contato instanceof Contato) {
                   $this->contatos[] = $contato; //adiciona o contato no array de contatos
                } else {
                    throw new Exception("O contato não é uma instância da classe Contato");
                }
            } catch (Exception $e) {
                echo "Erro ao adicionar contato: " . $e->getMessage();
            }
            
            
        }

        //setters

        public function setCodCliente($cod_cliente) {
            $this->cod_cliente = $cod_cliente;
        }

        public function setRazaoSocial($razao_social) {
            $this->razao_social = $razao_social;
        }

        public function setNomeFantasia($nome_fantasia) {
            $this->nome_fantasia = $nome_fantasia;
        }

        public function setDataInclusao($data_inclusao) {
            $this->data_inclusao = $data_inclusao;
        }

        public function setEndereco($endereco) {
            $this->endereco = $endereco;
        }

        public function setComplemento($complemento) {
            $this->complemento = $complemento;
        }

        public function setBairro($bairro) {
            $this->bairro = $bairro;
        }

        public function setCidade($cidade) {
            $this->cidade = $cidade;
        }

        public function setEstado($estado) {
            $this->estado = $estado;
        }

        public function setContatos($contatos) {
            $this->contatos = $contatos;
        }

        //getters

        public function getCodCliente() {
            return $this->cod_cliente;
        }

        public function getRazaoSocial() {
            return $this->razao_social;
        }

        public function getNomeFantasia() {
            return $this->nome_fantasia;
        }

        public function getDataInclusao() {
            return $this->data_inclusao;
        }

        public function getEndereco() {
            return $this->endereco;
        }

        public function getComplemento() {
            return $this->complemento;
        }

        public function getBairro() {
            return $this->bairro;
        }

        public function getCidade() {
            return $this->cidade;
        }

        public function getEstado() {
            return $this->estado;
        }

        public function getContatos() {
            return $this->contatos;
        }


    }
?>

