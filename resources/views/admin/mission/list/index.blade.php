@extends('layouts.merge.dashboard')

@section('title', 'Visualizar Missão')

@section('content')

    <main class="flex-1 p-6 overflow-y-auto">      
      @include('layouts._includes.dashboard.NavbarSimple')

    <div class="container mt-5">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <a onclick="window.location.href='/mission-create'" class="btn btn-success">+ Cadastrar Missão</a>
            <h2 class="mb-0">Lista de Missão</h2>
        </div>

    <div class="table-responsive">
        <table class="table table-hover align-middle">
        <thead class="table-dark">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Descrição</th>
            <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php $count = 1 ?>
            @foreach($data as $item)
            <tr>
            <td>{{ $count++ }}</td>
            <td>{{ $item->description }}</td>
            <td>
                <button class="btn btn-primary btn-sm">
                    <a href="{{ url("admin/mission/edit/{$item->id}") }}">Editar</a>                    
                </button>
                <button class="btn btn-danger btn-sm">
                    <a href="{{ url("admin/mission/show/{$item->id}") }}">Ver</a>
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