<?php

namespace App\Http\Controllers;

use App\CustomerTypo;
use Illuminate\Http\Request;

class CustomerTypoController extends Controller
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

    public function search(Request $request)
    {
        $query = $request->term;
        $posts = CustomerTypo::where('name','LIKE','%'.$query.'%')->get();

        foreach ($posts as $data) {
            $datas[] = $data['name'];
        }
        return response()->json($datas);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CustomerTypo  $customerTypo
     * @return \Illuminate\Http\Response
     */
    public function show(CustomerTypo $customerTypo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CustomerTypo  $customerTypo
     * @return \Illuminate\Http\Response
     */
    public function edit(CustomerTypo $customerTypo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CustomerTypo  $customerTypo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CustomerTypo $customerTypo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CustomerTypo  $customerTypo
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomerTypo $customerTypo)
    {
        //
    }
}
