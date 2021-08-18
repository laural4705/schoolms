@extends('admin.admin_master')
@section('admin')
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="box">
                        <div class="box-header with-border">
                            <h4 class="box-title">Edit User Information</h4>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col">
                                    <form method="POST" action="{{ route('users.update', $editUser->id) }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <h5>Name <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" name="name" class="form-control" value="{{ $editUser->name }}" required> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <h5>Email Field <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="email" name="email" class="form-control" value="{{ $editUser->email }}" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <h5>User Role <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <div class="form-group">
                                                                    <select name="role" id="role" required="" class="form-control" aria-invalid="false">
                                                                        <option value="" disabled="">Select User Role</option>
                                                                        <option value="Admin" {{ ($editUser->role == 'Admin' ? 'selected' : "") }}>Admin</option>
                                                                        <option value="User" {{ ($editUser->role == 'User' ? 'selected' : "") }}>User</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-xs-right">
                                            <input type="submit" style="float:right" class="btn btn-rounded btn-info mb-5" value="Update">
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
