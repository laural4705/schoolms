@include('auth.body.header')

        <div class="col-12">
            <div class="row justify-content-center no-gutters">
                <div class="col-lg-4 col-md-5 col-12">
                    <div class="content-top-agile p-10">
                        <h3 class="mb-0 text-white">Recover Password</h3>
                    </div>
                    <div class="p-30 rounded30 box-shadowed b-2 b-dashed">
                        <form action="{{ route('password.email') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-transparent text-white"><i class="ti-email"></i></span>
                                    </div>
                                    <input type="email" id="email" class="form-control pl-15 bg-transparent text-white plc-white" name="email" placeholder="Your Email">

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-info btn-rounded margin-top-10">Reset</button>
                                </div>
                                <!-- /.col -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@include('auth.body.footer')
