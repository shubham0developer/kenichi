@extends('layout.main')
@section('main')
<section style=" background:linear-gradient(0deg, #001b5e52, #001b5e), url('https://images.unsplash.com/photo-1485988412941-77a35537dae4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=896&q=80'); background-size:cover; background-repeat:no-repeat;background-position: center;">
    <div class="row justify-content-between py-5">
        <div class="col-12">
            <div class="section_tittle py-5 text-center mb-0">
                <h2 class="m-auto text-white">Contact Us</h2>
            </div>
        </div>
    </div>
</section>

<style>
    .form-control:focus {
        color: #212529;
        background-color: #fff;
        border-color: #86b7fe;
        outline: 0;
        box-shadow: 0 0 0 0.25rem rgb(13 110 253 / 25%);
    }

    .form-control:focus {
        color: #212529;
        background-color: #fff;
        border-color: #86b7fe;
        outline: 0;
        box-shadow: 0 0 0 0.25rem rgb(13 110 253 / 25%);
    }

    .form-control {
        border: 0px solid #ced4da;
        border-bottom: 1px solid #ced4da;
        border-radius: 0;
    }

    .blog_part label {
        color: #052866;
    }
</style>
<section class="blog_part section_padding " style="color: white;">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="my-2">
                    <p style="font-size: 30px; text-align: center; color:#f1efef;">
                        <b>Address</b>
                    </p>
                    <p>
                        <i class="fa fa-map-marker m-2" style="font-size: 25px; color:#f1efef;"></i> D.59/103 N-2 Sigra (Near Smith School), Varanasi                        </p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="my-2">
                    <p style="font-size: 30px; text-align: center; color:#f1efef;">
                        <b>Address</b>
                    </p>
                    <p>
                        <i class="fa fa-map-marker m-2" style="font-size: 25px; color:#f1efef;"></i> D.59/103 N-2 Sigra (Near Smith School), Varanasi                        </p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="my-2">
                    <p style="font-size: 30px; text-align: center; color:#f1efef;">
                        <b>Address</b>
                    </p>
                    <p>
                        <i class="fa fa-map-marker m-2" style="font-size: 25px; color:#f1efef;"></i> D.59/103 N-2 Sigra (Near Smith School), Varanasi                        </p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12"></div>
        </div>
        <div class="row mb-2">
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 bg-info text-white p-5" style="background: url(https://images.unsplash.com/photo-1559030623-0226b1241edd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1031&q=80); background-size: cover; background-position: bottom;">
              <h6></h6>
            </div>
            <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 py-5 box-shadow ">
                <div class="p-3">
                    <form class="mt-5">
                        <div class="row text-manjula1">
                            <div class="col-6 mb-4">
                                <label for="">Full Name</label>
                                <input type="text" class="form-control" id="" name="">
                            </div>
                            <div class="col-6 mb-4">
                                <label for="">Contact Number</label>
                                <input type="email" class="form-control" id="" name="">
                            </div>
                            <div class="col-6 mb-4">
                                <label for="">Email Address</label>
                                <input type="email" class="form-control" id="" name="">
                            </div>
                            <div class="col-6 mb-4">
                                <label for="">Subject</label>
                                <input type="text" class="form-control" id="" name="">
                            </div>
                            <div class="col-12 mb-4">
                                <label for="">Message</label>
                                <textarea class="form-control" rows="4" id="" name="">
                </textarea>
                            </div>
                            <div class="col-12">
                                <input type="submit" class="btn btn-warning  btn-sm w-25 float-end"
                                    style="float: right;" value="Send Message">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
