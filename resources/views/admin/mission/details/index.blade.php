@extends('layouts.merge.dashboard')

@section('title', 'Detalhe da Missão')

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
            <h3>Informação detalhada da <b>Missão</b></h3>
        </div>
    
        </div>

        <div class="card mb-4">
        <hr class="my-0">
        <div class="card-body">

        <div class="form-group col-md-12 mb-2">
            <label for="fullname" class="form-label">Descrição:</label>
            <label for="fullname" class="form-label">{{ $data->description }}</label>
        </div>

        <div class="row">
            <div class="form-group col-md-8 mb-2">
                <label for="gender" class="form-label">Data de Cadastro:</label>
                <label for="gender" class="form-label">{{ date('d-m-Y', strtotime($data->created_at)) }}</label>
            </div>
            <div class="form-group col-md-4 mb-2">
                <label for="cardnumber" class="label-control">Última Actualização:</label>
                <label for="cardnumber" class="form-label">{{ date('d-m-Y', strtotime($data->updated_at)) }}</label>
            </div>
        </div>

        </div>

    </div>
        
        </div>
    </div>
</div>

            </div>
        </div>

    </main>

@endsection
