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
        $records->bnrelation = $request->bnrelation;
                                
        $records->bnname = $request->bnname;
        $records->bnvoterid = $request->bnvoterid;
        $records->bnadhaarid = $request->bnadhaarid;
        $records->amount = $request->dpamount;
        $records->paydt = $request->dppaydt;
        $records->save();


        // echo "Hello:".$request->dpname;
        return redirect()->to('/dashboard');

    }



    public function recordsEdit(Request $request, $record_id){
        $record = Record::find($record_id);

        return view('recordsedit')
            ->with('record', $record);
    }

    public function recordsEditSubmit(Request $request){
        $records = Record::find($request->dpid);
    
        $records->dpname = $request->dpname;
        $records->dpvoterid = $request->dpvoterid;
        $records->dpadhaarid = $request->dpadhaarid;
        $records->dphfname = $request->dpfhname;
        $records->dpaddr = $request->dpvill;
        $records->dpgp = $request->dpgp;
        $records->dpdeathdt = $request->dpdeathdt;
                                
        $records->bnname = $request->bnname;
        $records->bnrelation = $request->bnrelation;
        $records->bnvoterid = $request->bnvoterid;
        $records->bnadhaarid = $request->bnadhaarid;
        $records->amount = $request->dpamount;
        $records->paydt = $request->dppaydt;

        $records->save();


        
        return redirect()->to('/dashboard');
    }
}
