<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Login</title>
</head>
<body>
<div class="container">
    <a href="/"><i class="bi-arrow-left h1"></i></a>
</div>
<div class="container mt-3">
    @if(Session::get('failed'))
    <div class="alert alert-danger alert-dosmissible fade show" role ="alert">
        <strong>Login Gagal!</strong>{{ Session::get('failet')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="Close"></button>
    </div>

    @endif
    @if(Session::get('Success'))
    <div class="alert alert-succes alert-dismissible fade show" role="alert">
        <strong>Berhasil!</strong> {{ Session::get('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
</div>
<div class="container d-flex justify-content-center align-items-center" style="margin-top: 60px">
<div class="card" style="width: 35%">
<div class="card-body p-4">
    <h3 class="card-title text-center">Login</h3>
    <form action="{{ route('postLogin') }}" method="POST">
        @csrf
        <div class="form-group mt-4">
            <label class="text-secondary">Email Anda</label>
            <input type="email" class="form-control border border-secondary form-control-lg"
            name="email" required value="{{ old('email') }}">
            <span class="text-danger">
                @error('email')
                    {{ $message }}
                @enderror
            </span>
            <br>
        </div>
        <div class="form-group mt-1">
            <label class="text-secondary">Password Anda</label>
            <input type="password" class="form-control border border-secondary form-control-lg"name="password">
            <span class="text-danger">
                @error('password')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <button type="submit" class="form-control btn btn-primary mt-5">Login</button>
    </form>
    <p class="mt-2 text-center">Belum Punya akun? <a href="{{ route('auth.register') }}" style="text-decoration: none">
    Ayo Buat akun!</a></p>
</div>
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>