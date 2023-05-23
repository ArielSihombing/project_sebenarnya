@extends('app')
@section('content')

<style>
    body {
        background-image: url('https://fthmb.tqn.com/069VxQJsGjenxXXvRYg58_a3Sfg=/2122x1416/filters:fill(auto,1)/GettyImages-597201657-57257a0e5f9b589e34f9038c.jpg');
        background-repeat: no-repeat;
        background-size: cover;
    }

    label, h4, h5 {
        color: #ffffff;
    }

    /* CSS untuk warna judul */
    .judul {
        color: #ffffff;
    }

    
    /* CSS untuk mengubah warna latar belakang tombol Login */
    .btn-primary {
        background-color: #bbb;
        color: #000000;
    }

    /* CSS untuk mengubah warna latar belakang tombol Back */
    .btn-danger {
        background-color: #d8bfa9;
        color: #000000;
    }

    
    /* CSS untuk efek hover pada tombol */
    .btn-primary:hover, .btn-danger:hover {
        background-color: #ffff;
        color: #000000;
    }
    /* Ubah warna teks pada tombol Register dan Back menjadi hitam */
    .btn-primary h5, .btn-danger h5 {
        color: #000000;
    }


</style>

<div class="row">
    <div class="col-md-6">
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <h1 class="judul">Daftar Akun Anda<br><br></h1>
        <form action="{{ route('register.action') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label><h4>Name:</h4><span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="name" value="{{ old('name') }}" />
            </div>
            <div class="mb-3">
                <label><h4>Username:</h4><span class="text-danger">*</span></label>
                <input class="form-control" type="username" name="username" value="{{ old('username') }}" />
            </div>
            <div class="mb-3">
                <label><h4>Password:</h4><span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="password" />
            </div>
            <div class="mb-3">
                <label><h4>Password Confirmation:</h4><span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="password_confirm" />
            </div>
            <div class="mb-3">
                <button class="btn btn-primary"><h5>Register</h5></button>
                <a class="btn btn-danger" href="{{ route('home') }}"><h5>Back</h5></a>
            </div>
        </form>
    </div>
</div>
@endsection