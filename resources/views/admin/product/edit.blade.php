@extends('layouts.app')
@section('content')

    <div class="container mt-5">
        <div class="mt-5"></div>
        <h2>Edit Design</h2>
        <div class="mb-5"></div>
        <div class="d-flex justify-content-center">
            <div class="card" style="border:0;">
                <form action="{{route('design.update',$product->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>
                                <h4>Nama Design</h4>
                            </label>
                            <input type="text" class="form-control" value="{{$product->name}}" style="border:3px solid" name="name"
                                   placeholder="Nama dari desain anda" required>
                        </div>
                        <div class="form-group">
                            <label><h4>Product Design</h4></label>
                            <select name="kategori" class="form-control" style="border:3px solid" required>
                                <option value="{{$product->kategori}}">Pilih...</option>
                                <option value="kaos">Kaos</option>
                                <option value="sepatu">Sepatu</option>
                                <option value="jaket">Jaket</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label><h4>Visibility</h4></label>
                            <select name="isPublic" class="form-control" style="border:3px solid" required>
                                <option value="{{$product->isPublic}}">Pilih...</option>
                                <option value="yes">Public</option>
                                <option value="no">Private</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>
                                <h4>Filosofi Desain</h4>
                            </label>
                            <textarea name="description" id="" rows="5" style="border:3px solid"
                                      placeholder="Tulislah Filosofi dari desain anda" class="form-control" required>
                                {{$product->description}}
                            </textarea>
                        </div>
                        <label>
                            <h4>Kontak</h4>
                        </label>
                        <div class="form-row">

                            <div class="col-md-6">
                                <input type="text" name="user_email" style="border:3px solid" value="{{$product->user_email}}" placeholder="Email"
                                       class="form-control">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="user_instagram" style="border:3px solid" value="{{$product->user_instagram}}" placeholder="Instagram"
                                       class="form-control">
                            </div>
                            <div class="col-md-6 mt-2 ">
                                <input type="text" name="user_whatsapp" style="border:3px solid" value="{{$product->user_whatsapp}}" placeholder="Whatsapp"
                                       class="form-control">
                            </div>
                        </div>


                        <div class="form-group">
                            <label>
                                <h4>Foto</h4>
                            </label>
                            <input type="file" name="foto" style="height:50px;border:3px solid" class="form-control">
                            <p class="text-muted text-info">kosongi jika tidak ingin diganti</p>
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
