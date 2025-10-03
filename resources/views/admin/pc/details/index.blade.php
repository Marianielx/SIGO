@extends('layouts.merge.dashboard')

@section('title', 'Detalhes Pessoa de Confiança (P/C)')

@section('content')

    <main class="flex-1 p-6 overflow-y-auto">      
      @include('layouts._includes.dashboard.NavbarSimple')
        <div class="container justify-content-center mt-4 mb-5">
            @include('errors.form')
            <div class="row align-items-center">
                
            <div class="row">
    <div class="col-md-12">
    <div class="card mb-4">
    <hr class="my-0">
        <div class="card-body">
            <h3>Informação detalhada da <b>Pessoa de Confiança</b></h3>
        </div>
    
        </div>

        <div class="card mb-4">
        <hr class="my-0">
        <div class="card-body">

            <label for="image" class="label-control">Foto</label>
            <img src="/storage/{{ $data->image }}" class="rounded-circle" alt="{{ $data->fullname }}" width="100" height="250">

            <div class="row">
                <div class="form-group col-md-8 mb-2">
                    <label for="fullname" class="form-label">Nome Completo:</label>
                    <label for="fullname" class="form-label">{{ $data->fullName }}</label>
                </div>
                <div class="form-group col-md-4 mb-2">
                    <label for="relationShip" class="form-label">Relação:</label>
                    <label for="relationShip" class="form-label">{{ $data->relationShip }}</label>                    
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-8 mb-2">
                    <label for="cellPhone" class="form-label">N.º do Telefone:</label>
                    <label for="cellPhone" class="form-label">{{ $data->cellPhone }}</label>
                </div>
                 <div class="form-group col-md-4 mb-2">
                    <label for="province" class="form-label">Província:</label>
                    <label for="province" class="form-label">{{ $data->province }}</label>
                </div>
            </div>
            
            <div class="row">
                <div class="form-group col-md-8 mb-2">
                    <label for="birthDate" class="label-control">Data de Nascimento:</label>
                    <label for="birthdate" class="form-label">{{ date('d-m-Y', strtotime($data->birthDate)) }}</label>
                </div>
                <div class="form-group col-md-4 mb-2">
                    <label for="gender" class="form-label">Sexo:</label>
                    <label for="gender" class="form-label">{{ $data->gender }}</label>
                </div>
            </div>
        </div>

    </div>
        
        </div>
    </div>
</div>

    </main>

@endsection
