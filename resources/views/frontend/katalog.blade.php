@extends('layouts.landing')
@section('content')

    <div class="container mt-5">
        <div class="mt-5"></div>
        <h2>Katalog</h2>
        <div class="mb-5"></div>
        <div class="d-flex justify-content-center">
            <div class="row">

                @foreach($products as $key => $product)
                    <div class="col-lg-4">
                        <div class="card">
                            <img src="{{url('storage/'.$product->foto)}}" onerror="this.onerror=null;this.src='/product/1.png';" class="img-responsive img-fluid" />
                            <div class="card-footer bg-primary text-white">
                                <h2>{{$product->name}}</h2>
                                <p>Dibuat Oleh {{$product->user->name}}</p>
                                <a href="{{route('detail',$product->id)}}" class="btn text-dark btn-outline-warning btn-sm btn-block">
                                    Lihat
                                </a>
                            </div><!-- /.col-lg-4 -->
                        </div>
                    </div>
                    @endforeach

            </div><!-- /.row -->
        </div>
    </div>
    <div class="pb-5"></div>
@endsection
