<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Company;
use App\Strength;
use App\ProductDetail;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function search(Request $request)
    {
        $query = $request->term;
        $posts = ProductDetail::where('code','LIKE','%'.$query.'%')->get();

        foreach ($posts as $data) {
            $datas[] = $data['code'];
        }
        return response()->json($datas);
    }

    public function search_name(Request $request)
    {
        $query = $request->term;
        $posts = Product::where('name','LIKE','%'.$query.'%')->get();

        foreach ($posts as $data) {
            $datas[] = $data['name'];
        }
        return response()->json($datas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $companyName= Company::where('name',$request->input('company_name'))->first();
        
        $product = new Product();
        $product->name = $request->input('Name');
        $product->company()->associate($companyName);
        $product->save();

        $productDetail = new ProductDetail();
        $productDetail->pack = $request->input('Pack');
        $productDetail->pack = $request->input('strength');
        $productDetail->trade_price = $request->input('trade');
        $productDetail->retail_price = $request->input('retail');

        $f_product = Product::where('code',$request->input('code'))->first();
        $productDetail->product()->associate($f_product);
        $productDetail->save();

        return view('layouts.products.add_product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $product = ProductDetail::with('product')->get();
        return view('layouts.products.view_product',['product'=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $product = ProductDetail::with('product')->get();
        return view('layouts.products.add_product',['product'=>$product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $productDetail = ProductDetail::find($request->input('id'));
        $productDetail->strength = $request->input('strength');
        $productDetail->pack = $request->input('pack');
        $productDetail->expiry = $request->input('expiry');
        $productDetail->save();
        return redirect()->route('viewproducts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ProductDetail=  ProductDetail::find($id);
        $ProductDetail->delete();
        return back();
    }
}
