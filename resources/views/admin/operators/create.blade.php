@extends('adminlte::page')

@section('title', 'Nuevo Operador')

@section('content_header')
    <h1>Nuevo Operador</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-body">

            {!! Form::open(['route' => 'admin.operators.store', 'autocomplete' => 'off']) !!}
                @include('admin.operators.partials.form')

                <div class="flex-row-reverse">
                    <a class="btn btn-outline-secondary" href="{{ route('admin.operators.index') }}">Cancelar</a>
                    {!! Form::submit('Guardar',['class' => 'btn btn-success']) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>



@stop
