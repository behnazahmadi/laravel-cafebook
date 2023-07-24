@extends("domain.fa.layout.standard")

@section("styles")
    <link rel="stylesheet" href="{{asset("toastr.css")}}">

@endsection
@section("pageTitle")
    | تماس با ما
@endsection


@section("content")
    <!-- عنوان صفحه -->
    <div class="page-title animatedBackground">
        <div class="container">
            <h3>تماس با ما</h3>
            <ul>
                <li><a href="{{route("domain.home")}}">صفحه اصلی</a></li>
                <li class="dot-divider"></li>
                <li>تماس با ما</li>
            </ul>
        </div>

        <div class="bg-pattern"><img src="{{asset("turacos/img/bg-pattern-2.png")}}" alt="pattern"></div>
    </div>
    <!-- عنوان صفحه پایانی -->



    <!-- شروع منطقه تماس -->
    <section class="contact-area ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="contact-box">
                        <div class="icon">
                            <i class="icofont-phone"></i>
                        </div>

                        <div class="content">
                            <h4>تلفن / فکس</h4>
                            <p><a href="#">( 021) 245522455</a></p>
                            <p><a href="#">( 000) 245522455</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="contact-box">
                        <div class="icon">
                            <i class="icofont-envelope"></i>
                        </div>

                        <div class="content">
                            <h4>ایمیل</h4>
                            <p><a href="mailto: turacos@gmail.com"> turacos@gmail.com</a></p>
                            <p><a href="mailto: turacos@gmail.com"> turacos@gmail.com</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="contact-box">
                        <div class="icon">
                            <i class="icofont-google-map"></i>
                        </div>

                        <div class="content">
                            <h4>مکان</h4>
                            <p>خیابان کوادرا 2750، منطقه پارک، <span>ویکتوریا، کانادا.</span></p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-12 col-md-12">
                    <br>
                    <br>
                    <br>
                    <br>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="contact-text">
                        <h3>در تماس باشید</h3>
                        <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد.</p>
                        <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>


                    </div>
                </div>





                <div class="col-lg-6 col-md-6">
                    <form method="POST" action="{{route("contact.post")}}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="text" name = "fullname" class="form-control" required data-error="لطفا نام خود را وارد کنید" placeholder="نام">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="email" name = "email" class="form-control" required data-error="لطفا ایمیل خود را وارد کنید" placeholder="ایمیل">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <input type="number" name = "phone_number" class="form-control" required data-error="لطفا شماره تماس خود را وارد کنید" placeholder="شماره تماس">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name = "text" class="form-control" id="message" cols="30" rows="4" required data-error="پیام شما" placeholder="پیام شما"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="btn btn-primary">ارسال</button>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- شروع منطقه تماس -->



@endsection

@section("scripts")

    <script src="{{asset("toastr.min.js")}}"></script>

    <script>
        @if(session()->has('message'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
        toastr.success("{{ session('message') }}");
        @endif

            @if(session()->has('error'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
        toastr.error("{{ session('error') }}");
        @endif

            @if(session()->has('info'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
        toastr.info("{{ session('info') }}");
        @endif

            @if(session()->has('warning'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
        toastr.warning("{{ session('warning') }}");
        @endif
    </script>
@endsection
