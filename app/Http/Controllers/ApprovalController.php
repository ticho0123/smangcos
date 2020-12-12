<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ApprovalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        $publics = Product::where('isPublic','yes')->get();
        $privates = Product::where('isPublic','no')->get();
        return view('admin.approval.index',compact('publics','privates'));
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return Factory|View
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('admin.approval.show',compact('product'));
    }

    /**
     * Display the specified resource.
     *
     * @param Product $product
     * @return RedirectResponse
     */
    public function terima($id)
    {
        $product = Product::find($id);
        $product->update([
           'approve' => 'accept'
        ]);
        return redirect()->route('approval.index')->with('status','Berhasil !');
    }

    /**
     * Display the specified resource.
     *
     * @param Product $product
     * @return RedirectResponse
     */
    public function tolak($id)
    {
        $product = Product::find($id);
        $product->update([
            'approve' => 'decline'
        ]);
        return redirect()->route('approval.index')->with('status','Berhasil !');
    }

    /**
     * Display the specified resource.
     *
     * @param Product $product
     * @return RedirectResponse
     * @throws \Exception
     */
    public function hapus($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect()->route('approval.index')->with('status','Berhasil !');
    }


}
