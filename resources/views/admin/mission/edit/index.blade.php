@extends('layouts.merge.dashboard')

@section('title', 'Editar Missão')

@section('content')

    <main class="flex-1 p-6 overflow-y-auto">      
      @include('layouts._includes.dashboard.NavbarSimple')
        <div class="container justify-content-center mt-4 mb-5">
            @include('errors.form')
            <div class="row align-items-center">
                <form action="{{ route('admin.mission.update', $data->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    @include('forms._formMission.index')
                </form>
            </div>
        </div>

    </main>

@endsection
