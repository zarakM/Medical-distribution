<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Salesman;
use App\Area;

class SalesmanController extends Controller
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
        $salesman = new Salesman();
        $salesman->name = $request->input('Name');
        $salesman->mobile_no = $request->input('Mobile');
        $area = Area::where('name',$request->input('Area'))->first();
        $salesman->area()->associate($area);
        $salesman->save();
        return view('layouts.saleman.add_saleman');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $salesman = Salesman::with('area')->get();
        return view('layouts.saleman.view_saleman',['salesman'=>$salesman]);
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
        $salesman = Salesman::find($request->input('id'));
        $salesman->mobile_no = $request->input('Mobile');
        $area = Area::where('name',$request->input('Area'))->first();
        $salesman->area()->associate($area);
        $salesman->save();
        return redirect()->route('viewsaleman');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $salesman = Salesman::find($id);
        $salesman->delete();
        return back();
    }
}
