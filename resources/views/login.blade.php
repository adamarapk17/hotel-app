<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dis Hotel</title>

    <link rel="stylesheet" href="{{asset('asset/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/csslogin.css')}}">

</head>
<body>

<img class='gambar-login' src="{{asset('image/bghotel.jpg')}}" alt="eror mas">
    <form action="/login" method="POST" class="login-box">
        @csrf
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Masukan Email" class="form-control @error('email') is-invalid @enderror" id="email" autofocus required value="{{ old('email') }}">
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        </div>
        <label for="password">Password</label>
        <input type="password" name="password"  placeholder="Masukan Password" class="form-control" id="password" required>

        <button type="submit" class="btn btn-login rounded-20" >Login</button>
     </form>

     <script src="asset/bootstrap.bundle.min.js"></script>
</body>
</html>
