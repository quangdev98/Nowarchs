<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('manager/css/bootstrap.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('manager/css/bootstrap.min.css.map') }}"> --}}
    <link rel="stylesheet" href="{{ asset('manager/css/moment.min.js') }}">
    <link rel="stylesheet" href="{{ asset('manager/css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('manager/css/custom_login.css') }}">
</head>
<body>
    <div class="container">
        <div class="wrap-login">
            <form action="{{ route('admin.auth.authenticate') }}" method="POST" id="postLogin">
                @csrf
                <a class="logo" href="/" title=""><img src="{{ asset('User/images/logo.png') }}" alt=""></a>
                <div class="form-group">
                    <label for="">Email</label>
                    <input name="email" placeholder="Email" type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <div class="input-pass">
                        <input name="password" type="password" placeholder="Password" class="form-control" required>
                        <span class="eyes"><img class="img-fluid" src="{{ asset('manager/images/eyes_disable.png') }}" /></span>
                    </div>
                </div>
                <div class="text-danger">
                    @error("auth_error")
                        {{$message}}
                    @enderror
                </div>
                <button class="btn btn-blue">Đăng nhập</button>
            </form>
            <a href="{{ route('user.index') }}" title="" class="out-index"> Về trang chủ</a>
            <!-- notifili -->

                {!! Session::has('success') ? '
                <div id="alert" class="alert alert-success">
                    '.Session::get('success').'
                </div>' : ''!!}
                {!! Session::has('error') ? '
                    <div id="alert" class="alert alert-danger">
                        '.Session::get('error').'
                    </div>' : ''!!}

                    <div class="text-danger">
                        @error("auth_error")
                            {{$message}}
                        @enderror
                    </div>

            <!--  -->
        </div>
    </div>
    <script src="{{ asset('manager/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('manager/js/bootstrap.min.js') }}"></script>
    {{-- <script src="{{ asset('manager/js/bootstrap.min.js.map') }}"></script> --}}
    <script>
        let url = '{{asset('manager/')}}/';
    </script>
    <script src="{{ asset('manager/js/main.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    {!! JsValidator::formRequest('Modules\Admin\Http\Requests\LoginRequest','#postLogin') !!}

</body>
</html>
