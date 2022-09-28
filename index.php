<?php
    $mysqlli = mysqli_connect('127.0.0.1', 'root', '', 'p21');

    //Consumindo dados do xml e salvando no banco de dados
    $xml = simplexml_load_file('clientes.xml');

    foreach($xml->torcedor as $torcedor){
       
        $nome = $torcedor['nome'];
        $documento = $torcedor['documento'];
        $cep = $torcedor['cep'];
        $endereco = $torcedor['endereco'];
        $bairro = $torcedor['bairro'];
        $cidade = $torcedor['cidade'];
        $uf = $torcedor['uf'];
        $telefone = $torcedor['telefone'];
        $email = $torcedor['email'];
        $ativo = $torcedor['ativo'];

        // var_dump($nome);
        $sql = 'INSERT INTO clientes
        (nome, documento, cep, endereco, bairro, cidade, uf, telefone, email, ativo)
        VALUES(
                "' . $nome . '",
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
    }

    //Consumindo banco de dados
    $sql = 'SELECT `id`, nome, documento, cep, endereco, bairro, cidade, uf, telefone, email, ativo 
            FROM clientes
            ORDER BY `id` DESC
            LIMIT 15';

    $result = mysqli_query($mysqlli, $sql);

    $log = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastro de torcedores All Blacks</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
    <body>
       
        <div class="w-75 p-3" style="margin-top: 1%; margin-left: 10%; ">
            <h1>Cadastro de torcedores</h1>
            <a class="btn btn-primary" href="cadastro.php" style="float: right; margin-bottom: 3px;"> Cadastrar</a>
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Documento</th>
                        <th scope="col">CEP</th>
                        <th scope="col">Endereço</th>
                        <th scope="col">Bairro</th>
                        <th scope="col">Cidade</th>
                        <th scope="col">UF</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Ativo</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($log as $torcedor): ?>
                        <tr>
                            <td><?= $torcedor['nome'] ?></td>
                            <td><?= $torcedor['documento'] ?></td>
                            <td><?= $torcedor['cep'] ?></td>
                            <td><?= $torcedor['endereco'] ?></td>
                            <td><?= $torcedor['bairro'] ?></td>
                            <td><?= $torcedor['cidade'] ?></td>
                            <td><?= $torcedor['uf'] ?></td>
                            <td><?= $torcedor['telefone'] ?></td>
                            <td><?= $torcedor['email'] ?></td>
                            <td><?= isset($torcedor['ativo']) ? 'Ativo' : 'Inativo' ?></td>
                            <td>
                                <a class="btn btn-primary" href="editar.php?id=<?= $torcedor['id'] ?>">Editar</a>
                            </td>
                        </tr>
                        
                    <?php endforeach; ?>
                </tbody>
                   
            </table>
        </div>
    </body>
</html>