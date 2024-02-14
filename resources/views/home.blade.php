@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <h4>Home Page</h4>
                <p>Este contenido es publico</p>
                @role('CEO')
                <p>Este contenido es para el ceo</p>
                @endrole
                @role('admon')
                <p>Este contenido es para el admon</p>
                @endrole
            
            </div>
        </div>
    </div>
</div>
@endsection
