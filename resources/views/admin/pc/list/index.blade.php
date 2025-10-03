@extends('layouts.merge.dashboard')

@section('title', 'Visualizar Pessoa de Confiança (A/S)')

@section('content')

    <main class="flex-1 p-6 overflow-y-auto">      
      @include('layouts._includes.dashboard.NavbarSimple')

    <div class="container mt-5">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <a onclick="window.location.href='/pc-create'" class="btn btn-success">+ Cadastrar Pessoa de Confiança</a>
            <h2 class="mb-0">Lista de Pessoa de Confiança (P/C)</h2>
        </div>

    <div class="table-responsive">
        <table class="table table-hover align-middle">
        <thead class="table-dark">
            <tr>
            <th scope="col">Foto</th>
            <th scope="col">Nome</th>
            <th scope="col">Relação</th>
            <th scope="col">Telefone</th>
            <th scope="col">Província</th>
            <th scope="col">Ações</th>
            <th scope="col">Tarefa</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
            <tr>
                <td>
                    <img src="/storage/{{ $item->image }}" class="rounded-circle" alt="{{ $item->fullName }}" width="50" height="50">
                </td>
                <td>{{ $item->fullName }}</td>
                <td>{{ $item->relationShip }}</td>
                <td>{{ $item->cellPhone }}</td>
                <td>{{ $item->province }}</td>
                <td>
                    <button class="btn btn-primary btn-sm">
                        <a href="{{ url("admin/pc/edit/{$item->id}") }}">Editar</a>                    
                    </button>
                    <button class="btn btn-danger btn-sm">
                        <a href="{{ url("admin/pc/show/{$item->id}") }}">Ver</a>
                    </button>
                </td>
                <td>
                    <button class="btn btn-secondary btn-sm">
                        <a href="{{ url("admin/pcTask/index/{$item->id}") }}">Gestão</a>
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
</div>

</main>

@endsection