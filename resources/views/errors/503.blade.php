<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OOPS</title>
    <link rel="stylesheet" href="{{ asset('User/css/oops.css') }}">
</head>
<body>
        <div class="oops">
            <img src="{{ asset('images/errors.gif') }}" alt="">
            <h2>503, Oops, Looks like the transmission is faulty!</h2>
            <p>This is not a fault, just an accident that was not intentional.</p>
            <a href="{{ route('user.index') }}" title="">Quay lại trang chủ</a>
        </div>
</body>
</html>
