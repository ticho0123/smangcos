@extends('layouts.auth')
@section('content')
<form class="form-signin" method="POST" action="{{route('login')}}">
    @csrf
    <div class="text-center mb-4">
        <img class="mb-4" src="/template/img/logo.png" alt="" width="250">
        <h1 class="h3 mb-3 font-weight-normal">Login</h1>
    </div>
    @include('result')
    <div class="form-label-group">
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required
            autofocus>
        <label for="inputEmail">Email address</label>
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

    </div>

    <div class="form-label-group">
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
        <label for="inputPassword">Password</label>
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember me
        </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    <a class="mb-2" href="{{url('register')}}">
        Sign Up
    </a>
    <p class="mt-5 mb-3 text-muted text-center">&copy; 2020</p>
</form>
@endsection
