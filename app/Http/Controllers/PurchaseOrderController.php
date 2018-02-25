<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\ProductDetail;
use App\PurchaseOrder;

class PurchaseOrderController extends Controller
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
    public function create(Request $request)
    {
        $purchaseOrder = PurchaseOrder::find($request->input('id'));
        return view('layouts.orders.company_order_list',['order1'=>$purchaseOrder]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (($request->input('more'))=="details"){
        $companyName= Company::where('name',$request->input('company_name'))->first();
        $productDetail= ProductDetail::where('batch_no',$request->input('batch'))->first();
        $purchaseOrder= new PurchaseOrder();
        $purchaseOrder->company()->associate($companyName);
        $purchaseOrder->save();
        return view('layouts.orders.company_order');
        }

        if (($request->input('more'))=="no"){
        $productDetail= ProductDetail::where('batch_no',$request->input('batch'))->first();
        $insId = PurchaseOrder::all()->last()->id;
        $f_purchaseOrder= PurchaseOrder::find($insId);

        $quantity= $request->input('quantity');
        $trade_price= $request->input('trade');
        $retail_price= $request->input('retail');
        $bonus= $request->input('bonus');
        
        $f_purchaseOrder->product_details()->attach($productDetail->id,['quantity'=>$quantity,'trade_price'=>$trade_price,'retail_price'=>$retail_price,'bonus'=>$bonus]);
        $f_purchaseOrder->save();
        return view('index');
    }

        if (($request->input('more'))=="yes"){
        $productDetail= ProductDetail::where('batch_no',$request->input('batch'))->first();
        $insId = PurchaseOrder::all()->last()->id;
        $f_purchaseOrder= PurchaseOrder::find($insId);

        $quantity= $request->input('quantity');
        $trade_price= $request->input('trade');
        $retail_price= $request->input('retail');
        $bonus= $request->input('bonus');
        
        $f_purchaseOrder->product_details()->attach($productDetail->id,['quantity'=>$quantity,'trade_price'=>$trade_price,'retail_price'=>$retail_price,'bonus'=>$bonus]);
        $f_purchaseOrder->save();
        return view('layouts.orders.company_order');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $purchaseOrder = PurchaseOrder::with('company')->get();
        return view('layouts.orders.view_company_order',['order'=>$purchaseOrder]);
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
        $purchaseOrder = PurchaseOrder::find($request->input('id'));

        $quantity= $request->input('quantity');
        $trade_price= $request->input('trade');
        $retail_price= $request->input('retail');
        $bonus= $request->input('bonus');
        $ids= $request->input('ids');

        $purchaseOrder->product_details()->updateExistingPivot($ids,['quantity'=>$quantity,'trade_price'=>$trade_price,'retail_price'=>$retail_price,'bonus'=>$bonus]);

        return redirect()->route('viewCompanyOrder');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $PurchaseOrder = PurchaseOrder::find($request->input('id'));
        $PurchaseOrder->product_details()->detach($request->input('ids'));
        return back();
    }
}
