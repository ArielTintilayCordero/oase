@extends('adminlte::page')

@section('title', 'Hotel')

@section('content_header')
    <h1>Paises</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="">
                {{-- <a href="{{ route('admin.countries.create') }}" class="btn btn-outline-info mb-4">
                    <i class="bi bi-plus-square"></i>Adicionar Pais</a> --}}
            </div>
            <table id="tabla" class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($countries as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nombre }}</td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="{{ route('admin.countries.edit', $item->id) }}">
                                    <i class="iconoir-edit-pencil"></i>
                                </a>
                                <button type="submit" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal" data-bs-whatever="{{ $item->id }}">
                                    <i class="iconoir-trash"></i>
                                </button>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

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

@stop
