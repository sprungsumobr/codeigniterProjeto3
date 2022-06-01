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
                                <li class="list" style="--clr:#f44336;">
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
                                <li class="list active" style="--clr:#58D68D;">
                                    <a href="cadastroCarros">
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


    <div class="titulo">
        <h1>Cadastro de Veiculos</h1>
    </div>
        <div class="formularioCarro">
            <form action="registrar" method="post">
                <div>
                     <label for="">Modelo: </label>
                        <input placeholder="Ex:Vesta" type="text" name="modelo" id="" class="form-control" 
                        value="<?= isset($carros['modelo']) ? $carros['modelo'] : "" ?>">
                </div>
                    <div>
                        <label for="">Marca: </label>
                            <input placeholder="Ex:Lada" type="text" name="marca" id="" class="form-control"
                            value="<?= isset($carros['marca']) ? $carros['marca'] : "" ?>">
                    </div>
                    <div>
                        <label for="">Placa: </label>
                            <input placeholder="Ex:MZC5922" type="text" name="placa" id="" class="form-control"
                            value="<?= isset($carros['placa']) ? $carros['placa'] : "" ?>">
                    </div>
                        <input type="hidden" name="id"
                        value="<?= isset($carros['id']) ? $carros['id'] : "" ?>">
                    <div>
                        <button type="submit" class="btnFormulario">Enviar</button>
                    </div>
            </form>
        </div>