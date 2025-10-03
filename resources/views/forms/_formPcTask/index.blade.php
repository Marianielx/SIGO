<div class="row">
    <div class="col-md-12">
    <div class="card mb-4">
    <hr class="my-0">
    <div class="card-body">
        <h3>{{ isset($task_data) ? 'Atualizar Tarefa  de Pessoa de Confiança (P/C)' : 'Cadastrar Tarefa Pessoa de Confiança (P/C)' }}<b> / {{ $pc_data->fullName }} </b></h3>
    </div>
</div>

        <div class="card mb-4">
        <hr class="my-0">
        <div class="card-body">

            <label for="title" class="form-label">Título</label>
            <input type="text" class="form-control" name="title" value="{{ isset($task_data->title) ? $task_data->title : old('title') }}" placeholder="Informar nome completo">
            
            <label for="description" class="form-label">Descrição</label>
            <textarea name="description" class="form-control" style="height: 100px;">{{ isset($task_data->description) ? $task_data->description : old('description') }}</textarea>

            <div class="row">
                <div class="form-group col-md-8 mb-2">
                    <label for="dateInit" class="label-control">Data de Início</label>
                    <input type="date" name="dateInit" class="form-control" value="{{ isset($task_data->dateInit) ? $task_data->dateInit : old('dateInit') }}">
                </div>
                <div class="form-group col-md-4 mb-2">
                    <label for="dateEnd" class="label-control">Data de Términio</label>
                    <input type="date" name="dateEnd" class="form-control" value="{{ isset($task_data->dateEnd) ? $task_data->dateEnd : old('dateEnd') }}">
                </div>
            </div>
        </div>

        </div>
        <div class="mb-3 col-md-12">
            <button type="submit" class="btn btn-primary me-2">{{ isset($task_data) ? 'Atualizar' : 'Cadastrar' }}</button>
        </div>
        </div>
    </div>
</div>