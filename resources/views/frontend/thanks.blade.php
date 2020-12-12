@extends('layouts.landing')
@section('content')

    <div class="container mt-5 p-5">
        <div class="mb-5"></div>
        <div class="d-block">
            <div align="center" class="mt-5">
                <div class="form-group" style="border: black solid 2px">
                    <label>
                        <h2>Terimakasih!!!</h2>
                    </label>
                    <p>
                        Terima kasih sudah memberi masukan semoga dengan masukan dari kalian, kami bisa menjadi lebih baik lagi
                    </p>
                </div>
            </div><!-- /.row -->

            <div class="mt-3 mb-3 text-center">
                <a href="{{route('awal')}}" class="btn btn-info w-25">
                    Ke Home
                </a>
            </div>

        </div>
    </div>
    <div class="pb-5"></div>
@endsection
