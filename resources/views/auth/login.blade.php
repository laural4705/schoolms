@include('auth.body.header')
    <div class="col-12">
        <div class="row justify-content-center no-gutters">
            <div class="col-lg-4 col-md-5 col-12">
                <div class="content-top-agile p-10">
                    <h2 class="text-white">Get started with Us</h2>
                    <p class="text-white-50">Sign in to start your session</p>
                </div>
                <div class="p-30 rounded30 box-shadowed b-2 b-dashed">
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-transparent text-white"><i class="ti-user"></i></span>
                                </div>
                                <input type="email" id="email" class="form-control pl-15 bg-transparent text-white plc-white" name="email" placeholder="E-mail Address">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text  bg-transparent text-white"><i class="ti-lock"></i></span>
                                </div>
                                <input type="password" class="form-control pl-15 bg-transparent text-white plc-white" name="password" placeholder="Password">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="checkbox text-white">
                                    <input type="checkbox" id="basic_checkbox_1" id="remember_me" name="remember" >
                                    <label for="basic_checkbox_1">Remember Me</label>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-6">
                                <div class="fog-pwd text-right">
                                    <a href="{{ route('password.request') }}"><i class="ion ion-locked"></i> Forgot pwd?</a><br>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-info btn-rounded mt-10">SIGN IN</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>
                    <div class="text-center">
                        <p class="mt-15 mb-0 text-white">Don't have an account? <a href="{{ route('register') }}" class="text-info ml-5">Sign Up</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('auth.body.footer')
