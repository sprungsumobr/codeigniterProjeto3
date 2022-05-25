<div class="row">
    <div class="col">
        <h2>Cadastro de Veiculos</h2>
    </div>
</div>

<form action="gravar" method="post">
    <div class="row">
        <div class="col">
            <div class="forms-group">
                <label for="">Modelo: </label>
                <input type="text" name="modelo" id="" class="form-control" 
                value="<?= isset($pessoa['modelo']) ? $pessoa['modelo'] : "" ?>">

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="forms-group">
                <label for="">Marca: </label>
                <input type="text" name="profissao" id="" class="form-control"
                value="<?= isset($pessoa['marca']) ? $pessoa['marca'] : "" ?>">
            </div>
        </div>

        <div class="col">
            <div class="forms-group">
                <label for="">Placa: </label>
                <input type="text" name="placa" id="" class="form-control"
                value="<?= isset($pessoa['placa']) ? $pessoa['placa'] : "" ?>">
            </div>
        </div>
    </div>
        <input type="hidden" name="id"
        value="<?= isset($pessoa['id']) ? $pessoa['id'] : "" ?>">
    <div class="row">
        <div class="col-6">
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary mt-3">Enviar</button>
            </div>
        </div>
    </div>
</form>