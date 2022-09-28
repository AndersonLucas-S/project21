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

            <form method="POST" action="cadastrar.php">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nome">Nome</label>
                        <input type="nome" class="form-control" id="nome" placeholder="Nome" name="nome">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="documento">Documento</label>
                        <input type="text" class="form-control" id="documento" placeholder="Documento" name="documento">
                    </div>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="cep">CEP</label>
                    <input type="text" class="form-control" id="cep" placeholder="CEP" name="cep">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="endereco">Endereço</label>
                    <input type="text" class="form-control" id="endereco" placeholder="Endereço" name="endereco" >
                    </div>
                    <div class="form-group col-md-6">
                        <label for="cidade">Telefone</label>
                        <input type="phone" class="form-control" id="telefone" placeholder="Telefone" name="telefone">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="cidade">E-mail</label>
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="endereco">Bairro</label>
                    <input type="text" class="form-control" id="bairro" placeholder="Bairro" name="bairro">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="cidade">Cidade</label>
                        <input type="text" class="form-control" id="cidade" placeholder="Cidade" name="cidade">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputEstado">Estado</label>
                        <select id="uf" class="form-control" name="uf">
                            <option selected>Escolher...</option>
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                            <option value="EX">Estrangeiro</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary" style="float: right; margin-top: -2%;">Cadastrar</button>

                </div>
            </form>
        </div>
    </body>
</html>