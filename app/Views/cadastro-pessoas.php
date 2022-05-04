<div class="row">
    <div class="col">
        <h2>Cadastro de Pessoas</h2>
    </div>
</div>

<form action="gravar" method="post">
    <div class="row">
        <div class="col">
            <div class="forms-group">
                <label for="">Nome: </label>
                <input type="text" name="nome" id="" class="form-control">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="forms-group">
                <label for="">Profissão: </label>
                <input type="text" name="profissao" id="" class="form-control">
            </div>
        </div>

        <div class="col">
            <div class="forms-group">
                <label for="">Idade: </label>
                <input type="number" name="idade" id="" class="form-control">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary mt-3">Enviar</button>
            </div>
        </div>
    </div>
</form>