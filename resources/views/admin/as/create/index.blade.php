@extends('layouts.merge.dashboard')

@section('title', 'Cadastrar Agente Secreto (A/S)')

@section('content')

    <main class="flex-1 p-6 overflow-y-auto">      
      @include('layouts._includes.dashboard.NavbarSimple')
        <div class="container justify-content-center mt-4 mb-5">
            @include('errors.form')
            <div class="row align-items-center">
                <form action="{{ route('admin.as.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @include('forms._formAs.index')
                </form>
            </div>
        </div>

    </main>

@endsection
