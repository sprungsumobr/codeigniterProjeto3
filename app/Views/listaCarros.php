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
                                <li class="list" style="--clr:#58D68D;">
                                    <a href="pessoa">
                                        <span class="iconBarraLateral"><i class="fa-solid fa-car"></i></span>
                                        <span class="textBarraLateral">Cadastro de Veiculo</span>
                                    </a>
                                </li>
                                <li class="list active" style="--clr:#A569BD;">
                                    <a href="listacarros">
                                        <span class="iconBarraLateral"><i class="fa-solid fa-car-side"></i></span>
                                        <span class="textBarraLateral">Lista de Veiculos</span>
                                    </a>
                                </li>
                        </ul>
                    </div>
                </div>
        </div>


<h1> Lista de Carros </h1>

<table class="table">
    <tr>
        <td>Modelo:</td>
        <td>Marca</td>
        <td>Placa</td>
    </tr>
    <?php

    foreach($carros as $carro_item){
    ?>
    <tr>
        <td><?=  $carro_item['modelo']  ?></td>
        <td><?=  $carro_item['marca']  ?></td>
        <td><?=  $carro_item['placa']  ?></td>
    </tr>

    <?php
    }   

    ?>

</table>


