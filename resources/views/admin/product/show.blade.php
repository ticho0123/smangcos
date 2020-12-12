@extends('layouts.app')
@section('content')

    <div class="container mt-5">
        <div class="mt-5"></div>
{{--        <h2>Design Mu</h2>--}}
{{--        <a href="{{route('design.create')}}" class="btn btn-success mt-3">--}}
{{--            Buat Design--}}
{{--        </a>--}}
        <div class="mb-5"></div>
        <div class="d-flex justify-content-center">
            <div class="row">


                <div class="card" style="width: 1200px">
                    <div class="card-header">
                        <h4>
                            {{ __('Detail Design') }}
                        </h4>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div align="center" class="mb-5">
                            <img src="{{asset('storage/'.$product->foto)}}"
                                 width="400px" height="500px" onerror="this.onerror=null;this.src='/product/1.png';" class="img-responsive img-fluid" />
                        </div>

                            <div class="p-5">
                                <div class="form-group">
                                    <label>
                                        <h4>Nama Desain</h4>
                                    </label>
                                    <p>
                                        {{$product->name}}
                                    </p>
                                </div>

                                <div class="form-group">
                                    <label>
                                        <h4>Desain Oleh</h4>
                                    </label>
                                    <p>
                                        {{$product->user->name}}
                                    </p>
                                </div>

                                <div class="form-group">
                                    <label>
                                        <h4>Filosofi Design</h4>
                                    </label>
                                    <p>
                                        {{$product->description}}
                                    </p>
                                </div>

                                <div class="form-group">
                                    <label>
                                        <h4>Kategori</h4>
                                    </label>
                                    <p>
                                        {{$product->kategori}}
                                    </p>
                                </div>

                                <div class="form-group">
                                    <label>
                                        <h4>Visibility</h4>
                                    </label>
                                    <p>
                                        {{$product->isPublic = 'no' ? 'Private' : 'Public'}}
                                    </p>
                                </div>
                            </div>
                    </div>

                    <a href="{{route('design.edit',$product->id)}}" class="btn btn-block btn-warning mb-3">
                        Edit
                    </a>

                </div>


            </div><!-- /.row -->
        </div>
    </div>
    <div class="pb-5"></div>
@endsection
