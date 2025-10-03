<div class="row">
    <div class="col-md-12">
    <div class="card mb-4">
    <hr class="my-0">
    <div class="card-body">
        <h3><b>{{ isset($data) ? 'Atualizar Oficial Operativo' : 'Cadastrar Oficial Operativo' }}</b></h3>
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
                    <label for="birthdate" class="form-label">Data de Nascimento</label>
                    <input type="date" class="form-control" name="birthdate" value="{{ isset($data->birthdate) ? $data->birthdate : old('birthdate') }}">
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
                    <label for="cardnumber" class="label-control">Cartão de Identidade (BI)</label>
                    <input type="text" name="cardnumber" class="form-control" value="{{ isset($data->cardnumber) ? $data->cardnumber : old('cardnumber') }}" placeholder="Número do BI">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-8 mb-2">
                    <label for="patent" class="form-label">Patente</label>
                    <select class="form-control" name="patent" value="{{ isset($data->patent) ? $data->patent : old('patent') }}">
                        <option value="" name="patent">Selecione</option>
                        <option value="Capitão">Capitão</option>
                        <option value="Tenente">Tenente</option>
                        <option value="Major">Major</option>
                    </select>
                </div>
                <div class="form-group col-md-4 mb-2">
                    <label for="nip" class="label-control">NIP</label>
                    <input type="text" name="nip" class="form-control" name="nip" value="{{ isset($data->nip) ? $data->nip : old('nip') }}" placeholder="Número do NIP">
                </div>
            </div>
            
            <div class="row">
                <div class="form-group col-md-8 mb-2">
                    <label for="unity" class="label-control">Unidade Militar</label>
                    <input type="text" class="form-control" name="unity" value="{{ isset($data->unity) ? $data->unity : old('unity') }}" placeholder="Unidade Militar">
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