@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Proyecto Final') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Bienvenido al registro de materias de la Universidad Ecotec!') }}
                </div>
                <div class="container mt-5">
    
    <a href="{{ route('materias.index') }}" class="btn btn-primary mt-3">Ir a Materias</a>
</div>
            </div>
        </div>
    </div>
</div>
@endsection
