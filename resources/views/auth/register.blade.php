<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <title>ثبت نام | کافه بوک</title>
    <!-- Favicon-->
    <link rel="icon" href="{{asset("atrio/images/favicon.ico")}}" type="image/x-icon">
    <!-- Plugins Core Css -->
    <link href="{{asset("atrio/css/app.min.css")}}" rel="stylesheet">
    <link href="{{asset("atrio/js/bundles/materialize-rtl/materialize-rtl.min.css")}}" rel="stylesheet">
    <!-- Custom Css -->
    <link href="{{asset("atrio/css/style.css")}}" rel="stylesheet"/>
    <link href="{{asset("atrio/css/pages/extra_pages.css")}}" rel="stylesheet"/>
        <link rel="stylesheet" href="{{asset("toastr.css")}}">

</head>

<body>
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                @csrf
                <span class="login100-form-title p-b-45">
						ثبت نام
					</span>




                    <div class="wrap-input100 validate-input text-left" data-validate="ایمیل ضروری است">
                        <input class="input100" type="text" name="email" value="{{ old('email') }}">
                        <span class="label-input100">ایمیل</span>
                    </div>
                    @if($errors->has('email'))
                        <span>{{$errors->first('email')}}</span>
                        @enderror



                        <div class="wrap-input100 validate-input text-left" data-validate="رمز عبور مورد نیاز است">
                            <input class="input100" type="password" name="password">
                            <span class="focus-input100"></span>
                            <span class="label-input100">رمزعبور</span>
                        </div>
                        @if($errors->has('password'))
                            <span>{{$errors->first('password')}}</span>
                            @enderror

                            <div class="wrap-input100 validate-input text-left" data-validate="رمز عبور مورد نیاز است">
                                <input class="input100" type="password" name="password_confirmation">
                                <span class="focus-input100"></span>
                                <span class="label-input100">تکرار رمزعبور</span>
                            </div>
                            @if($errors->has('password'))
                                <span>{{$errors->first('password')}}</span>
                                @enderror


                                <div class="flex-sb-m w-full p-t-15 p-b-20">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" value=""> مرا به خاطر بسپار
                                            <span class="form-check-sign">
									<span class="check"></span>
								</span>
                                        </label>
                                    </div>

                                    <div>
                                        <a href="{{route("login")}}" class="txt1">
                                            ورود به حساب کاربری
                                        </a>
                                    </div>
                                </div>



                                <div class="container-login100-form-btn">
                                    <button type="submit" class="login100-form-btn">
                                        ثبت نام
                                    </button>
                                </div>


            </form>

            <div class="login100-more" style="background-image: url('atrio/images/pages/bg-01.png');">
            </div>
        </div>
    </div>
</div>

<!-- Plugins Js -->
<script src="{{asset("atrio/js/app.min.js")}}"></script>
<!-- Extra page Js -->
<script src="{{asset("atrio/js/pages/examples/pages.js")}}"></script>
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
</body>

</html>
