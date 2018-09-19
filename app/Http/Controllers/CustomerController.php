<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\CustomerTypo;
use App\Area;

class CustomerController extends Controller
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
        $area = Area::where('name',$request->input('Area'))->first();
        $type = CustomerTypo::where('name',$request->input('type'))->first();
        $customer = new Customer();
        $customer->name = $request->input('Name');
        $customer->address = $request->input('Address');
        $customer->phone_no = $request->input('Phone');
        $customer->mobile_no = $request->input('Mobile');
        $customer->opening_balance = $request->input('opening');
        $customer->area()->associate($area);
        $customer->customer_typo()->associate($type);
        $customer->save();

        return view('layouts.customer.add_customer');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $customer = Customer::with('area')->get();
        return view('layouts.customer.customer_list',['customer'=>$customer]);
    }

    public function search(Request $request)
    {
        $query = $request->term;
        $posts = Customer::where('name','LIKE','%'.$query.'%')->get();

        foreach ($posts as $data) {
            $datas[] = $data['name'];
        }
        return response()->json($datas);
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
        $customer = Customer::find($request->input('id'));
        $customer->address = $request->input('address');
        $customer->phone_no = $request->input('phone');
        $customer->mobile_no = $request->input('mobile');
        $customer->save();
        return redirect()->route('viewcustomer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer= Customer::find($id);
        $customer->delete();
        return back();
    }
}
