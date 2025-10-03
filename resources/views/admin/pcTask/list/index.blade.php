@extends('layouts.merge.dashboard')

@section('title', 'Visualizar Pessoa de Confiança (A/S)')

@section('content')

    <main class="flex-1 p-6 overflow-y-auto">      
      @include('layouts._includes.dashboard.NavbarSimple')

    <div class="container mt-5">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <a href="{{ route('admin.pcTask.create', $data->id) }}" class="btn btn-success">+ Cadastrar Tarefa</a>
            <h2 class="mb-0">Listar de Tarefa: <b>{{ $data->fullName }}</b> / (P/C)</h2>
        </div>

    <div class="table-responsive">
        <table class="table table-hover align-middle">
        <thead class="table-dark">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Título</th>
            <th scope="col">Data início</th>
            <th scope="col">Data Términio</th>
            <th scope="col">Ações</th>
            </tr>
        </thead>
            <tbody>
            <?php $i = 1; ?>
            @foreach($task_data as $item)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $item->title }}</td>
                <td>{{ $item->dateInit }}</td>
                <td>{{ $item->dateEnd }}</td>
                <td>
                    <button class="btn btn-danger btn-sm">
                        <a href="{{ url("admin/pcTask/show/{$item->fk_idPc}/{$item->id}") }}">Ver</a>
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