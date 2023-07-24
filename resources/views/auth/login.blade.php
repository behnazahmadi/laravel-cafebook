<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>ورود | کافه بوک</title>
    <!-- Favicon-->
    <link rel="icon" href="{{asset("atrio/images/favicon.ico")}}" type="image/x-icon">
    <!-- Plugins Core Css -->
    <link href="{{asset("atrio/css/app.min.css")}}" rel="stylesheet">
    <link href="{{asset("atrio/js/bundles/materialize-rtl/materialize-rtl.min.css")}}" rel="stylesheet">
    <!-- Custom Css -->
    <link href="{{asset("atrio/css/style.css")}}" rel="stylesheet" />
    <link href="{{asset("atrio/css/pages/extra_pages.css")}}" rel="stylesheet" />
</head>

<body>
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                @csrf
					<span class="login100-form-title p-b-45">
						ورود
					</span>


                <div class="wrap-input100 validate-input text-left" data-validate = "Valid email is required: ex@abc.xyz">
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
                <div class="flex-sb-m w-full p-t-15 p-b-20">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> مرا به خاطر بسپار
                            <span class="form-check-sign">
									<span class="check"></span>
								</span>
                        </label>
                    </div>

                    <div>
                        <a href="{{route("register")}}" class="txt1">
                            ثبت نام در سایت
                        </a>
                    </div>
                </div>


                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn">
                        ورود
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
</body>

</html>
