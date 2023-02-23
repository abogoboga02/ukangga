@extends('layouts.app')
@section('page', 'Data Kamar')
@section('content')
    <div class="content-wrapper">
        <div class="container flex-grow-1 container-p-y">
            <h4 class="fw-bold py-2 mb-2"><span class="text-muted fw-light">Data Master /</span> @yield('page')</h4>
            <!-- Main content -->
            <div class="content pt-1">
                <div class="container-fluid">
                    <div class="row-mb-2">
                        <div class="col-md-12 mt-1">
                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                            @if (session('success'))
                                <div class="alert alert-primary">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <div class="card card-outline card-primary">
                                <div class="card-header">
                                    <a type="button" href="{{ route('data-kamar.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i>
                                        Tambah</a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="dataTable" class="table">
                                            <thead>
                                                <th>No</th>
                                                <th>Nama Kamar</th>
                                                <th>ID Bed</th>
                                                <th>Aksi</th>

                                            </thead>
                                            <tbody>

                                        </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.content -->
        </div>
    </div>
@endsection
