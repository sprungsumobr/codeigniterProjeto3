<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">   
    <title>AzovCars</title>
</head>
<body>
    <div class="container">
        <div class="row">
                <div class="col">
                    <div class="navigation">
                        <div class="menuToggle"></div>
                            <ul>
                                <li class="list active" style="--clr:#f44336;">
                                    <a href="home">
                                        <span class="iconBarraLateral"><i class="fa-solid fa-house"></i></span>
                                        <span class="textBarraLateral">Home</span>
                                    </a>
                                </li>
                                <li class="list" style="--clr:#F7DC6F;">
                                    <a href="quemsomos">
                                        <span class="iconBarraLateral"><i class="fa-solid fa-user"></i></span>
                                        <span class="textBarraLateral">Sobre</span>
                                    </a>
                                </li>
                                <li class="list" style="--clr:#5DADE2;">
                                    <a href="contato">
                                        <span class="iconBarraLateral"><i class="fa-regular fa-comment-dots"></i></span>
                                        <span class="textBarraLateral">Mensagem</span>
                                    </a>
                                </li>
                                <li class="list" style="--clr:#58D68D;">
                                    <a href="cadastro-carros">
                                        <span class="iconBarraLateral"><i class="fa-solid fa-car"></i></span>
                                        <span class="textBarraLateral">Cadastro de Veiculo</span>
                                    </a>
                                </li>
                                <li class="list" style="--clr:#A569BD;">
                                    <a href="listacarros">
                                        <span class="iconBarraLateral"><i class="fa-solid fa-car-side"></i></span>
                                        <span class="textBarraLateral">Lista de Veiculos</span>
                                    </a>
                                </li>
                        </ul>
                    </div>
                </div>
        </div>


<div class="col">
        <h2>Cadastro de Veiculos</h2>
    </div>
<form action="gravar" method="post">
    <div class="row">
        <div class="col">
            <div class="forms-group">
                <label for="">Modelo: </label>
                <input type="text" name="modelo" id="" class="form-control" 
                value="<?= isset($carros['modelo']) ? $carros['modelo'] : "" ?>">

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="forms-group">
                <label for="">Marca: </label>
                <input type="text" name="profissao" id="" class="form-control"
                value="<?= isset($carros['marca']) ? $carros['marca'] : "" ?>">
            </div>
        </div>

        <div class="col">
            <div class="forms-group">
                <label for="">Placa: </label>
                <input type="text" name="placa" id="" class="form-control"
                value="<?= isset($carros['placa']) ? $carros['placa'] : "" ?>">
            </div>
        </div>
    </div>
        <input type="hidden" name="id"
        value="<?= isset($carros['id']) ? $carros['id'] : "" ?>">
    <div class="row">
        <div class="col-6">
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary mt-3">Enviar</button>
            </div>
        </div>
    </div>
</form>