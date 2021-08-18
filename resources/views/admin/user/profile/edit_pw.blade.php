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
                            <h4 class="box-title">Change Password</h4>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col">
                                    <form method="POST" action="{{ route('profile.update_pw') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <h5>Current Password <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="password" id="current_password" name="current_password" class="form-control" value="" required>
                                                                @error('current_password')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>

                                                        </div>
                                                        <div class="form-group">
                                                            <h5>New Password <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="password" id="password" name="password" class="form-control" value="" required>
                                                                @error('password')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <h5>Password Confirmation<span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" value="" required>
                                                                @error('password_confirmation')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
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
