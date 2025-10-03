<div class="row">
    <div class="col-md-12">
    <div class="card mb-4">
    <hr class="my-0">
    <div class="card-body">
        <h3><b>{{ isset($data) ? 'Atualizar Agente Secreto (A/S)' : 'Cadastrar Agente Secreto (A/S)' }}</b></h3>
    </div>
</div>

        <div class="card mb-4">
        <hr class="my-0">
        <div class="card-body">

            <div class="row">
                <div class="form-group col-md-8 mb-2">
                    <label for="fullname" class="form-label">Nome Completo</label>
                    <input type="text" class="form-control" name="fullname" value="{{ isset($data->fullname) ? $data->fullname : old('fullname') }}" placeholder="Informar nome completo">
                </div>
                <div class="form-group col-md-4 mb-2">
                    <label for="covername" class="form-label">Codinome</label>
                    <input type="text" class="form-control" name="covername" value="{{ isset($data->covername) ? $data->covername : old('covername') }}" placeholder="Informar nome completo">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-8 mb-2">
                    <label for="gender" class="form-label">Sexo</label>
                    <select class="form-control" name="gender" value="{{ isset($data->gender) ? $data->gender : 'selected' }}">
                        <option value="">Selecione</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Feminino">Feminino</option>
                    </select>
                </div>
                <div class="form-group col-md-4 mb-2">
                    <label for="age" class="label-control">Idade</label>
                    <input type="number" name="age" class="form-control" value="{{ isset($data->age) ? $data->age : old('age') }}" placeholder="Número do BI">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-8 mb-2">
                    <label for="province" class="form-label">Província</label>
                    <select class="form-control" name="province" value="{{ isset($data->province) ? $data->province : old('province') }}">
                        <option value="">Selecione</option>
                        <option name="Luanda">Luanda</option>
                        <option name="Benguela">Benguela</option>
                        <option name="Huíla">Huíla</option>
                        <option name="Bié">Bié</option>
                        <option name="Huambo">Huambo</option>
                        <option name="Bengo">Bengo</option>
                        <option name="Cuanza Sul">Cuanza Sul</option>
                        <option name="Cuanza Norte">Cuanza Norte</option>
                        <option name="Malanje">Malanje</option>
                        <option name="Lunda Norte">Lunda Norte</option>
                        <option name="Lunda Sul">Lunda Sul</option>
                        <option name="Moxico">Moxico</option>
                        <option name="Namibe">Namibe</option>
                        <option name="Cuando Cubango">Cuando Cubango</option>
                        <option name="Cabinda">Cabinda</option>
                        <option name="Cunene">Cunene</option>
                        <option name="Uíge">Uíge</option>
                        <option name="Zaire">Zaire</option>
                    </select>
                </div>
                <div class="form-group col-md-4 mb-2">
                    <label for="speciality" class="form-label">Especialidade</label>
                    <select class="form-control" name="speciality" value="{{ isset($data->speciality) ? $data->speciality : old('speciality') }}">
                        <option value="">Selecione</option>
                        <option values="Contrainteligência">Contrainteligência</option>
                        <option values="Análise de Informações">Análise de Informações</option>
                        <option values="Operações Secretas">Operações Secretas</option>
                        <option values="Ciberinteligência">Ciberinteligência</option>
                        <option values="Vigilância e Reconhecimento">Vigilância e Reconhecimento</option>
                        <option values="Interceptação e Comunicação">Interceptação e Comunicação</option>
                        <option values="Logística Operacional">Logística Operacional</option>
                        <option values="Operações Psicológicas">Operações Psicológicas</option>
                    </select>
                </div>
            </div>
            
            <div class="row">
                <div class="form-group col-md-8 mb-2">
                    <label for="unity" class="label-control">Status</label>
                    <select class="form-control" name="status" value="{{ isset($data->status) ? $data->status : old('status') }}">
                        <option value="">Selecione</option>
                        <option value="Ativo">Ativo</option>
                        <option value="Inativo">Inativo</option>
                        <option value="Em Missão">Em Missão</option>
                    </select>
                </div>

                <div class="form-group col-md-4 mb-2">
                    <label for="enterDate" class="label-control">Data de Ingressor</label>
                    <input type="date" class="form-control" name="enterDate" value="{{ isset($data->enterDate) ? $data->enterDate : old('enterDate') }}" placeholder="Unidade Militar">
                </div>
            </div>

            <label for="image" class="label-control">Foto</label>
            <input type="file" class="form-control" name="image" accept="image/*">
        </div>

        </div>
        <div class="mb-3 col-md-12">
            <button type="submit" class="btn btn-primary me-2">{{ isset($data) ? 'Atualizar' : 'Cadastrar' }}</button>
        </div>
        </div>
    </div>
</div>