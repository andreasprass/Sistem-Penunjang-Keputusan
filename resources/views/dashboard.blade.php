@extends('dashboard.layout.layouting',[
    'dashboard_title' => 'Data User',
    'button_desc' => 'Tambah Data User'
])
@section('main')

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                {{-- Data Table --}}
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tabel Data User</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Password</th>
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
                                    <td>
                                        <a href="" class="m-sm-3"><span><i class="fas fa-info-circle text-blue"></i></span> </a>
                                        <a href="" class="m-sm-3"><span><i class="fas fa-user-edit text-warning"></i></span></a>
                                        <a href="" class="m-sm-3"><span><i class="fas fa-trash-alt text-danger"></i></span></a>
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
@endsection