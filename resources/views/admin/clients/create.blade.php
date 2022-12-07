@extends('adminlte::page')

@section('title', 'Nuevo Cliente')

@section('content_header')
    <h1>Nuevo Cliente</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-body">

            {!! Form::open(['route' => 'admin.clients.store', 'autocomplete' => 'off']) !!}
                @include('admin.clients.partials.form')

                <div class="flex-row-reverse">
                    <a class="btn btn-outline-secondary" href="{{ route('admin.clients.index') }}">Cancelar</a>
                    {!! Form::submit('Guardar',['class' => 'btn btn-success']) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>



@stop
