<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\CustomerOrder;
use App\CustomerOrderDetail;
use App\Salesman;
use App\ProductDetail;

class CustomerOrderController extends Controller
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
        $customerName= Customer::where('name',$request->input('customer_name'))->first();
        $salesman= Salesman::where('name',$request->input('salesman_name'))->first();

        $customerOrder= new CustomerOrder();
        $customerOrder->customer()->associate($customerName);
        $customerOrder->salesman()->associate($salesman);
        $customerOrder->save();
        $insertedId = $customerOrder->id;

        $f_customerOrder= CustomerOrder::find($insertedId);
        $orderDetail = new CustomerOrderDetail();
        $orderDetail->customer_order()->associate($f_customerOrder);
        $orderDetail->save();
        return view('layouts.orders.customer_order');
        }
        
        if (($request->input('more'))=="yes")
        {
        $productDetail= ProductDetail::where('batch_no',$request->input('batch'))->first();

        $insId = CustomerOrderDetail::all()->last()->id;
        $f_customerDetail = CustomerOrderDetail::find($insId);
        $quantity= $request->input('quantity');
        $trade_price= $request->input('trade');
        $retail_price= $request->input('retail');
        $bonus= $request->input('bonus');
        $f_customerDetail->product_details()->attach($productDetail->id,['quantity'=>$quantity,'trade_price'=>$trade_price,'retail_price'=>$retail_price,'bonus'=>$bonus]);
        $f_customerDetail->save();
        return view('layouts.orders.customer_order');
        }
        if (($request->input('more'))=="no")
        {
            $productDetail= ProductDetail::where('batch_no',$request->input('batch'))->first();

        $insId = CustomerOrderDetail::all()->last()->id;
        $f_customerDetail = CustomerOrderDetail::find($insId);
        $quantity= $request->input('quantity');
        $trade_price= $request->input('trade');
        $retail_price= $request->input('retail');
        $bonus= $request->input('bonus');
        $f_customerDetail->product_details()->attach($productDetail->id,['quantity'=>$quantity,'trade_price'=>$trade_price,'retail_price'=>$retail_price,'bonus'=>$bonus]);
        $f_customerDetail->save();
            return view('index');
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
        $cOrder = CustomerOrderDetail::all();
        return view('layouts.orders.view_customer_order',['order'=>$cOrder]);
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
        $customerOrderDetail = CustomerOrderDetail::find($request->input('id'));

        $quantity= $request->input('quantity');
        $trade_price= $request->input('trade');
        $retail_price= $request->input('retail');
        $bonus= $request->input('bonus');
        $ids= $request->input('ids');

        $customerOrderDetail->product_details()->updateExistingPivot($ids,['quantity'=>$quantity,'trade_price'=>$trade_price,'retail_price'=>$retail_price,'bonus'=>$bonus]);

        return redirect()->route('viewCustomerOrder');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $customerOrder = CustomerOrderDetail::find($request->input('id'));
        $customerOrder->product_details()->detach($request->input('ids'));
        return back();
    }
}
