<div class="row">
    <div class="col-md-12">

    <div class="card mb-2">
    <hr class="my-0">
    <div class="card-body">
        <h3><b>{{ isset($data) ? 'Atualizar: Missão Agente Secreto (A/S)' : 'Cadastrar: Missão Agente Secreto (A/S)' }}</b></h3>
    </div>
</div>
    <div class="card mb-2">
    <hr class="my-0">
    <div class="card-body">
        <h3>Agente: <b>{{ $asdata->fullname }} - {{ $asdata->speciality }}</b></h3>
    </div>
</div>

        <div class="card mb-4">
        <hr class="my-0">
        <div class="card-body">

            <div class="form-group mb-2">
                <label for="fk_idMission" class="form-label">Missão</label>
                <select class="form-control" name="fk_idMission">
                <option disabled>Selecione</option>
                @if(!empty($mission_data))
                @foreach($mission_data as $item)
                <option value="{{ $item->id }}">
                    {{ $item->description }}
                </option>
                @endforeach
                @endif
                </select>
            </div>

            <div class="row">
                <div class="form-group col-md-8 mb-2">
                    <label for="description" class="form-label">Descrição</label>
                    <input type="text" class="form-control" name="description" value="{{ isset($data->description) ? $data->covername : old('description') }}" placeholder="Informar nome completo">
                </div>
                <div class="form-group col-md-4 mb-2">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-control" name="status" value="{{ isset($data->status) ? $data->status : 'selected' }}">
                        <option value="">Selecione</option>
                        <option value="Planejada">Planejada</option>
                        <option value="Em Andamento">Em Andamento</option>
                        <option value="Concluída">Concluída</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-8 mb-2">
                    <label for="dateInit" class="label-control">Data de Início</label>
                    <input type="date" name="dateInit" class="form-control" value="{{ isset($data->dateInit) ? $data->dateInit : old('dateInit') }}">
                </div>
                <div class="form-group col-md-4 mb-2">
                    <label for="dateEnd" class="label-control">Data de Términio</label>
                    <input type="date" name="dateEnd" class="form-control" value="{{ isset($data->dateEnd) ? $data->dateEnd : old('dateEnd') }}">
                </div>
            </div>
            
            <label class="label-control">Relatórios/Observações</label>
            <textarea name="body" class="form-control" style="height: 100px;"></textarea>

        </div>

        </div>
        <div class="mb-3 col-md-12">
            <button type="submit" class="btn btn-primary me-2">{{ isset($data) ? 'Atualizar' : 'Cadastrar' }}</button>
        </div>
        </div>
    </div>
</div>