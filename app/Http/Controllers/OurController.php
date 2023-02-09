<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ourProducts;
use Illuminate\Http\Request;

class OurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ourProducts::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return ourProducts::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  str
     * @return \Illuminate\Http\Response
     */
    public function search($name)
    {
        return ourProducts::where('name','like','%'.$name.'%')->get();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pro = ourProducts::find($id);
        $pro-> update($request->all());
        return $pro ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         ourProducts::destroy($id);

    }
}
