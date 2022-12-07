@extends('adminlte::page')

@section('title', 'Editar Operador')

@section('content_header')
    <h1>Editar Operador</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-body">

            {!! Form::model($operator, ['route' => ['admin.operators.update',$operator], 'autocomplete' => 'off', 'method'=>'put']) !!}
                @include('admin.operators.partials.form')
                <div class="flex-row-reverse">
                    <a class="btn btn-outline-secondary" href="{{ route('admin.operators.index') }}">Cancelar</a>
                    {!! Form::submit('Guardar',['class' => 'btn btn-success']) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>



@stop
