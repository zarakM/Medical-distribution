<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompanyController extends Controller
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
    }

    public function search_o()
    {
        $posts = Company::all();

        foreach ($posts as $data) {
            $datas[] = $data['name'];
        }

        echo json_encode($datas);
    }

    public function search(Request $request)
    {
        $query = $request->term;
        $posts = Company::where('name','LIKE','%'.$query.'%')->get();

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
        $company = new Company();
        $company->name = $request->input('Name');
        $company->address = $request->input('Address');
        $company->mobile_no = $request->input('Mobile');
        $company->phone_no = $request->input('Phone');
        $company->fax_no = $request->input('Fax');
        $company->save();

        return view('layouts.company.register_company');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $company = Company::all();
        return view('layouts.company.registred_companies',['company'=>$company]);
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
        $company = Company::find($request->input('id'));
        $company->address = $request->input('address');
        $company->phone_no = $request->input('phone');
        $company->mobile_no = $request->input('mobile');
        $company->fax_no = $request->input('fax');
        $company->save();
        return redirect()->route('viewcompanies');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = Company::find($id);
        $company->delete();
        return back();
    }
}
