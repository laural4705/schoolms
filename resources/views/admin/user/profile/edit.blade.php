@extends('admin.admin_master')
@section('admin')
    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                                    <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <h5>Name <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" name="name" class="form-control" value="{{ $profile->name }}" required> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <h5>Email Field <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="email" name="email" class="form-control" value="{{ $profile->email }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <h5>Mobile</h5>
                                                            <div class="controls">
                                                                <input type="tel" name="mobile" class="form-control" value="{{ $profile->mobile }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <h5>Address</h5>
                                                            <div class="controls">
                                                                <input type="text" name="address" class="form-control" value="{{ $profile->address }}" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <h5>User Role</h5>
                                                            <div class="controls">
                                                                <div class="form-group">
                                                                    <select name="role" id="role" required="" class="form-control" aria-invalid="false">
                                                                        <option value="" selected="" disabled="">Select User Role</option>
                                                                        <option value="Admin" {{ ($profile->role == 'Admin' ? 'selected' : "") }}>Admin</option>
                                                                        <option value="User" {{ ($profile->role == 'User' ? 'selected' : "") }}>User</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <h5>Sex</h5>
                                                            <div class="controls">
                                                                <fieldset>
                                                                    <input type="checkbox" id="sex_m" name="sex" value="Male" {{ ($profile->sex == 'Male' ? 'checked' : "") }}>
                                                                    <label for="sex_m">Male</label>
                                                                </fieldset>
                                                                <fieldset>
                                                                    <input type="checkbox" id="sex_f" name="sex" value="Female" {{ ($profile->sex == 'Female' ? 'checked' : "") }}>
                                                                    <label for="sex_f">Female</label>
                                                                </fieldset>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <h5>Update Profile Image</h5>
                                                            <div class="controls">
                                                                <input id="image" type="file" name="image" class="form-control" required> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <img id="showImage" src="{{ (!empty($profile->image) ? asset('upload/'.$profile->image) : url('upload/nouser.jpg')) }}"
                                                                style="width:100px; border:1px solid #000000"/>
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
                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
