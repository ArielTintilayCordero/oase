@extends('adminlte::page')

@section('title', 'Editar Cliente')

@section('content_header')
    <h1>Editar Cliente</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-body">

            {!! Form::model($client, ['route' => ['admin.clients.update',$client], 'autocomplete' => 'off', 'method'=>'put']) !!}
                @include('admin.clients.partials.form')
                <div class="flex-row-reverse">
                    <a class="btn btn-outline-secondary" href="{{ route('admin.clients.index') }}">Cancelar</a>
                    {!! Form::submit('Guardar',['class' => 'btn btn-success']) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>



@stop
