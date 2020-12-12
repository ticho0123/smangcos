<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use function GuzzleHttp\Psr7\str;
use Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $publics = Product::where('user_id',auth()->user()->id)->where('isPublic','yes')->get();
        $privates = Product::where('user_id',auth()->user()->id)->where('isPublic','no')->get();
        return view('admin.product.index',compact('publics','privates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $data['slug'] = \Str::slug($data['name']);
        $data['user_id'] = auth()->user()->id;

        if(isset($data['foto'])){
            $data['foto'] = Storage::disk('public')->putFile('media', $data['foto']);
        }

//        dd($data);
        Product::create($data);
        return redirect()->route('design.index')->with('success','Berhasil !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('admin.product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        $data = $request->all();

        $data['slug'] = \Str::slug($data['name']);
        $data['user_id'] = auth()->user()->id;

        if(isset($data['foto'])){
            $data['foto'] = Storage::disk('public')->putFile('media', $data['foto']);
        }

        $product->update($data);

        return redirect()->route('design.index')->with('success','Berhasil !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return redirect()->back()->with('error','Berhasil !');
    }
}
