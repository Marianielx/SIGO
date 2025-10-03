@extends('layouts.merge.dashboard')

@section('title', 'Visualizar Missão Agente Secreto (A/S)')

@section('content')

    <main class="flex-1 p-6 overflow-y-auto">      
      @include('layouts._includes.dashboard.NavbarSimple')

    <div class="container mt-5">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="mb-0"><b>Lista de Missão Agente Secreto (A/S)</b></h2>
        </div>

    <div class="table-responsive">
        <table class="table table-hover align-middle">
        <thead class="table-dark">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Missão</th>
            <th scope="col">Data de Início</th>
            <th scope="col">Data de Términio</th>
            <th scope="col">Estado</th>
            </tr>
        </thead>
        <tbody>
            <?php $count = 1 ?>
            @foreach($data as $item)
            <tr>
                <td>{{ $count++ }}</td>
                <td>{{ $item->description }}</td>
                <td>{{ date('d-m-Y', strtotime($item->dateInit)) }}</td>
                <td>{{ date('d-m-Y', strtotime($item->dateEnd)) }}</td>
                <td>{{ $item->status }}</td>
            </tr>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
</div>
</main>

@endsection