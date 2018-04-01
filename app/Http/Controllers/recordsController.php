<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Record;


class recordsController extends Controller
{
    public function records(){
        $records = Record::all();

        return view ('records')
        ->with('records', $records)
        ;
    }

    public function recordsSubmit(Request $request){
        $records = new Record;
        $records->dpname = $request->dpname;
        $records->dpvoterid = $request->dpvoterid;
        $records->dpadhaarid = $request->dpadhaarid;
        $records->dphfname = $request->dpfhname;
        $records->dpaddr = $request->dpvill;
        $records->dpgp = $request->dpgp;
        $records->dpdeathdt = $request->dpdeathdt;
                                //  $request->dprelation;
        $records->bnname = $request->bnname;
        $records->bnvoterid = $request->bnvoterid;
        $records->bnadhaarid = $request->bnadhaarid;
        $records->amount = $request->dpamount;
        $records->paydt = $request->dppaydt;
        $records->save();


        // echo "Hello:".$request->dpname;
        return back();

    }
}
