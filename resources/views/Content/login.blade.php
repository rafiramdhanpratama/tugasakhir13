@extends('Layout.layout')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Source Code Landing Page</title>
</head>
<body>
    <h1>Welcome to the Source Code Landing Page!</h1>
    <img src="resources/views/Images/12.jpg" class="img-fluid" alt="...">
</body>
</html>
<div class="container mt-5">
    <h3>login</h3>
    <form action="post-login" method="POST">
        {{ csrf_field() }}
        @if(count($errors) > 0)
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
            {{ $error }} <br />
            @endforeach
        </div>
        @endif
        <div>
            <label for="username">Email</label>
            <input id="email" type="email" class="form-control" name="email" required autofocus>
        </div>
        <div>
            <label for="password">Password</label>
            <input id="password" type="password" class="form-control" name="password" required autofocus>
        </div>
        <button type="submit" name="login" class="btn btn-primary btn-block btn-flat">Sign In</button>
    </form>
    <p>Belum mempunyai akun? <a href="register">daftar</a></p>
@endsection