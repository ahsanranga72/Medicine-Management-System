<?php

namespace App\Http\Controllers;

use App\Models\Generic;
use App\Models\Manufacturer;
use App\Models\Medicine;
use App\Models\MediType;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewmedicine()
    {
        $meds = Medicine::all()->sortBy('medi_name');
        return view('viewmedicine', compact('meds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addmedicine()
    {
        $types = MediType::all()->sortBy("mtype_name");
        $generics = Generic::all()->sortBy("gen_name");
        $manufacturers = Manufacturer::all()->sortBy("man_com_name");
        return view('addmedicine', compact('types','generics','manufacturers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storemedicine(Request $req)
    {
        $medi = new Medicine;
        $medi->medi_name=$req->medi_name;
        $medi->medi_type=$req->medi_type;
        $medi->gen_name=$req->gen_name;
        $medi->mg=$req->mg;
        $medi->manufacturer=$req->manufacturer;
        $medi->price=$req->price;
        $medi->uses=$req->uses;
        $medi->caution=$req->caution;
        $medi->save();

        return redirect()->route('viewmedicine')->with('message' , 'Medicine store successfully !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
