@extends('adminlte::page')

@section('title', 'Hotel')

@section('content_header')
    <h1>Hoteles</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="">
                @if (\Session::has('destroy'))
                    <div class="alert alert-danger">
                        <p>{{ \Session::get('destroy') }}</p>
                    </div>
                @endif

                <a href="{{ route('admin.hoteles.create') }}" class="btn btn-outline-info mb-4">
                    <i class="bi bi-plus-square"></i>Adicionar Hotel</a>
            </div>
            <table id="tabla" class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>DIRECCION</th>
                        <th>TELEFONO</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($hoteles as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nombre }}</td>
                            <td>{{ $item->direccion }}</td>
                            <td>{{ $item->telefono }}</td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="{{ route('admin.hoteles.edit', $item->id) }}">
                                    <i class="iconoir-edit-pencil"></i>
                                </a>

                                {{-- <button type="submit" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal" data-bs-whatever="{{ $item->id }}">
                                    <i class="iconoir-trash"></i>
                                </button> --}}
                                <a href="#delete{{$item->id}}" data-bs-toggle="modal" class="btn btn-danger"><i class='fa fa-trash'></i> Delete</a>
                                @include('action')

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>

    {{-- delete Modal --}}
    <div class="modal fade" id="delete{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {!! Form::model($hoteles, ['method' => 'delete', 'route' => ['admin.hoteles.destroy', 1]]) !!}
                    <h4 class="text-center">Esta seguro que desea eloiminar el siguiente registro?</h4>
                    <h5 class="text-center"> {{ $item->nombre }} {{ $item->direccion }}</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa fa-times"></i>
                        Cancel</button>
                    {{ Form::button('<i class="fa fa-trash"></i> Delete', ['class' => 'btn btn-danger', 'type' => 'submit']) }}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lucaburgio/iconoir@main/css/iconoir.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function() {
            $('#tabla').DataTable();
        });
    </script>

    {{--  --}}
    {{-- <form action="{{ route('admin.hoteles.destroy', $item->id) }}" method="POST">
        @csrf
        @method('DELETE')
 --}}

    <script>
        var exampleModal = document.getElementById('deleteModal')
        exampleModal.addEventListener('show.bs.modal', function(event) {
            var button = event.relatedTarget
            var recipient = button.getAttribute('data-bs-whatever') /* id */
            var modalTitle = exampleModal.querySelector('.modal-title')
            /* var modalBodyInput = exampleModal.querySelector('.modal-body input') */
            action = $('#formDelete').attr('data-action').slice(0,-1);
            action += recipient;
            $('#formDelete').attr('action', action);

            modalTitle.textContent = 'Se eliminara el registro ' + recipient
            /* modalBodyInput.value = recipient */
        })
    </script>



@stop
