<?php
    $mysqlli = mysqli_connect('127.0.0.1', 'root', '', 'p21');

    $id       = $_POST['id'];
    $nome     = $_POST['nome'];
    $documento = $_POST['documento'];
    $cep       = $_POST['cep'];
    $endereco  = $_POST['endereco'];
    $bairro    = $_POST['bairro'];
    $cidade    = $_POST['cidade'];
    $uf        = $_POST['uf'];
    $telefone  = $_POST['telefone'];
    $email     = $_POST['email'];
    $ativo     = '1';
    
    $sql = 'UPDATE clientes SET 
            nome = "' . $nome . '",
            documento = "' . $documento . '",
            cep = "' . $cep . '",
            endereco = "' . $endereco . '",
            bairro = "' . $bairro . '",
            cidade = "' . $cidade . '",
            uf = "' . $uf . '",
            telefone = "' . $telefone . '",
            email = "' . $email . '",
            ativo = "' . $ativo . '"
            WHERE id = "' . $id . '"';

    $sql = mysqli_query($mysqlli, $sql);

    if(mysqli_affected_rows($mysqlli)){
        $_SESSION['msg'] = "<p style='color:green;'>Usuário editado com sucesso</p>";
        header("Location: index.php");
    }else{
        $_SESSION['msg'] = "<p style='color:red;'>Usuário não foi editado com sucesso</p>";
        header("Location: editar.php?id=$id");
    }
?>