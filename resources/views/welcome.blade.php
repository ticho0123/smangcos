@extends('layouts.landing')
@section('content')
<div id="myCarousel" class="carousel slide" data-ride="carousel">

    <div class="carousel-inner">
        <div class="carousel-item background-1" style="height:700px">
        </div>
        <div class="carousel-item img-fluid background-2 active" style="height:700px">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Berkarya dengan <br>menghasilkan kebanggan.</h1>
                    <p>Smangco adalah sebuah platform yang dapat <br>membantu pengguna dalam mengaplikasikan hasil
                        karyanya</p>
                    <p><a class="btn btn-lg btn-primary" href="{{route('design.create')}}" role="button">Upload
                            Desainmu</a></p>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<!-- Marketing messaging and featurettes
  ================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

<h2 class="text-center mb-2">List Produk</h2>
<br>
    <!-- Three columns of text below the carousel -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
            <img src="/category/1.png" class="img-responsive img-fluid rotate90" />
                <div class="card-body">
                    <h2>Desain Kaos</h2>
                    <p>Cari dan temukan desain-desain kaos kekinian dari berbagai seniman yang ada diindonesia, dan jangan lupa untuk selalu mensupport produk indonesia.</p>
                    <p><a class="btn btn-primary" href="#" role="button">Mulai Jelajahi &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
            <img src="/category/2.png" class="img-responsive img-fluid rotate90" />
                <div class="card-body" >


                    <h2>Desain Sepatu</h2>
                    <p>Cari dan temukan desain-desain Sepatu kekinian dari berbagai seniman yang ada, dan jangan lupa untuk selalu mensupport produk indonesia.</p>
                    <p><a class="btn btn-primary" href="#" role="button">Mulai Jelajahi &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
            </div>
        </div>

        <div class="col-lg-4" >
            <div class="card">
            <img src="/category/3.png" width="100%" class="img-responsive img-fluid rotate90" />
                <div class="card-body">


                    <h2>Desain Jaket</h2>
                    <p>Cari dan temukan desain-desain Jaket kekinian dari berbagai seniman yang ada, dan jangan lupa untuk selalu mensupport produk indonesia.</p>
                    <p><a class="btn btn-primary" href="#" role="button">Mulai Jelajahi &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
            </div>
        </div>

    </div><!-- /.row -->

</div><!-- /.container -->

@endsection
