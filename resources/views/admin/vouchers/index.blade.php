@extends('adminlte::page')

@section('title', 'Vouchers')

@section('content_header')
    <h1>Vouchers</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="">
                <a href="{{ route('admin.vouchers.create') }}" class="btn btn-outline-info mb-4">
                    <i class="bi bi-plus-square"></i>Adicionar Servicio</a>
            </div>
            <table id="tabla" class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>FECHA</th>
                        <th>FECHA INICIO</th>
                        <th>FECHA FIN</th>
                        <th>OBSERVACIONES</th>
                        <th>CLIENTES</th>
                        <th>ESTADO</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($vouchers as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->date_voucher }}</td>
                            <td>{{ $item->start_date }}</td>
                            <td>{{ $item->end_date }}</td>
                            <td>{{  $item->observations}}</td>

                            <td>
                                @foreach ($item->clients as $client)
                                    {{ $client->nombre }}
                                    <hr>
                                @endforeach

                            </td>

                            <td>
                            @if ($item->status)
                                <svg width="24px" height="24px" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#1cb01e"><path d="M16.472 20H4.1a.6.6 0 01-.6-.6V9.6a.6.6 0 01.6-.6h2.768a2 2 0 001.715-.971l2.71-4.517a1.631 1.631 0 012.961 1.308l-1.022 3.408a.6.6 0 00.574.772h4.575a2 2 0 011.93 2.526l-1.91 7A2 2 0 0116.473 20z" stroke="#1cb01e" stroke-width="1.5" stroke-linecap="round"></path><path d="M7 20V9" stroke="#1cb01e" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                            @else
                                <svg width="24px" height="24px" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#d41111"><path d="M16.472 3.5H4.1a.6.6 0 00-.6.6v9.8a.6.6 0 00.6.6h2.768a2 2 0 011.715.971l2.71 4.517a1.631 1.631 0 002.961-1.308l-1.022-3.408a.6.6 0 01.574-.772h4.575a2 2 0 001.93-2.526l-1.91-7A2 2 0 0016.473 3.5z" stroke="#d41111" stroke-width="1.5" stroke-linecap="round"></path><path d="M7 14.5v-11" stroke="#d41111" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                            @endif
                            </td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="{{ route('admin.vouchers.edit', $item->id) }}">
                                    <i class="iconoir-edit-pencil"></i>
                                </a>
                                <button type="submit" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#createModal" data-bs-whatever="{{ $item->id }}">
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
    <link rel="stylesheet" href="sweetalert2.min.css">
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
    {{-- <script src="sweetalert2.all.min.js"></script> --}}
    <script src="sweetalert2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#tabla').DataTable();
        });
    </script>

    <script>
        Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Your work has been saved',
        showConfirmButton: false,
        timer: 1500
        })
    </script>

@stop
