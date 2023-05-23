@extends('app')
@section('content')
@auth
<p>Welcome <b>{{ Auth::user()->name }}</b></p>
<a class="btn btn-primary" href="{{ route('password') }}">Change Password</a>
<a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
@endauth
@guest
<h3>Silahkan Masuk/Daftar!</h3><br>
<a class="btn btn-primary" href="{{ route('login') }}">Login</a>
<a class="btn btn-info" href="{{ route('register') }}">Register</a>
@endguest
<style>
    .btn-primary {
        background-color: #FCE38A ;
        color: #000000;
    }

    .btn-info {
        background-color: #D9D2B4;
        color: #000000;
    }
    /* CSS untuk efek hover pada tombol */
    .btn-primary:hover, .btn-info:hover {
        background-color: #f5f5f5;
        color: #000000;
    }

    
</style>

@endsection

