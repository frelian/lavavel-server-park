@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">----</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h3>Vehiculos</h3>
                        <div id="list-vehicles"></div>
                        <h2>Hola desde vehicles.index</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
