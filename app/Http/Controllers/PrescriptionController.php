<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use App\Models\PrescriptionMedicineInf;
use App\Models\PrescriptionPatientInf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use DateTimeZone;

class PrescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewprescription()
    {
        $ppis = PrescriptionPatientInf::where('uuid',auth()->user()->id)->get();
        return view('viewprescription', compact('ppis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addprescription()
    {
        return view('addprescription');
    }

    public function get_medi_by_name(Request $request)
    {
        if ($request->get('medi_name') != null) {
            $medi_name = $request->get('medi_name');

            $data = DB::table('medicines')->where('medi_name', 'LIKE', "%{$medi_name}%")->get();
            $output = '<ul class="dropdown-menu select-product-list" style="display:block; position:relative">';
            foreach ($data as $row) {
                $output .= '
                        <li data-product=' . $row->id . 'medi-name=' . $row->medi_name . '><a href="#">' . $row->medi_name . ' - ' . $row->gen_name . '</a></li>';
            }
            $output .= '</ul>';
            echo $output;
            exit(0);
        }
    }



    public function add_medi_by_id(Request $request)
    {

        if ($request->get('medi_id')) {
            $medi_id = $request->get('medi_id');
            $data['medi'] = Medicine::where('id', $medi_id)->get()->first();
            $data['c'] = $request->count;
            return view('add-medi-to-pres', $data);
            exit(0);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeprescription(Request $request)
    {

        $c = count($request->all());
        $c = $c - 6;
        $cs = $c / 4;


        $ppi = new PrescriptionPatientInf;
        $ppi->uuid = auth()->user()->id;
        $ppi->pat_name = $request->pat_name;
        $ppi->pat_age = $request->pat_age;
        $ppi->ref_dr_name = $request->ref_dr_name;
        $ppi->ref_dr_details = $request->ref_dr_details;
        $ppi->save();

        $pat_id = $ppi->id;

        for ($i = 1; $i <= $cs; $i++) {
            $mdn = "mdn" . $i;
            $bnt = "bnt" . $i;
            $lnt = "lnt" . $i;
            $dnt = "dnt" . $i;
            $pmi = new PrescriptionMedicineInf;
            $pmi->pat_id = $pat_id;
            $pmi->mdn = $request->$mdn;
            $pmi->bnt = $request->$bnt;
            $pmi->lnt = $request->$lnt;
            $pmi->dnt = $request->$dnt;
            $pmi->save();
        }
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
