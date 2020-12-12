@extends('layouts.auth')
@section('content')
<form class="form-signin" method="POST" action="{{route('register')}}">
    @csrf
    <div class="text-center mb-4">
    <a href="{{route('awal')}}">
            <img class="mb-4" src="/template/img/logo.png" alt="" width="250">
        </a>
        <h1 class="h3 mb-3 font-weight-normal">Register</h1>
    </div>
    @include('result')
    <div class="form-label-group">
        <input type="text" id="inputEmail" name="name" class="form-control" placeholder="Name" required
            autofocus>
        <label for="inputEmail">Name</label>
    </div>
    <div class="form-label-group">
        <input type="text" id="inputEmail" name="username" class="form-control" placeholder="Name" required>
        <label for="inputEmail">Username</label>
    </div>
    <div class="form-label-group">
        <input type="text" id="inputEmail" name="telfon" class="form-control" placeholder="Name" required>
        <label for="inputEmail">No Telfon</label>
    </div>
    <div class="form-label-group">
        <input type="text" id="inputEmail" name="asal" class="form-control" placeholder="Name" required>
        <label for="inputEmail">Asal</label>
    </div>
    <div class="form-label-group">
        <input type="date" id="inputEmail" name="tanggal_lahir" class="form-control" placeholder="Name" required>
        <label for="inputEmail">Tanggal Lahir</label>
    </div>
    <div class="form-label-group">
        <select name="gender" id="inputGender" class="form-control">
            <option value="pria">Laki - laki</option>
            <option value="wanita">Perempuan</option>
        </select>
    </div>
    <div class="form-label-group">
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required
            autofocus>
        <label for="inputEmail">Email address</label>
    </div>

    <div class="form-label-group">
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
        <label for="inputPassword">Password</label>
    </div>
    <div class="form-label-group">
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password_confirmation" required>
        <label for="inputPassword">Konfirmasi Password</label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
    <a class="mb-2" href="{{url('login')}}">
        Sign In
    </a>
    <p class="mt-5 mb-3 text-muted text-center">&copy; 2020</p>
</form>
@endsection
