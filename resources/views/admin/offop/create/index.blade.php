@extends('layouts.merge.dashboard')

@section('title', 'Cadastrar Oficial Operativo')

@section('content')

    <main class="flex-1 p-6 overflow-y-auto">      
      @include('layouts._includes.dashboard.NavbarSimple')
        <div class="container justify-content-center mt-4 mb-5">
            @include('errors.form')
            <div class="row align-items-center">
                <form action="{{ route('admin.offop.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @include('forms._formOffop.index')
                </form>
            </div>
        </div>

    </main>

@endsection
