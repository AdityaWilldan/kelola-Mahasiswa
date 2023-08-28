@extends('layouts.app')

@section('content')
<style>
     body {
        background-color: #0f172a;
    }

    .card-header {
        background-color: #1f2937;
        color: white;
    }

    .card {
        border: none;
        border-radius: 10px;
        box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        background-color: #1f2937;
    }

    .form-control:focus {
        border-color: #9c27b0;
        box-shadow: 0 0 0 0.2rem rgba(156, 39, 176, 0.25);
    }

    .btn-primary {
        background-color: #a855f7;
        border-color: #a855f7;
    }

    .btn-primary:hover {
        background-color: #7b1fa2;
        border-color: #7b1fa2;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-white">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
