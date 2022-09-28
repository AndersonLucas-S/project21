<?php
$mysqlli = mysqli_connect('127.0.0.1', 'root', '', 'p21');

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_cliente = "SELECT * FROM clientes WHERE id = '$id'";
$resultado_usuario = mysqli_query($mysqlli, $result_cliente);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>

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

            <a class="btn btn-primary" href="index.php" style="float: right; margin-bottom: 3px;"> Voltar </a>

            <form method="POST" action="editar_usuario.php">
            <input class="form-control" type="hidden" name="id" value="<?php echo $row_usuario['id']; ?>">
                <div class="form-row">
                    <div class="form-group col-md-6">
                            <label for="telefone">Nome</label>
                            <input class="form-control" type="text" name="nome" placeholder="Digite o Nome" value="<?php echo $row_usuario['nome']; ?>">
                    </div>
                    <div class="form-group col-md-6">
                            <label for="telefone">Documento</label>
                            <input class="form-control" type="text" name="documento" placeholder="Digite o documento" value="<?php echo $row_usuario['documento']; ?>">
                    </div>
                    <div class="form-group col-md-6">
                            <label for="telefone">CEP</label>
                            <input class="form-control" type="text" name="documento" placeholder="Digite o CEP" value="<?php echo $row_usuario['cep']; ?>">
                    </div>
                    <div class="form-group col-md-6">
                            <label for="telefone">Endereço</label>
                            <input class="form-control" type="text" name="endereco" placeholder="Digite o endereço" value="<?php echo $row_usuario['endereco']; ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="telefone">Telefone</label>
                        <input class="form-control" type="text" name="telefone" placeholder="Digite o telefone" value="<?php echo $row_usuario['telefone']; ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">E-mail</label>
                        <input class="form-control" type="email" name="email" placeholder="Digite o seu melhor e-mail" value="<?php echo $row_usuario['email']; ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="bairro">Bairro</label>
                        <input class="form-control" type="text" name="bairro" placeholder="Digite o seu bairro" value="<?php echo $row_usuario['bairro']; ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="cidade">Cidade</label>
                        <input class="form-control" type="text" name="cidade" placeholder="Digite a cidade" value="<?php echo $row_usuario['cidade']; ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="estado">Estado</label>
                            <select id="uf" class="form-control" name="uf">
                                <option selected value="<?php echo $row_usuario['uf']; ?>"><?php echo $row_usuario['uf']; ?></option>
                            </select>
                    </div>
                    
                    <button type="submit" class="btn btn-primary" style="float: right; margin-top: -2%;">Editar</button>

                </div>
            </form>
        </div>
    </body>
</html>