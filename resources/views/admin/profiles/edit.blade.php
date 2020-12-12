@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            {{ __('Profiles') }}
                        </h4>
                    <p>
                        Kelola informasi pulau untuk mnengontrol, melindungi, dan mengamankan akun
                    </p>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="post" action="{{route('profiles.update',$user->id)}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10">
                                    <input type="text" name="username" class="form-control" id="staticEmail" value="{{$user->username}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" id="staticEmail" value="{{$user->name}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" name="email" class="form-control" id="staticEmail" value="{{$user->email}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">No Telfon</label>
                                <div class="col-sm-10">
                                    <input type="text" name="telfon" class="form-control" id="staticEmail" value="{{$user->telfon}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-10">
                                    <select name="gender" id="gender" class="form-control">
                                        <option value="pria">Pria</option>
                                        <option value="wanita">Wanita</option>
                                    </select>
                                    {{--                                    <input type="text" name="gender" class="form-control" id="staticEmail" value="{{$user->gender}}">--}}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <input type="date" name="tanggal_lahir" class="form-control" id="staticEmail" value="{{$user->tanggal_lahir}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Asal</label>
                                <div class="col-sm-10">
                                    <input type="text" name="asal" class="form-control" id="staticEmail" value="{{$user->asal}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Foto</label>
                                <div class="col-sm-10">
                                    <input type="file" name="image" class="form-control" id="staticEmail">
                                    <p class="text-info text-muted">kosongi jika tidak diubah</p>
                                </div>
                            </div>

                            <div align="center">
                                <button class="btn btn-primary w-50">Save</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
