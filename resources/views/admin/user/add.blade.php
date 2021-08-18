@extends('admin.admin_master')
@section('admin')
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="box">
                        <div class="box-header with-border">
                            <h4 class="box-title">Add New User</h4>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col">
                                    <form method="POST" action="{{ route('users.store') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <h5>Name <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" name="name" class="form-control" required> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <h5>Email Field <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="email" name="email" class="form-control" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <h5>Password <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="password" name="password" class="form-control" required=""> </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <h5>User Role <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <div class="form-group">
                                                                    <select name="role" id="role" required="" class="form-control" aria-invalid="false">
                                                                        <option value="" selected="" disabled="">Select User Role</option>
                                                                        <option value="admin">Admin</option>
                                                                        <option value="user">User</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-xs-right">
                                            <input type="submit" style="float:right" class="btn btn-rounded btn-info mb-5" value="Add User">
                                        </div>
                                    </form>

                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.box-body -->
                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>
@endsection
