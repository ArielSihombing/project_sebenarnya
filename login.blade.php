@extends('app')
@section('content')
<style>
    body {
        background-image: url('https://bandwagon-gig-finder.s3.amazonaws.com/editorials/uploads/pictures/10620/content_IAN_0764.jpg');
        background-repeat: no-repeat;
        background-size: cover;
    }

    /* CSS untuk warna tulisan abu-abu cerah */
    .text-light-gray {
        color: #bbb;
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

    /* CSS untuk warna judul */
    .judul {
        color: #ffffff;
    }

</style>
<div class="row">
    <div class="col-md-6">
        @if(session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
        @endif
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <h1 class="judul">Masukkan Akun Anda<br><br></h1>
        <form action="{{ route('login.action') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="text-light-gray"><h4>Username:</h4><span class="text-danger">*</span></label>
                <input class="form-control" type="username" name="username" value="{{ old('username') }}" />
            </div>
            <div class="mb-3">
                <label class="text-light-gray"><h4>Password:</h4><span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="password" />
            </div>
            <div class="mb-3">
                <button class="btn btn-primary"><h5>Login</h5></button>
                <a class="btn btn-danger" href="{{ route('home') }}"><h5>Back</h5></a>
            </div>
        </form>
    </div>
</div>
@endsection