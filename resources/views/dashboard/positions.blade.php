@extends('dashboard.layout.layouting',[
    'title' => 'Data Position',
    'active' => 'Position'
])
@section('main')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="min-height: 1313px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Position</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    {{-- Data Table --}}
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tabel Data Position</h3>
                            <button class="btn btn-info float-sm-right" data-bs-toggle="modal" data-bs-target="#modal_add_position">Add Position <i class="fas fa-plus m-sm-1"></i></button>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="table1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Name Position</th>
                                        <th>Division</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($positions as $pos)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $pos->name_pos }}</td>
                                        <td>{{ $pos->division->name_div }}</td>
                                        <td>
                                            <a href="" class="m-sm-2"><span><i class="fas fa-info-circle text-blue"></i></span> </a>
                                            <a href="" class="m-sm-2" data-bs-toggle="modal" data-bs-target="#modal_edit_position"><span><i class="fas fa-edit text-warning"></i></span></a>
                                            <a href="" class="m-sm-2"><span><i class="fas fa-trash-alt text-danger"></i></span></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No.</th>
                                        <th>Name Position</th>
                                        <th>Division</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>
@endsection
@section('modal')
    @include('dashboard.modal.add_position')
    @include('dashboard.modal.edit_position')
@endsection