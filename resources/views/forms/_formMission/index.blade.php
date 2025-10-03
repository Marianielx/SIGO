<div class="row">
    <div class="col-md-12">
    <div class="card mb-4">
    <hr class="my-0">
    <div class="card-body">
        <h3><b>{{ isset($data) ? 'Atualizar Missão' : 'Cadastrar Missão' }}</b></h3>
    </div>
</div>
        <div class="card mb-4">
        <hr class="my-0">
            <div class="card-body">

            <label for="description" class="form-label">Descrição</label>
            <input type="text" class="form-control" name="description" value="{{ isset($data->description) ? $data->description : old('description') }}" placeholder="Informar nome completo">
                
            </div>
        </div>
        <div class="mb-3 col-md-12">
            <button type="submit" class="btn btn-primary me-2">{{ isset($data) ? 'Atualizar' : 'Cadastrar' }}</button>
        </div>
        </div>
    </div>
</div>