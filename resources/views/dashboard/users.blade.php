@extends('dashboard.layout.layouting',[
    'title' => 'Data User',
    'active' => 'User'
])
@section('main')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="min-height: 1313px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data User</h1>
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
                            <h3 class="card-title">Tabel Data User</h3>
                            <button class="btn btn-info float-sm-right" data-bs-toggle="modal" data-bs-target="#modal_add_user">Add User <i class="fas fa-plus m-sm-1"></i></button>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="table1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Position</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->password }}</td>
                                        <td>{{ $user->position->name_pos }}</td>
                                        <td>
                                            <a href="" class="m-sm-2"><span><i class="fas fa-info-circle text-blue"></i></span> </a>
                                            <a href="" class="m-sm-2"><span><i class="fas fa-user-edit text-warning"></i></span></a>
                                            <a href="" class="m-sm-2"><span><i class="fas fa-trash-alt text-danger"></i></span></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No.</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Position</th>
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
    @include('dashboard.modal.add_user')
@endsection