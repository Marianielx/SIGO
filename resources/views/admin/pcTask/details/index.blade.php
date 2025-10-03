@extends('layouts.merge.dashboard')

@section('title', 'Detalhes Tarefa Pessoa de Confiança (P/C)')

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
            <h3>Informação detalhada da tarefa de Pessoa de Confiança <b>{{ $pc_data->fullName }}</b></h3>
        </div>
    
        </div>

        <label for="title" class="form-label">Título:</label>
        <label for="title" class="form-label">{{ $task_data->title }}</label>

        <label for="description" class="form-label">Descrição</label>
        <textarea name="description" class="form-control" style="height: 100px;" readOnly>{{ isset($task_data->description) ? $task_data->description : old('description') }}</textarea>


            <div class="row">
                <div class="form-group col-md-8 mb-2">
                    <label for="dateInit" class="form-label">Data Início:</label>
                    <label for="dateInit" class="form-label">{{ $task_data->dateInit }}</label>
                </div>
                <div class="form-group col-md-4 mb-2">
                    <label for="dateEnd" class="form-label">Data Términio:</label>
                    <label for="dateEnd" class="form-label">{{ $task_data->dateEnd }}</label>                    
                </div>
    </div>
        
        </div>
    </div>
</div>

    </main>

@endsection
