@extends('layouts.merge.dashboard')

@section('title', 'Visualizar Oficial Operativo')

@section('content')

    <main class="flex-1 p-6 overflow-y-auto">      
      @include('layouts._includes.dashboard.NavbarSimple')
    <div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <a onclick="window.location.href='/oficial-create'" class="btn btn-success">+ Cadastrar Oficial</a>
        <h2 class="mb-0">Lista de Oficiais Operativos</h2>
    </div>

    <div class="table-responsive">
        <table class="table table-hover align-middle">
        <thead class="table-dark">
            <tr>
            <th scope="col">Foto</th>
            <th scope="col">Nome</th>
            <th scope="col">Patente</th>
            <th scope="col">Unidade Militar</th>
            <th scope="col">Província</th>
            <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
            <tr>
            <td>
                <img src="/storage/{{ $item->image }}" class="rounded-circle" alt="{{ $item->fullname }}" width="50" height="50">
            </td>
            <td>{{ $item->fullname }}</td>
            <td>{{ $item->patent }}</td>
            <td>{{ $item->unity }}</td>
            <td>{{ $item->province }}</td>
            <td>
                <button class="btn btn-primary btn-sm">
                    <a href="{{ url("admin/offop/edit/{$item->id}") }}">Editar</a>                    
                </button>
                <button class="btn btn-danger btn-sm">
                    <a href="{{ url("admin/offop/show/{$item->id}") }}">Ver</a>
                </button>
            </td>
            </tr>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
</div>

</main>

@endsection