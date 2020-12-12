@extends('layouts.app')
@section('content')

<div class="container mt-5">

    <div class="mt-5"></div>
    <h2>Design Mu</h2>
    <a href="{{route('design.create')}}" class="btn btn-success mt-3">
        Buat Design
    </a>
    <div class="mb-5"></div>

    <div class="card mb-5">
        <div class="card-header">
            <h4>
                {{ __('Design Private') }}
            </h4>
        </div>
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            @foreach($privates as $key => $private)
                <div class="col-lg-4">
                    <div class="card">
                        <img src="{{asset('storage/'.$private->foto)}}" onerror="this.onerror=null;this.src='/product/1.png';" class="img-responsive img-fluid" />
                        <div class="card-footer bg-primary text-white">
                            <h2>{{$private->name}}</h2>
                            <p>Dibuat Oleh {{$private->user->name}}</p>
                            <a href="{{route('design.show',$private->id)}}" class="btn btn-sm btn-info">
                                Detail
                            </a>
                        </div><!-- /.col-lg-4 -->
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h4>
                {{ __('Design Public') }}
            </h4>
        </div>
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            @foreach($publics as $key => $private)
                <div class="col-lg-4">
                    <div class="card">
                        <img src="{{asset('storage/'.$private->foto)}}" onerror="this.onerror=null;this.src='/product/1.png';" class="img-responsive img-fluid" />
                        <div class="card-footer bg-primary text-white">
                            <h2>{{$private->name}}</h2>
                            <p>Dibuat Oleh {{$private->user->name}}</p>
                            <a href="{{route('design.show',$private->id)}}" class="btn btn-sm btn-info">
                                Detail
                            </a>
                        </div><!-- /.col-lg-4 -->
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</div>
<div class="pb-5"></div>
@endsection
