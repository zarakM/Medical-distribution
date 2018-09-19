<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\ProductDetail;
use App\Product;
use App\Stock;
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


    

    public function search_product(Request $request)
    {
        $query = $request->term;
        $posts = City::where('name','LIKE','%'.$query.'%')->get();

        foreach ($posts as $data) {
            $datas[] = $data['name'];
        }

        return response()->json($datas);
    }

    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (($request->input('more'))=="details"){
        $companyName= Company::where('name',$request->input('company_name'))->first();
        $productDetail= Product::where('code',$request->input('code'))->first();
        $purchaseOrder= new PurchaseOrder();
        $purchaseOrder->company()->associate($companyName);
        $purchaseOrder->save();
        return view('layouts.orders.company_order');
        }

        if (($request->input('more'))=="no"){
        $product=Product::where('code',$request->input('code'))->first();
        $productDetail= ProductDetail::where('product_id',$product->id)->first();
        $insId = PurchaseOrder::all()->last()->id;
        $f_purchaseOrder= PurchaseOrder::find($insId);

        $expiry= $request->input('expiry');
        $batch_no= $request->input('batch_no');
        $quantity= $request->input('quantity');
        $trade_price= $request->input('trade');
        $retail_price= $request->input('retail');
        $bonus= $request->input('bonus');
        
        
        $cost= ($product->stock->trade_price)*$quantity;
        
        $f_purchaseOrder->product_details()->attach($productDetail->id,['quantity'=>$quantity,'batch_no'=>$batch_no ,'expiry'=>$expiry ,'disc'=>$trade_price,'net'=>$retail_price,'bonus'=>$bonus,'total'=>$cost]);
        $f_purchaseOrder->save();
        return view('index');
    }   

        if (($request->input('more'))=="yes"){
        $product=Product::where('code',$request->input('code'))->first();
        $productDetail= ProductDetail::where('product_id',$product->id)->first();
        $insId = PurchaseOrder::all()->last()->id;
        $f_purchaseOrder= PurchaseOrder::find($insId);
        
        $expiry= $request->input('expiry');
        $batch_no= $request->input('batch_no');
        $quantity= $request->input('quantity');
        $trade_price= $request->input('trade');
        $retail_price= $request->input('retail');
        $bonus= $request->input('bonus');
        $cost= ($product->stock->trade_price)*$quantity;
        
        $f_purchaseOrder->product_details()->attach($productDetail->id,['quantity'=>$quantity,'batch_no'=>$batch_no ,'expiry'=>$expiry ,'disc'=>$trade_price,'net'=>$retail_price,'bonus'=>$bonus,'total'=>$cost]);
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
        $purchaseOrder = PurchaseOrder::all();
        $product = Product::with(['product_details','stock'])->get();
        $stock = Stock::all();
        return view('layouts.orders.view_company_order')
        ->with('order',$purchaseOrder)
        ->with('product',$product);
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
