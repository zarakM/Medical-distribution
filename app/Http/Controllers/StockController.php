<?php

namespace App\Http\Controllers;
use App\Stock;
use App\ProductDetail;

use Illuminate\Http\Request;

class StockController extends Controller
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $stock = new Stock();
        $stock->quantity = $request->input('Quantity');
        $stock->retail_price = $request->input('Retail');
        $stock->trade_price = $request->input('Trade');

        $product= ProductDetail::where('batch_no',$request->input('Batch'))->first();
        $stock->product_detail()->associate($product);
        $stock->save();
        return view('layouts.stock.add_stock');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $stock = Stock::with('product_detail')->get();
        return view('layouts.stock.available_stock', ['stock'=>$stock]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $stock = Stock::find($request->input('id'));
        $stock->quantity = $request->input('quantity');
        $stock->retail_price = $request->input('trade');
        $stock->trade_price = $request->input('retail');
        $stock->save();
        return redirect()->route('viewstock');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stock = Stock::find($id);
        $stock->delete();
        return back();
    }
}
