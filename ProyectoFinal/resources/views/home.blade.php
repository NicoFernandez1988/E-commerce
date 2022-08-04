@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div style="text-align: center" class="card-header">{{ __('Bienvenid@!') }}</div>

                <div style="text-align: center" class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Te has registrado exitosamente.') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
