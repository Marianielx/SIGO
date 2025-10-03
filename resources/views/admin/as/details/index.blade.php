@extends('layouts.merge.dashboard')

@section('title', 'Detalhes Agente Secreto (A/S)')

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
            <h3>Informação detalhada do <b>Agente Secreto</b></h3>
        </div>
    
        </div>

        <div class="d-flex justify-content-between align-items-center mb-4">
            <a href="{{ route('admin.asmission.create', $data->id) }}" class="btn btn-secondary">Gestão de Missões</a>
        </div>

        <div class="card mb-4">
        <hr class="my-0">
        <div class="card-body">

            <label for="image" class="label-control">Foto</label>
            <img src="/storage/{{ $data->image }}" class="rounded-circle" alt="{{ $data->fullname }}" width="100" height="250">

            <div class="row">
                <div class="form-group col-md-8 mb-2">
                    <label for="fullname" class="form-label">Nome Completo:</label>
                    <label for="fullname" class="form-label">{{ $data->fullname }}</label>
                </div>
                <div class="form-group col-md-4 mb-2">
                    <label for="birthdate" class="form-label">Codinome:</label>
                    <label for="birthdate" class="form-label">{{ $data->covername }}</label>                    
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-8 mb-2">
                    <label for="gender" class="form-label">Sexo:</label>
                    <label for="gender" class="form-label">{{ $data->gender }}</label>
                </div>
                <div class="form-group col-md-4 mb-2">
                    <label for="cardnumber" class="label-control">Idade:</label>
                    <label for="cardnumber" class="form-label">{{ $data->age }}</label>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-8 mb-2">
                    <label for="patent" class="form-label">Província:</label>
                    <label for="patent" class="form-label">{{ $data->province }}</label>
                </div>
                <div class="form-group col-md-4 mb-2">
                    <label for="nip" class="label-control">Especialidade:</label>
                    <label for="nip" class="form-label">{{ $data->speciality }}</label>
                </div>
            </div>
            
            <div class="row">
                <div class="form-group col-md-8 mb-2">
                    <label for="province" class="form-label">Estado:</label>
                    <label for="province" class="form-label">{{ $data->status }}</label>
                </div>
                <div class="form-group col-md-4 mb-2">
                    <label for="unity" class="label-control">Data de Ingresso:</label>
                    <label for="birthdate" class="form-label">{{ date('d-m-Y', strtotime($data->enterDate)) }}</label>
                </div>
            </div>
        </div>

    </div>

        <div style="display:flex; gap:15px; margin-top:15px;">
            <div style="flex:1; color:#fff; padding:20px;  border-radius:15px; text-align:center; background:#3498db"><a href="{{ route('admin.asmission.index', $data->id) }}">Total de Missões: <span id="totalMissoes">{{ $total_count }}</span></a></div>
            <div style="flex:1; color:#fff; padding:20px;  border-radius:15px; text-align:center; background:#2ecc71">Concluídas: <span id="concluidas">{{ $closed_count }}</span></div>
            <div style="flex:1; color:#fff; padding:20px;  border-radius:15px; text-align:center; background:#b6b0d3b7">Planejada: <span id="concluidas">{{ $planned_count }}</span></div>
            <div style="flex:1; color:#fff; padding:20px;  border-radius:15px; text-align:center; background:#e74c3c">Falhadas: <span id="falhadas">{{ $failed_count }}</span></div>
            <div style="flex:1; color:#fff; padding:20px;  border-radius:15px; text-align:center; background:#f1c40f">Em Andamento: <span id="andamento">{{ $working_count }}</span></div>
        </div>
        
        </div>
    </div>
</div>

            </div>
        </div>

    </main>

@endsection
