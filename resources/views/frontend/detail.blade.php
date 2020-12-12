@extends('layouts.landing')
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
                                        <h4>Karya</h4>
                                    </label>
                                    <p>
                                        nama : {{$product->user->name}}
                                    </p>
                                    <p>
                                        asal : {{$product->user->asal}}
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
                                        {{$product->isPublic = 'no' ? 'Public' : 'Private'}}
                                    </p>
                                </div>
                            </div>

                            <div class="d-inline-flex">
                                <a href="#!" class="btn btn-success ml-3 mb-3">
                                    Whatsapp : {{$product->user_whatsapp}}
                                </a>
                                <a href="#!" class="btn btn-warning ml-3 mb-3">
                                    Email : {{$product->user_email}}
                                </a>
                                <a href="#!" class="btn btn-danger ml-3 mb-3">
                                    Instagram : {{$product->user_instagram}}
                                </a>
                            </div>
                    </div>

                </div>


            </div><!-- /.row -->
        </div>
    </div>
    <div class="pb-5"></div>
@endsection
