<div class="container">
<h1> <?=$title?> </h1>

<table class="table">
    <tr>
        <td>Nome:</td>
        <td>Profissão:</td>
        <td>Idade:</td>
    </tr>
    <?php

    foreach($pessoas as $veiculo_item){
    ?>
    <tr>
        <td><?=  $veiculo_item['modelo']  ?></td>
        <td><?=  $veiculo_item['marca']  ?></td>
        <td><?=  $veiculo_item['placa']  ?></td>
        <td><a href="excluir/<?=$veiculo_item['id']?>" class="btn btn-danger">Apagar</a></td>
        <td><a href="editar/<?=$veiculo_item['id']?>" class="btn btn-warning">Editar</a></td>
    </tr>

    <?php
    }   

    ?>

</table>



</div>