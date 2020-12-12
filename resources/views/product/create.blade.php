@extends('layouts.app')
@section('content')

<div class="container mt-5">
    <div class="mt-5"></div>
    <h2>Upload Design</h2>
    <div class="mb-5"></div>
    <div class="d-flex justify-content-center">
        <div class="card" style="border:0;">
            <form action="{{route('design.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label>
                            <h4>Nama Design</h4>
                        </label>
                        <input type="text" class="form-control" style="border:3px solid" name="name"
                            placeholder="Nama dari desain anda" required>
                    </div>
                    <div class="form-group">
                    <label><h4>Product Design</h4></label>
                        <select name="category_id" class="form-control" style="border:3px solid" required>
                            <option value="" selected hidden>Pilih...</option>
                            @forelse(\App\Category::all() as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @empty
                            Tidak ada data
                            @endforelse
                        </select>
                    </div>

                    <div class="form-group">
                        <label>
                            <h4>Filosofi Desain</h4>
                        </label>
                        <textarea name="description" id="" cols="30" rows="5" style="border:3px solid"
                            placeholder="Tulislah Filosofi dari desain anda" class="form-control" required></textarea>
                    </div>
                    <label>
                        <h4>Kontak</h4>
                    </label>
                    <div class="form-row">

                        <div class="col-md-6">
                            <input type="text" name="user_email" style="border:3px solid" placeholder="Email"
                                class="form-control">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="user_instagram" style="border:3px solid" placeholder="Instagram"
                                class="form-control">
                        </div>
                        <div class="col-md-6 mt-2 ">
                            <input type="text" name="user_whatsapp" style="border:3px solid" placeholder="Whatsapp"
                                class="form-control">
                        </div>
                    </div>


                    <div class="form-group">
                        <label>
                            <h4>Foto</h4>
                        </label>
                        <input type="file" name="foto" style="height:50px;border:3px solid" class="form-control"
                            required>
                    </div>
                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="pb-5"></div>
@endsection
