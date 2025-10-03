@extends('layouts.merge.dashboard')

@section('title', 'Cadastrar Missão Agente Secreto (A/S)')

@section('content')

    <main class="flex-1 p-6 overflow-y-auto">      
      @include('layouts._includes.dashboard.NavbarSimple')
        <div class="container justify-content-center mt-4 mb-5">
            @include('errors.form')
            <div class="row align-items-center">
                <form action="{{ route('admin.asmission.store', $asdata->id) }}" method="POST">
                    @csrf
                    @include('forms._formAsMission.index')
                </form>
            </div>
        </div>
    </main>

@endsection
