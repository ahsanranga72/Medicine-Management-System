<?php

namespace App\Http\Controllers;

use App\Models\Generic;
use App\Models\Manufacturer;
use App\Models\MediType;
use Illuminate\Http\Request;

class ManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewmanufacturercompany()
    {
        $manufacturer = Manufacturer::all();
        //var_dump($manufacturer);
        notify()->success('Laravel Notify is Breakfast!');
        return view('viewmanufacturercompany', compact('manufacturer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addmanufacturecompany()
    {
        return view('addmanufacturecompany');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storemanufacturecompany(Request $request)
    {
        $manufacturer = new Manufacturer;
        $manufacturer->man_com_name = $request->man_com_name;
        $manufacturer->save();

        return redirect()->route('viewmanufacturercompany')->with('message' , 'Manufacturer store successfully !!');
    }

    public function addgenericname()
    {
        return view('addgenericname');
    }

    public function storegenericname(Request $request)
    {
        $generic = new Generic;
        $generic->gen_name = $request->gen_name;
        $generic->save();

        return redirect()->route('viewgenericname')->with('message' , 'Generic store successfully !!');
    }

    public function viewgenericname()
    {
        $generics = Generic::all();
        //var_dump($manufacturer);
        return view('viewgenericname', compact('generics'));
    }

    public function addmeditype()
    {
        return view('addmeditype');
    }

    public function storemeditype(Request $request)
    {
        $mtypes = new MediType;
        $mtypes->mtype_name = $request->mtype_name;
        $mtypes->save();

        return redirect()->route('viewmeditype')->with('message' , 'Medicine Type store successfully !!');
    }

    public function viewmeditype()
    {
        $mtypes = MediType::all();
        //var_dump($manufacturer);
        return view('viewmeditype', compact('mtypes'));
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
