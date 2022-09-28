<?php
$mysqlli = mysqli_connect('127.0.0.1', 'root', '', 'p21');

//function cadastrar usuario

// var_dump($_POST);
// die();

$nome      = $_POST['nome'];
$documento = $_POST['documento'];
$cep       = $_POST['cep'];
$endereco  = $_POST['endereco'];
$bairro    = $_POST['bairro'];
$cidade    = $_POST['cidade'];
$uf        = $_POST['uf'];
$telefone  = $_POST['telefone'];
$email     = $_POST['email'];
$ativo     = '1';


$sql = 'INSERT INTO clientes (nome, documento, cep, endereco, bairro, cidade, uf, telefone, email, ativo) 
        VALUES ("' . $nome . '", 
                "' . $documento . '",
                "' . $cep . '",
                "' . $endereco . '", 
                "' . $bairro . '", 
                "' . $cidade . '", 
                "' . $uf . '",
                "' . $telefone . '", 
                "' . $email . '", 
                "' . $ativo . '"
            )';

mysqli_query($mysqlli, $sql);
