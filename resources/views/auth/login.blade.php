@extends('master')

@section('konten')
<br>
<div class="row justify-content-center">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title text-center">Login</h5>
            <h6 class="card-subtitle mb-2 text-center text-muted">Isi dengan lengkap</h6>
            <form action="/authenticate" method="post" class="user">
                @csrf
                <div class="form-group mt-3">
                    <input type="email" name="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan email anda" value="{{ old('email') }}">
                </div>
                <div class="form-group mt-3">
                    <input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="Password" value="{{ old('password') }}">
                </div>

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if(session('error'))
                <div class="alert alert-danger mt-3">
                    {{session('error')}}!
                </div>
                @endif
                <div class="form-group mt-3 text-center">
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection