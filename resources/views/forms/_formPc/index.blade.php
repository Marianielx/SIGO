<div class="row">
    <div class="col-md-12">
    <div class="card mb-4">
    <hr class="my-0">
    <div class="card-body">
        <h3><b>{{ isset($data) ? 'Atualizar Pessoa de Confiança (P/C)' : 'Cadastrar Pessoa de Confiança (P/C)' }}</b></h3>
    </div>
</div>

        <div class="card mb-4">
        <hr class="my-0">
        <div class="card-body">

            <label for="fullName" class="form-label">Nome Completo</label>
            <input type="text" class="form-control" name="fullName" value="{{ isset($data->fullName) ? $data->fullName : old('fullName') }}" placeholder="Informar nome completo">
            
            <label for="relationShip" class="form-label">Relação</label>
            <input type="text" class="form-control" name="relationShip" value="{{ isset($data->relationShip) ? $data->relationShip : old('relationShip') }}" placeholder="Informar a relação com o Agente">

            <div class="row">
                <div class="form-group col-md-8 mb-2">
                    <label for="cellPhone" class="form-label">Telefone</label>
                    <input type="number" class="form-control" name="cellPhone" value="{{ isset($data->cellPhone) ? $data->cellPhone : old('cellPhone') }}" placeholder="Informar o número do telefone">
                </div>
                <div class="form-group col-md-4 mb-2">
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
            </div>
            
            <div class="row">
                <div class="form-group col-md-8 mb-2">
                    <label for="birthDate" class="label-control">Data de Nascimeto</label>
                    <input type="date" class="form-control" name="birthDate" value="{{ isset($data->birthDate) ? $data->birthDate : old('birthDate') }}" placeholder="Unidade Militar">
                </div>
                <div class="form-group col-md-4 mb-2">
                    <label for="gender" class="label-control">Sexo</label>
                    <select class="form-control" name="gender" value="{{ isset($data->gender) ? $data->gender : old('gender') }}">
                        <option value="">Selecione</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                    </select>
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