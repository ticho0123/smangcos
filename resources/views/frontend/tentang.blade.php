@extends('layouts.landing')
@section('content')

    <div class="container mt-5">
        <div class="mb-5"></div>
        <div class="d-block">
            <div>
                <div class="form-group">
                    <label>
                        <h2>Tentang</h2>
                    </label>
                    <p>
                        Kami di sini untuk selalu membantu Anda! Jika Anda membutuhkan dukungan, jangan ragu untuk menghubungi kami
                    </p>
                </div>
            </div><!-- /.row -->
            <div>
                <div class="form-group">
                    <label>
                        <h2>Kontak</h2>
                    </label>
                    <p>
                        smongco@gmail.com
                    </p>
                </div>
            </div><!-- /.row -->

            <form method="get" action="{{route('thanks')}}">
                <div>
                    <label>
                        <h2>Kirim Masukanmu</h2>
                    </label>
                    <div>
                        <input type="text" name="user_nama" style="border:3px solid" placeholder="nama"
                               class="form-control" required>
                    </div>
                </div>

                <div>
                    <label>
                        <h4>Pesan</h4>
                    </label>
                    <textarea name="description" id="" cols="30" rows="5" style="border:3px solid"
                              placeholder="Isi pesan..." class="form-control" required></textarea>
                </div>

                <div class="mt-3 mb-3 text-right">
                    <button type="submit" class="btn btn-info w-25">
                        Kirim
                    </button>
                </div>
            </form>

        </div>
    </div>
    <div class="pb-5"></div>
@endsection
